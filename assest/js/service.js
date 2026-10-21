(function () {
  const store = MM.store, { $, $$, icons } = MM;
  const section = $('[data-service]');
  if (!section) return;
  const id = section.dataset.service;
  const service = store.service(id);
  const featured = store.catalogue().featuredTier;
  let term = 3;

  function figureValue(v) { return typeof v === 'object' && v.money ? store.money(v.money) : v; }

  function render(swap) {
    $$('[data-tier]', section).forEach(card => {
      const tier = card.dataset.tier, t = store.tierIndex(tier);
      const total = $('[data-tier-total]', card), monthly = $('[data-tier-monthly]', card);
      const write = () => {
        total.textContent = store.money(store.price(id, tier, term));
        monthly.textContent = service.oneOff ? 'One off payment' : `${store.money(store.monthly(id, tier, term))} a month, ${term} month term`;
      };
      if (swap && !MM.reduced) { [total, monthly].forEach(el => el.classList.add('is-out')); setTimeout(() => { write(); [total, monthly].forEach(el => el.classList.remove('is-out')); }, 200); } else write();
      $('[data-tier-figures]', card).innerHTML = service.figures[t].map(f => `<div><b class="figures__value">${figureValue(f.value)}</b><span class="figures__label">${f.label}</span></div>`).join('');
      $('[data-tier-ticks]', card).innerHTML = service.included[t].map(x => `<li>${icons.check}<span>${x}</span></li>`).join('');
      const isFeatured = tier === featured;
      card.classList.toggle('tier-card--featured', isFeatured);
      $('[data-featured-tag]', card).hidden = !isFeatured;
    });
    $('[data-service-note]', section).textContent = service.note;
    $$('[data-price-ad]').forEach(el => { el.textContent = store.money(service.adSpend[el.dataset.priceAd]); });
  }

  $$('[data-term]', section).forEach(b => b.addEventListener('click', () => {
    term = +b.dataset.term;
    $$('[data-term]', section).forEach(x => x.classList.toggle('is-active', x === b));
    render(true);
  }));

  $$('[data-add-tier]', section).forEach(b => b.addEventListener('click', () => {
    const tier = b.closest('[data-tier]').dataset.tier;
    store.addToCart(id, tier, term);
    MM.bumpCart();
    MM.toast(`${service.name} ${store.tierName(tier)}${service.oneOff ? ', one off' : `, ${term} ${term > 1 ? 'months' : 'month'}`} added to your cart`);
    const label = b.textContent;
    b.classList.add('is-added'); b.textContent = 'Added to cart';
    setTimeout(() => { b.classList.remove('is-added'); b.textContent = label; }, 2200);
  }));

  document.addEventListener('mm:currency', () => render(false));
  render(false);
})();
