<?php include 'includes/header.php'; ?>

<main class="acc_main">
  <section class="hero hero--account" data-aos="fade-up">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner acc_outer">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted" data-aos="fade-up">
          <span class="hero__label-wide">Your account</span>
          <span class="hero__label-narrow" data-account-hello-short="">Hello, John</span>
          <span class="hero__arabic" lang="ar" dir="rtl">حسابي</span>
        </p>
        <h1 class="display" data-account-title="" data-aos="fade-up">Invoices</h1>
        <p class="lead text-muted" data-account-lede="" data-aos="fade-up">Every invoice, newest first. Open one to see its line items.</p>
      </div>
    </div>
  </section>
  <section class="section account-section" data-aos="fade-up">
    <div class="container account">
      <aside class="account-side" data-aos="fade-up">
        <div class="stack stack--xs">
          <p class="eyebrow" data-aos="fade-up">Your account</p>
          <p class="account-side__name" data-account-hello="" data-aos="fade-up">Hello, John.</p>
          <p class="account-side__since" data-account-since="" data-aos="fade-up">Member since February 2026</p>
        </div>
        <nav class="account-nav" aria-label="Account">
          <a class="account-nav__item" href="account.html" data-aos="fade-up">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" href="account-invoices.html" aria-current="page" data-aos="fade-up">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-reports.html" data-aos="fade-up">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-details.html" data-aos="fade-up">Account details <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
        </nav>
        <button class="account-side__logout" type="button" data-log-out="" data-aos="fade-up">Log out</button>
      </aside>
      <nav class="account-tabs" aria-label="Account" data-aos="fade-up">
        <div class="account-tabs__top">
          <span data-account-signed="" data-aos="fade-up">Signed in as John Smith</span>
          <button type="button" data-log-out="" data-aos="fade-up">Log out</button>
        </div>
        <div class="account-tabs__list" data-aos="fade-up">
          <a class="" href="account.html" data-aos="fade-up">Overview</a>
          <a class="is-active" href="account-invoices.html" data-aos="fade-up">Invoices</a>
          <a class="" href="account-reports.html" data-aos="fade-up">Reports</a>
          <a class="" href="account-details.html" data-aos="fade-up">Details</a>
        </div>
      </nav>
      <div class="account__content" data-aos="fade-up">
        <div data-invoice-list="">
          <div class="invoice-row acc_in_bor" data-aos="fade-up">
            <b data-aos="fade-up">MM 10421</b>
            <span class="invoice-row__date" data-aos="fade-up">1 Oct 2026</span>
            <span class="invoice-row__items" data-aos="fade-up">Email marketing, Bronze, 3 month term</span>
            <b>€259</b>
            <span class="status status--paid" data-aos="fade-up">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010421" data-aos="fade-up">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row" data-aos="fade-up">
            <b data-aos="fade-up">MM 10398</b>
            <span class="invoice-row__date" data-aos="fade-up">8 Aug 2026</span>
            <span class="invoice-row__items" data-aos="fade-up">SEO, Silver and <br class="br-wide">Paid search, Bronze, 3 month term </span>
            <b data-aos="fade-up">€1,632</b>
            <span class="status status--paid" data-aos="fade-up">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010398" data-aos="fade-up">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row" data-aos="fade-up">
            <b data-aos="fade-up">MM 10311</b>
            <span class="invoice-row__date" data-aos="fade-up">2 Jun 2026</span>
            <span class="invoice-row__items" data-aos="fade-up">Social media, Bronze, 3 month term</span>
            <b data-aos="fade-up">€409</b>
            <span class="status status--paid" data-aos="fade-up">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010311" data-aos="fade-up">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
          <div class="invoice-row" data-aos="fade-up">
            <b data-aos="fade-up" data-aos="fade-up">MM 10107</b>
            <span class="invoice-row__date" data-aos="fade-up">14 Feb 2026</span>
            <span class="invoice-row__items" data-aos="fade-up">Web design and development, Silver, one off</span>
            <b data-aos="fade-up">€1,581</b>
            <span class="status status--paid" data-aos="fade-up">Paid</span>
            <a class="row-link" href="account-invoice.html?ref=MM%2010107" data-aos="fade-up">View invoice <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </a>
          </div>
        </div>

        <div class="empty-state" data-invoice-empty="" hidden="" data-aos="fade-up">
          <h2 class="heading-s" data-aos="fade-up">No invoices yet</h2>
          <p class="text-muted" data-aos="fade-up">When you buy a service, it shows up here with its invoice.</p>
          <a class="button sweep" href="services.html" data-aos="fade-up">Browse services <span class="button__icon">
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