/* header and footer, injected into [data-partial="header"] and [data-partial="footer"] */
window.MM = window.MM || {};
MM.icons = {
  arrow: '<svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true"><path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"/></svg>',
  arrowUp: '<svg class="icon icon--arrow-up" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 11L11 3M11 3H4.5M11 3V9.5" stroke="currentColor" stroke-width="1.6"/></svg>',
  arrowDown: '<svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true"><path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"/></svg>',
  check: '<svg class="icon icon--check" viewBox="0 0 13 10" fill="none" aria-hidden="true"><path d="M.5 4.53L4.5 8.53L12.5 .53" stroke="currentColor" stroke-width="1.5"/></svg>',
  chevron: '<svg class="icon icon--chevron" viewBox="0 0 12 8" fill="none" aria-hidden="true"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5"/></svg>',
  eye: '<svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true"><path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"/><circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"/></svg>',
  visa: '<svg viewBox="0 0 56 36" fill="none" aria-label="Visa" role="img"><rect width="56" height="36" rx="8" fill="#fff"/><path d="M23.9 12.7L19.5 23.3H16.6L14.4 14.8C14.2 14.3 14.1 14.1 13.7 13.9 13 13.6 12 13.2 11 13L11.1 12.7H15.7C16 12.7 16.3 12.8 16.6 13 16.8 13.2 17 13.5 17 13.8L18.2 19.9 21 12.7H23.9ZM35.3 19.9C35.3 17.1 31.4 16.9 31.4 15.6 31.4 15.3 31.8 14.9 32.6 14.8 33.5 14.7 34.5 14.8 35.3 15.2L35.8 13C35 12.7 34.1 12.5 33.2 12.5 30.5 12.5 28.6 14 28.6 16 28.6 17.5 29.9 18.4 31 18.9 32.1 19.4 32.4 19.8 32.4 20.2 32.4 20.9 31.6 21.3 30.8 21.3 29.4 21.3 28.6 20.9 27.9 20.6L27.5 22.9C28.1 23.2 29.3 23.5 30.5 23.5 33.4 23.5 35.3 22.1 35.3 19.9ZM42.5 23.3H45L42.8 12.7H40.4C40.2 12.7 39.9 12.8 39.7 12.9 39.5 13.1 39.4 13.3 39.3 13.5L35.1 23.3H38L38.6 21.7H42.1L42.5 23.3ZM39.4 19.6L40.8 15.6 41.7 19.6H39.4ZM27.8 12.7L25.6 23.3H22.8L25.1 12.7H27.8Z" fill="#1A1F71"/></svg>',
  mastercard: '<svg viewBox="0 0 56 36" fill="none" aria-label="Mastercard" role="img"><rect width="56" height="36" rx="8" fill="#fff"/><circle cx="21.5" cy="18" r="10.5" fill="#EB001B"/><circle cx="34.5" cy="18" r="10.5" fill="#F79E1B"/><path d="M28 9.8C30.4 11.7 32 14.7 32 18S30.4 24.3 28 26.2C25.6 24.3 24 21.3 24 18S25.6 11.7 28 9.8Z" fill="#FF5F00"/></svg>'
};

