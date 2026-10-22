<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketandmatter</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assest/img/tg-icon.svg">
    <link rel="stylesheet" href="assest/css/mainBase.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top" id="header-top">
      <nav class="site-nav" aria-label="Main">
        <button class="site-nav__menu" type="button" data-menu-toggle="" aria-expanded="false" aria-controls="menu-panel">Menu</button>
        <a class="logo" href="index.html" aria-label="Market &amp; Matter, home">
          <span class="logo__wordmark">Market &amp; Matter</span>
          <i class="logo__divider" aria-hidden="true"></i>
          <span class="logo__arabic" lang="ar" dir="rtl">ماركت آند ماتر</span>
        </a>
        <div class="site-nav__right">
          <a class="site-nav__login" href="login.html">Log in</a>
          <a class="site-nav__avatar" href="account.html" aria-label="Your account">JS</a>
          <button type="button" data-cart-toggle="" aria-expanded="false" aria-controls="cart-panel">Cart ( 0 ) </button>
        </div>
      </nav>
      <div class="menu-panel" id="menu-panel" data-menu-panel="">
        <div class="menu-panel__group" data-menu-group="">
          <button class="menu-panel__link" style="--i:0" type="button" data-menu-services="" aria-expanded="false">Services <i class="menu-panel__toggle-icon" aria-hidden="true"></i>
          </button>
          <div class="menu-panel__sub">
            <div class="menu-panel__sub-inner">
              <div class="menu_panel_sub">
                <a class="menu-panel__service" href="seo.html">
                  <span>01</span>SEO </a>
                <a class="menu-panel__service" href="paid-search.html">
                  <span>02</span>Paid search </a>
              </div>
              <div class="menu_panel_sub">
                 <a class="menu-panel__service" href="social-media.html">
                  <span>03</span>Social media </a>
                <a class="menu-panel__service" href="email-marketing.html">
                  <span>04</span>Email marketing </a>
              </div>
              <div class="menu_panel_sub">
                <a class="menu-panel__service" href="web-design.html">
                <span>05</span>Web design and development </a>
                <a class="menu-panel__service" href="reputation.html">
                <span>06</span>Reputation </a>
              </div>
              <a class="menu-panel__service menu-panel__service--all" href="services.html">
                <span>07</span>All services and prices </a>
            </div>
          </div>
        </div>
        <a class="menu-panel__link" style="--i:1" href="how-it-works.html">How it works</a>
        <a class="menu-panel__link" style="--i:2" href="about.html">About</a>
        <a class="menu-panel__link" style="--i:3" href="faq.html">FAQ</a>
        <a class="menu-panel__link" style="--i:4" href="contact.html">Contact</a>
        <a class="menu-panel__link" style="--i:5" href="login.html">Log in</a>
        <div class="menu-panel__bottom">
          <div class="currency">
            <span class="currency__label">Currency</span>
            <div class="segmented segmented--small" role="group" aria-label="Currency">
              <button type="button" class="segmented__option" data-currency="GBP">GBP</button>
              <button type="button" class="segmented__option" data-currency="USD">USD</button>
              <button type="button" class="segmented__option is-active" data-currency="EUR">EUR</button>
            </div>
          </div>
          <span class="menu-panel__arabic" lang="ar" dir="rtl">ماركت آند ماتر</span>
        </div>
      </div>
      <aside class="cart-panel has-lines" id="cart-panel" data-cart-panel="" aria-label="Your cart">
        <div class="cart-panel__head">
          <span>Your cart</span>
          <button type="button" data-cart-close="">Close</button>
        </div>
        <div data-cart-panel-lines="">
          <div class="cart-panel__line">
            <div>
              <b class="cart-panel__name">SEO</b>
              <small class="cart-panel__meta">Silver, 3 month term</small>
            </div>
            <div class="cart-panel__price">
              <span class="cart-panel__amount">€1,045</span>
              <button type="button" class="cart-panel__remove" data-remove-line="mvhseyq75ofa">Remove</button>
            </div>
          </div>
          <div class="cart-panel__line">
            <div>
              <b class="cart-panel__name">SEO</b>
              <small class="cart-panel__meta">Gold, 3 month term</small>
            </div>
            <div class="cart-panel__price">
              <span class="cart-panel__amount">€1,996</span>
              <button type="button" class="cart-panel__remove" data-remove-line="mvhsf02rdxsi">Remove</button>
            </div>
          </div>
          <div class="cart-panel__line">
            <div>
              <b class="cart-panel__name">SEO</b>
              <small class="cart-panel__meta">Bronze, 3 month term</small>
            </div>
            <div class="cart-panel__price">
              <span class="cart-panel__amount">€312</span>
              <button type="button" class="cart-panel__remove" data-remove-line="mvhsf0vh52i3">Remove</button>
            </div>
          </div>
        </div>
        <div class="cart-panel__empty">
          <p>Your cart is empty.</p>
          <p>Pick a service, a tier and a term in Pricing and it lands here.</p>
        </div>
        <div class="cart-panel__foot">
          <div class="cart-panel__total">
            <span>Total at checkout</span>
            <b data-cart-panel-total="">€3,353</b>
          </div>
          <a class="cart-panel__go sweep" href="checkout.html">Go to checkout <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
        </div>
      </aside>
      
   </header>
  
  