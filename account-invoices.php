<?php include 'includes/header.php'; ?>
<main>
  <section class="hero hero--account">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted">
          <span class="hero__label-wide">Your account</span>
          <span class="hero__label-narrow" data-account-hello-short="">Hello, John</span>
          <span class="hero__arabic" lang="ar" dir="rtl">حسابي</span>
        </p>
        <h1 class="display" data-account-title="">Invoices</h1>
        <p class="lead text-muted" data-account-lede="">Every invoice, newest first. Open one to see its line items.</p>
      </div>
    </div>
  </section>
  <section class="section account-section">
    <div class="container account">
      <aside class="account-side">
        <div class="stack stack--xs">
          <p class="eyebrow">Your account</p>
          <p class="account-side__name" data-account-hello="">Hello, John.</p>
          <p class="account-side__since" data-account-since="">Member since February 2026</p>
        </div>
        <nav class="account-nav" aria-label="Account">
          <a class="account-nav__item" href="account.html">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" href="account-invoices.html" aria-current="page">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-reports.html">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-details.html">Account details <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
        </nav>
        <button class="account-side__logout" type="button" data-log-out="">Log out</button>
      </aside>
      <nav class="account-tabs" aria-label="Account">
        <div class="account-tabs__top">
          <span data-account-signed="">Signed in as John Smith</span>
          <button type="button" data-log-out="">Log out</button>
        </div>
        <div class="account-tabs__list">
          <a class="" href="account.html">Overview</a>
          <a class="is-active" href="account-invoices.html">Invoices</a>
          <a class="" href="account-reports.html">Reports</a>
          <a class="" href="account-details.html">Details</a>
        </div>
      </nav>
      <div class="account__content">
        <div data-invoice-list="">
          <div class="invoice-row">
            <b>MM 10421</b>
            <span class="invoice-row__date">1 Oct 2026</span>
            <span class="invoice-row__items">Email marketing, Bronze, 3 month term</span>
            <b>€259</b>
            <span class="status status--paid">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010421">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row">
            <b>MM 10398</b>
            <span class="invoice-row__date">8 Aug 2026</span>
            <span class="invoice-row__items">SEO, Silver and <br class="br-wide">Paid search, Bronze, 3 month term </span>
            <b>€1,632</b>
            <span class="status status--paid">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010398">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row">
            <b>MM 10311</b>
            <span class="invoice-row__date">2 Jun 2026</span>
            <span class="invoice-row__items">Social media, Bronze, 3 month term</span>
            <b>€409</b>
            <span class="status status--paid">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010311">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row">
            <b>MM 10107</b>
            <span class="invoice-row__date">14 Feb 2026</span>
            <span class="invoice-row__items">Web design and development, Silver, one off</span>
            <b>€1,581</b>
            <span class="status status--paid">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010107">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="empty-state" data-invoice-empty="" hidden="">
          <h2 class="heading-s">No invoices yet</h2>
          <p class="text-muted">When you buy a service, it shows up here with its invoice.</p>
          <a class="button sweep" href="services.html">Browse services <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>