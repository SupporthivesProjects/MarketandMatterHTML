(function () {
  const store = MM.store, { $, $$, icons } = MM;
  const account = window.MM_ACCOUNT;
  const page = document.body.dataset.page;
  const session = store.session();
  const member = Object.assign({}, account.member, session ? { name: session.name, email: session.email } : {});
  const IMAGES = { seo: 'seo', 'paid-search': 'paid-search', 'social-media': 'social', 'email-marketing': 'email', 'web-design': 'web', reputation: 'reputation' };
  const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  const LONG = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

  const parse = iso => { const [y, m, d] = iso.slice(0, 10).split('-').map(Number); return { y, m: m - 1, d }; };
  const short = iso => { const t = parse(iso); return `${t.d} ${MONTHS[t.m]} ${t.y}`; };
  const long = iso => { const t = parse(iso); return `${t.d} ${LONG[t.m]} ${t.y}`; };
  function termRange(iso, term) {
    const t = parse(iso), end = new Date(Date.UTC(t.y, t.m + term, t.d));
    const sameYear = end.getUTCFullYear() === t.y;
    return `${t.d} ${MONTHS[t.m]}${sameYear ? '' : ' ' + t.y} to ${end.getUTCDate()} ${MONTHS[end.getUTCMonth()]} ${end.getUTCFullYear()}`;
  }

  const local = store.orders().map(o => ({ ref: o.ref, placed: o.placed, payment: 'Paid by card', discountCode: o.discountCode, lines: o.lines, customer: o.customer }));
  const orders = local.concat(account.orders);
  const orderTotals = o => {
    const subtotal = o.lines.reduce((s, l) => s + store.price(l.service, l.tier, l.term), 0);
    const d = o.discountCode && store.catalogue().discounts[o.discountCode];
    const off = d ? Math.min(d.amount, subtotal) : 0;
    return { subtotal, off, total: subtotal - off };
  };
  function itemsText(o) {
    const terms = [...new Set(o.lines.map(l => l.term))];
    const names = o.lines.map(l => `${store.service(l.service).name}, ${store.tierName(l.tier)}`);
    const tail = terms.length === 1 ? (terms[0] ? `, ${terms[0]} month term` : ', one off') : '';
    return names.join(' and <br class="br-wide">') + tail;
  }

  $$('[data-account-hello]').forEach(el => { el.textContent = `Hello, ${member.name.split(' ')[0]}.`; });
  $$('[data-account-hello-short]').forEach(el => { el.textContent = `Hello, ${member.name.split(' ')[0]}`; });
  $$('[data-account-signed]').forEach(el => { el.textContent = `Signed in as ${member.name}`; });
  $$('[data-account-since]').forEach(el => { const t = parse(member.since); el.textContent = `Member since ${LONG[t.m]} ${t.y}`; });

  function overview() {
    const fresh = local.flatMap(o => o.lines.map(l => ({ service: l.service, tier: l.tier, term: l.term, state: 'preparing', progress: 0.04, note: `Order ${o.ref}, paid in full. Starts once your brief is in.` })));
    const rows = fresh.concat(account.services);
    const groups = [['preparing', 'Preparing'], ['active', 'Running now'], ['ended', 'Completed']];
    const status = { preparing: 'Preparing', active: 'Active', ended: 'Ended' };
    $('[data-overview]').innerHTML = groups.map(([state, label]) => {
      const list = rows.filter(r => r.state === state);
      if (!list.length) return '';
      return `<p class="group-label group-label--${state}">${label}</p>` + list.map(r => {
        const s = store.service(r.service);
        return `<div class="service-row">
          <div class="service-row__image"><img src="assets/img/${IMAGES[r.service]}.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933"></div>
          <div class="service-row__text">
            <div class="service-row__top"><h2 class="title-m">${s.name}, ${store.tierName(r.tier)} tier</h2><span class="status status--${state}">${status[state]}</span></div>
            <p class="service-row__note">${r.note}</p>
            <div class="progress"><div class="progress__fill progress__fill--${state}" style="width:${Math.round(r.progress * 100)}%"></div></div>
          </div>
          <div class="service-row__price"><b>${store.money(store.price(r.service, r.tier, r.term))}</b><small>${s.oneOff ? 'One off' : r.term + ' month term'}</small></div>
        </div>`;
      }).join('');
    }).join('');
  }

  function invoices() {
    const empty = new URLSearchParams(location.search).get('state') === 'empty';
    const list = empty ? [] : orders;
    $('[data-invoice-empty]').hidden = list.length > 0;
    $('[data-invoice-list]').innerHTML = list.map(o => `<div class="invoice-row">
      <b>${o.ref}</b><span class="invoice-row__date">${short(o.placed)}</span><span class="invoice-row__items">${itemsText(o)}</span>
      <b>${store.money(orderTotals(o).total)}</b><span class="status status--paid">Paid</span>
      <a class="row-link" href="account-invoice.html?ref=${encodeURIComponent(o.ref)}">View invoice${icons.arrow}</a></div>`).join('');
  }

  function invoice() {
    const ref = new URLSearchParams(location.search).get('ref') || 'MM 10398';
    const o = orders.find(x => x.ref === ref) || orders.find(x => x.ref === 'MM 10398');
    const totals = orderTotals(o);
    document.title = `Invoice ${o.ref} | Market & Matter`;
    $('[data-account-title]').textContent = `Invoice ${o.ref}`;
    $('[data-account-lede]').textContent = `Placed ${long(o.placed)}. Paid once, for the whole term.`;
    $('[data-invoice-lines]').innerHTML = o.lines.map(l => {
      const s = store.service(l.service);
      const term = s.oneOff ? 'One off' : `${l.term} month term, ${termRange(o.placed, l.term)}`;
      return `<div class="order-line"><div><b>${s.name}, ${store.tierName(l.tier)} tier</b><small>${term}</small></div><b>${store.money(store.price(l.service, l.tier, l.term))}</b></div>`;
    }).join('');
    $('[data-subtotal]').textContent = store.money(totals.subtotal);
    $('[data-discount-line]').hidden = !totals.off;
    if (totals.off) { $('[data-discount-label]').textContent = 'Discount, ' + o.discountCode; $('[data-discount-value]').textContent = store.money(totals.off) + ' off'; }
    $('[data-total]').textContent = store.money(totals.total);
    const c = o.customer || member;
    $('[data-billed-to]').innerHTML = [c.name, c.company, c.address1, c.address2, [c.city, c.postcode].filter(Boolean).join(', '), c.country].filter(Boolean).map(x => String(x).replace(/&/g, '&amp;').replace(/</g, '&lt;')).join('<br>');
    const paid = $('[data-paid-with]');
    if (/^Paid by/.test(o.payment)) { paid.previousElementSibling.textContent = 'Payment'; }
    paid.textContent = o.payment;
    $('[data-invoice-ref]').textContent = o.ref;
  }

  function reports() {
    $('[data-report-list]').innerHTML = account.reports.map(r => `<div class="report-row">
      <div><b>${r.name}</b><small>${store.service(r.service).name}, ${store.tierName(r.tier)}</small></div>
      <span class="report-row__date">Delivered ${short(r.delivered)}</span>
      <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download${icons.arrowDown}</button></div>`).join('');
  }

  function details() {
    const form = $('[data-form="details"]');
    ['name', 'email', 'phone', 'company', 'address1', 'address2', 'city', 'region', 'postcode', 'country'].forEach(k => { if (form.elements[k]) form.elements[k].value = member[k] || ''; });
    $('[data-password-note]').textContent = `Last changed ${long(member.passwordChanged)}. Leave the new password blank to keep your current one.`;
  }

  $$('[data-print]').forEach(b => b.addEventListener('click', () => print()));

  const render = { 'account-overview': overview, 'account-invoices': $('[data-invoice-list]') ? invoices : invoice, 'account-reports': reports, 'account-details': details }[page];
  if (render) { render(); if (page !== 'account-details') document.addEventListener('mm:currency', render); }
})();
