(function () {
  const store = MM.store, { $, $$, icons } = MM;
  const page = document.body.dataset.page;
  const TERMS = store.catalogue().terms;

  // fallback when a result page is opened without an order
  const SAMPLE_ORDER = {
    ref: 'MM 10482', customer: { name: 'John Smith', email: 'john@example.com' }, discountCode: 'SPRING100',
    lines: [{ service: 'seo', tier: 'silver', term: 3 }, { service: 'paid-search', tier: 'bronze', term: 3 }]
  };

  const lineName = l => `${store.service(l.service).name}, ${store.tierName(l.tier)} tier`;

  function orderTotals(order) {
    const subtotal = order.lines.reduce((s, l) => s + store.price(l.service, l.tier, l.term), 0);
    const code = order.discountCode, d = code && store.catalogue().discounts[code];
    const off = d ? Math.min(d.amount, subtotal) : 0;
    return { subtotal, discount: off ? { code, amount: off } : null, total: subtotal - off };
  }

  function renderSummary(lines, totals) {
    const box = $('[data-order-summary]');
    if (!box) return;
    $('[data-order-lines]', box).innerHTML = lines.map(l => `<div class="order-line"><div><b>${lineName(l)}</b><small>${store.termLabel(l.service, l.term)}</small></div><b>${store.money(store.price(l.service, l.tier, l.term))}</b></div>`).join('');
    $('[data-subtotal]', box).textContent = store.money(totals.subtotal);
    const dl = $('[data-discount-line]', box);
    dl.hidden = !totals.discount;
    if (totals.discount) {
      $('[data-discount-label]', box).textContent = 'Discount, ' + totals.discount.code;
      $('[data-discount-value]', box).textContent = store.money(totals.discount.amount) + ' off';
    }
    $('[data-total]', box).textContent = store.money(totals.total);
  }

  /* Cart */
  function renderCart() {
    const lines = store.cart();
    const list = $('[data-cart-lines]');
    $('[data-cart-empty]').hidden = lines.length > 0;
    $('[data-cart-summary]').hidden = lines.length === 0;
    list.innerHTML = lines.map(l => {
      const s = store.service(l.service);
      const term = s.oneOff
        ? '<p class="cart-line__once">One off payment</p>'
        : `<div class="segmented" role="group" aria-label="Term for ${s.name}">${TERMS.map(m => `<button type="button" class="segmented__option${m === l.term ? ' is-active' : ''}" data-line="${l.id}" data-line-term="${m}">${m} ${m > 1 ? 'months' : 'month'}</button>`).join('')}</div>`;
      const monthly = s.oneOff ? 'One off' : `${store.money(store.monthly(l.service, l.tier, l.term))} a month`;
      return `<div class="cart-line">
        <div class="cart-line__info"><p class="cart-line__name">${s.name}</p><p class="cart-line__tier">${store.tierName(l.tier)} tier</p></div>
        <div class="cart-line__term"><span class="cart-line__label">Term</span>${term}</div>
        <div class="cart-line__price"><p class="cart-line__total">${store.money(store.lineTotal(l))}</p><p class="cart-line__monthly">${monthly}</p></div>
        <button type="button" class="cart-line__remove" data-remove="${l.id}">Remove</button>
      </div>`;
    }).join('');
    $('[data-cart-total]').textContent = store.money(store.totals(lines).subtotal);
    $$('[data-line-term]', list).forEach(b => b.addEventListener('click', () => store.setLineTerm(b.dataset.line, +b.dataset.lineTerm)));
    $$('[data-remove]', list).forEach(b => b.addEventListener('click', () => store.removeFromCart(b.dataset.remove)));
  }

  /* Checkout */
  function renderCheckout() {
    const lines = store.cart();
    if (!lines.length) { location.replace('cart.html'); return; }
    renderSummary(lines, store.totals(lines));
    const d = store.discount(), input = $('[data-discount-input]'), apply = $('[data-discount-apply]');
    if (document.activeElement !== input) input.value = d ? d.code : '';
    setApplyState();
  }
  function setApplyState() {
    const d = store.discount(), input = $('[data-discount-input]'), apply = $('[data-discount-apply]');
    const active = d && input.value.trim().toUpperCase() === d.code;
    apply.innerHTML = active ? icons.check + 'Applied' : 'Apply';
    apply.classList.toggle('is-applied', !!active);
  }
  function nextRef() {
    const n = store.read('mm.nextRef', 10482);
    store.write('mm.nextRef', n + 1);
    return 'MM ' + n;
  }

  if (page === 'cart') {
    renderCart();
    document.addEventListener('mm:cart', renderCart);
    document.addEventListener('mm:currency', renderCart);
  }

  if (page === 'checkout') {
    const form = $('[data-checkout]');
    const session = store.session();
    if (session) { form.elements.name.value = session.name; form.elements.email.value = session.email; }
    renderCheckout();
    document.addEventListener('mm:currency', renderCheckout);
    document.addEventListener('mm:cart', renderCheckout);
    // button reads Applied while the field holds the active code; empty field plus Apply removes it
    $('[data-discount-input]').addEventListener('input', setApplyState);
    $('[data-discount-apply]').addEventListener('click', () => {
      const ok = store.applyDiscount($('[data-discount-input]').value);
      $('[data-discount-message]').hidden = ok;
      renderCheckout();
    });
    $('[data-discount-input]').addEventListener('keydown', e => { if (e.key === 'Enter') { e.preventDefault(); $('[data-discount-apply]').click(); } });
    form.addEventListener('submit', e => {
      e.preventDefault();
      if (!MM.validate(form)) return;
      const data = Object.fromEntries(new FormData(form));
      const lines = store.cart();
      const totals = store.totals(lines);
      MM.payment.startPayment({
        ref: nextRef(),
        placed: new Date().toISOString(),
        currency: store.currency(),
        customer: { name: data.name, email: data.email, phone: data.phone, company: data.company, address1: data.address1, address2: data.address2, city: data.city, region: data.region, postcode: data.postcode, country: data.country },
        lines: lines.map(l => ({ service: l.service, tier: l.tier, term: l.term, amount: store.lineTotal(l) })),
        discountCode: totals.discount ? totals.discount.code : null,
        subtotal: totals.subtotal, discount: totals.discount ? totals.discount.amount : 0, total: totals.total
      });
    });
  }

  if (page === 'complete' || page === 'error') {
    const ref = new URLSearchParams(location.search).get('order');
    const saved = store.lastOrder();
    let order = saved && (!ref || saved.ref === ref) ? saved : SAMPLE_ORDER;
    if (page === 'error' && order === SAMPLE_ORDER && store.cart().length) order = Object.assign({}, SAMPLE_ORDER, { lines: store.cart(), discountCode: store.discount()?.code });
    const render = () => {
      $$('[data-order-ref]').forEach(el => { el.textContent = order.ref; });
      $$('[data-order-email]').forEach(el => { el.textContent = order.customer.email; });
      renderSummary(order.lines, orderTotals(order));
    };
    render();
    document.addEventListener('mm:currency', render);
  }
})();
