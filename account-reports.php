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
        <h1 class="display" data-account-title="">Reports</h1>
        <p class="lead text-muted" data-account-lede="">A report lands here every month for each running service, plus anything we deliver along the way.</p>
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
          <a class="account-nav__item" href="account-invoices.html">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" href="account-reports.html" aria-current="page">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
          <a class="" href="account-invoices.html">Invoices</a>
          <a class="is-active" href="account-reports.html">Reports</a>
          <a class="" href="account-details.html">Details</a>
        </div>
      </nav>
      <div class="account__content">
        <p class="group-label group-label--plain">All reports</p>
        <div data-report-list="">
          <div class="report-row">
            <div>
              <b>Paid search report, September 2026</b>
              <small>Paid search, Bronze</small>
            </div>
            <span class="report-row__date">Delivered 1 Oct 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>SEO report, September 2026</b>
              <small>SEO, Silver</small>
            </div>
            <span class="report-row__date">Delivered 1 Oct 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>SEO report, August 2026</b>
              <small>SEO, Silver</small>
            </div>
            <span class="report-row__date">Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>Paid search report, August 2026</b>
              <small>Paid search, Bronze</small>
            </div>
            <span class="report-row__date">Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>Social media report, August 2026</b>
              <small>Social media, Bronze</small>
            </div>
            <span class="report-row__date">Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>SEO technical audit</b>
              <small>SEO, Silver</small>
            </div>
            <span class="report-row__date">Delivered 15 Aug 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>Social media report, July 2026</b>
              <small>Social media, Bronze</small>
            </div>
            <span class="report-row__date">Delivered 1 Aug 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>Social media report, June 2026</b>
              <small>Social media, Bronze</small>
            </div>
            <span class="report-row__date">Delivered 1 Jul 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row">
            <div>
              <b>Website launch pack</b>
              <small>Web design and development, Silver</small>
            </div>
            <span class="report-row__date">Delivered 28 Mar 2026</span>
            <button type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>