MM.partials = (function () {
  const { icons } = MM;
  const store = MM.store;
  // account pages always render signed in, with the demo customer if there is no session
  const signedIn = !!store.session() || /^account/.test(document.body.dataset.page || '');
  const currencies = ['GBP', 'USD', 'EUR','INR'];

  function header() {
    const services = store.catalogue().services
      .map((s, i) => `<a class="menu-panel__service" href="${s.page}"><span>${String(i + 1).padStart(2, '0')}</span>${s.name}</a>`).join('');
    const accountLink = signedIn ? '<a class="menu-panel__link" style="--i:5" href="account.html">Account</a>' : '<a class="menu-panel__link" style="--i:5" href="login.html">Log in</a>';
    return `
<nav class="site-nav" aria-label="Main">
  <button class="site-nav__menu" type="button" data-menu-toggle aria-expanded="false" aria-controls="menu-panel">Menu</button>
  <a class="logo" href="index.html" aria-label="Market &amp; Matter, home"><span class="logo__wordmark">Market &amp; Matter</span><i class="logo__divider" aria-hidden="true"></i><span class="logo__arabic" lang="ar" dir="rtl">ماركت آند ماتر</span></a>
  <div class="site-nav__right">
    <a class="site-nav__login" href="login.html">Log in</a>
    <a class="site-nav__avatar" href="account.html" aria-label="Your account">JS</a>
    <button type="button" data-cart-toggle aria-expanded="false" aria-controls="cart-panel">Cart (<b class="site-nav__count" data-cart-count>0</b>)</button>
  </div>
</nav>
<div class="menu-panel" id="menu-panel" data-menu-panel>
  <div class="menu-panel__group" data-menu-group>
    <button class="menu-panel__link" style="--i:0" type="button" data-menu-services aria-expanded="false">Services<i class="menu-panel__toggle-icon" aria-hidden="true"></i></button>
    <div class="menu-panel__sub"><div class="menu-panel__sub-inner">${services}<a class="menu-panel__service menu-panel__service--all" href="services.html"><span>07</span>All services and prices</a></div></div>
  </div>
  <a class="menu-panel__link" style="--i:1" href="how-it-works.html">How it works</a>
  <a class="menu-panel__link" style="--i:2" href="about.html">About</a>
  <a class="menu-panel__link" style="--i:3" href="faq.html">FAQ</a>
  <a class="menu-panel__link" style="--i:4" href="contact.html">Contact</a>
  ${accountLink}
  <div class="menu-panel__bottom">
    <div class="currency"><span class="currency__label">Currency</span>
      <div class="segmented segmented--small" role="group" aria-label="Currency">${currencies.map(c => `<button type="button" class="segmented__option" data-currency="${c}">${c}</button>`).join('')}</div>
    </div>
    <span class="menu-panel__arabic" lang="ar" dir="rtl">ماركت آند ماتر</span>
  </div>
</div>
<aside class="cart-panel" id="cart-panel" data-cart-panel aria-label="Your cart">
  <div class="cart-panel__head"><span>Your cart</span><button type="button" data-cart-close>Close</button></div>
  <div data-cart-panel-lines></div>
  <div class="cart-panel__empty"><p>Your cart is empty.</p><p>Pick a service, a tier and a term in Pricing and it lands here.</p></div>
  <div class="cart-panel__foot">
    <div class="cart-panel__total"><span>Total at checkout</span><b data-cart-panel-total></b></div>
    <a class="cart-panel__go sweep" href="checkout.html">Go to checkout${icons.arrow}</a>
  </div>
</aside>`;
  }

  function footer() {
    const services = store.catalogue().services.map(s => `<a href="${s.page}">${s.name}</a>`).join('');
    return `
<footer class="site-footer">
  <div class="container">
    <div class="site-footer__top">
      <div class="site-footer__brand">
        <a class="logo" href="index.html"><span class="logo__wordmark">Market &amp; Matter</span><i class="logo__divider" aria-hidden="true"></i><span class="logo__arabic" lang="ar" dir="rtl">ماركت آند ماتر</span></a>
        <p class="site-footer__line">Digital marketing, sold as fixed term services.</p>
      </div>
      <div class="site-footer__cols">
        <div class="site-footer__col site-footer__col--services"><span class="site-footer__label">Services</span>${services}</div>
        <div class="site-footer__col"><span class="site-footer__label">Company</span><a href="about.html">About</a><a href="how-it-works.html">How it works</a><a href="faq.html">FAQ</a><a href="contact.html">Contact</a></div>
        <div class="site-footer__col"><span class="site-footer__label">Account</span><a href="login.html">Log in</a><a href="signup.html">Sign up</a><a href="cart.html">Cart</a></div>
      </div>
    </div>
    <div class="site-footer__bottom">
      <div class="site-footer__legal"><small>© 2026 Market &amp; Matter. All rights reserved.</small><a href="terms.html">Terms and conditions</a><a href="privacy.html">Privacy policy</a></div>
      <label class="currency-select"><span class="visually-hidden">Currency</span><select data-currency-select>${currencies.map(c => `<option value="${c}">${c}</option>`).join('')}</select>${icons.chevron}</label>
      <span class="site-footer__accept currency__label">We accept</span>
      <div class="card-logos">${icons.visa}${icons.mastercard}</div>
    </div>
  </div>
</footer>`;
  }

  document.querySelectorAll('[data-partial="header"]').forEach(el => { el.outerHTML = header(); });
  document.querySelectorAll('[data-partial="footer"]').forEach(el => { el.outerHTML = footer(); });
  if (signedIn) document.documentElement.setAttribute('data-signed-in', '');

  return { header, footer };
})();
