/*
  catalogue plugs in here. every price goes through MM.store.price().
  to use an API, set window.MM_CATALOGUE before this file runs, or make catalogue() fetch the same shape.
*/
window.MM = window.MM || {};
MM.store = (function () {
  const KEYS = { cart: 'mm.cart', currency: 'mm.currency', session: 'mm.session', discount: 'mm.discount', orders: 'mm.orders', lastOrder: 'mm.lastOrder' };
  const SYMBOLS = { GBP: '£', USD: '$', EUR: '€' };

  function read(key, fallback) {
    try { const v = localStorage.getItem(key); return v === null ? fallback : JSON.parse(v); } catch (e) { return fallback; }
  }
  function write(key, value) {
    try { if (value === null) localStorage.removeItem(key); else localStorage.setItem(key, JSON.stringify(value)); } catch (e) { }
  }

  const catalogue = () => window.MM_CATALOGUE;
  const service = id => catalogue().services.find(s => s.id === id);
  const tierName = id => catalogue().tiers.find(t => t.id === id).name;
  const tierIndex = id => catalogue().tiers.findIndex(t => t.id === id);

  function currency() {
    const c = read(KEYS.currency, catalogue().currency);
    return SYMBOLS[c] ? c : catalogue().currency;
  }
  function setCurrency(code) {
    if (!SYMBOLS[code]) return;
    write(KEYS.currency, code);
    document.dispatchEvent(new CustomEvent('mm:currency', { detail: code }));
  }

  // GBP, before conversion
  function price(serviceId, tier, term) {
    const s = service(serviceId);
    return s.oneOff ? s.prices[tier].once : s.prices[tier][String(term)];
  }
  const convert = gbp => gbp * catalogue().rates[currency()];
  const money = gbp => SYMBOLS[currency()] + Math.round(convert(gbp)).toLocaleString('en-GB');
  const monthly = (serviceId, tier, term) => price(serviceId, tier, term) / term;
  const fromPrice = serviceId => {
    const s = service(serviceId);
    return s.oneOff ? price(serviceId, 'bronze') : price(serviceId, 'bronze', 1);
  };
  const termLabel = (serviceId, term) => service(serviceId).oneOff ? 'One off' : `${term} month term`;

  function cart() {
    const lines = read(KEYS.cart, []);
    return Array.isArray(lines) ? lines.filter(l => service(l.service) && tierIndex(l.tier) > -1) : [];
  }
  function saveCart(lines) {
    write(KEYS.cart, lines);
    document.dispatchEvent(new CustomEvent('mm:cart', { detail: lines }));
  }
  function addToCart(serviceId, tier, term) {
    const s = service(serviceId);
    const lines = cart();
    lines.push({ id: Date.now().toString(36) + Math.random().toString(36).slice(2, 6), service: serviceId, tier, term: s.oneOff ? null : term });
    saveCart(lines);
    return lines;
  }
  function removeFromCart(lineId) { saveCart(cart().filter(l => l.id !== lineId)); }
  function setLineTerm(lineId, term) { saveCart(cart().map(l => l.id === lineId ? Object.assign({}, l, { term }) : l)); }
  function clearCart() { saveCart([]); write(KEYS.discount, null); }

  const lineTotal = l => price(l.service, l.tier, l.term);
  // SPRING100 is on by default; '' means the buyer removed it
  const DEFAULT_DISCOUNT = 'SPRING100';
  function discount() {
    const code = read(KEYS.discount, DEFAULT_DISCOUNT);
    return code && catalogue().discounts[code] ? { code, amount: catalogue().discounts[code].amount } : null;
  }
  function applyDiscount(code) {
    const key = String(code || '').trim().toUpperCase();
    if (!key) { write(KEYS.discount, ''); return true; }
    if (!catalogue().discounts[key]) return false;
    write(KEYS.discount, key);
    return true;
  }
  function totals(lines = cart()) {
    const subtotal = lines.reduce((sum, l) => sum + lineTotal(l), 0);
    const d = discount();
    const off = d && lines.length ? Math.min(d.amount, subtotal) : 0;
    return { subtotal, discount: off ? Object.assign({}, d, { amount: off }) : null, total: subtotal - off };
  }

  // demo session in localStorage, replace with real auth
  const session = () => read(KEYS.session, null);
  const signIn = (name, email) => write(KEYS.session, { name: name || 'John Smith', email: email || 'john@example.com' });
  const signOut = () => write(KEYS.session, null);

  const orders = () => read(KEYS.orders, []);
  function saveOrder(order) { write(KEYS.orders, [order].concat(orders())); write(KEYS.lastOrder, order); }
  const lastOrder = () => read(KEYS.lastOrder, null);

  return { KEYS, read, write, catalogue, service, tierName, tierIndex, currency, setCurrency, price, convert, money, monthly, fromPrice, termLabel,
    cart, addToCart, removeFromCart, setLineTerm, clearCart, lineTotal, discount, applyDiscount, totals,
    session, signIn, signOut, orders, saveOrder, lastOrder };
})();
