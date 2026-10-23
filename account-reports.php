<?php include 'includes/header.php'; ?>

<main class="acc_main">
  <section class="hero hero--account" data-aos="fade-up">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner acc_outer">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted" data-aos="fade-up">
          <span class="hero__label-wide" data-aos="fade-up">Your account</span>
          <span class="hero__label-narrow" data-aos="fade-up" data-account-hello-short="">Hello, John</span>
          <span class="hero__arabic" data-aos="fade-up" lang="ar" dir="rtl">حسابي</span>
        </p>
        <h1 class="display" data-account-title="" data-aos="fade-up">Reports</h1>
        <p class="lead text-muted" data-account-lede="" data-aos="fade-up">A report lands here every month for each running service, plus anything we deliver along the way.</p>
      </div>
    </div>
  </section>
  <section class="section account-section" data-aos="fade-up">
    <div class="container account" data-aos="fade-up">
      <aside class="account-side" data-aos="fade-up">
        <div class="stack stack--xs">
          <p class="eyebrow" data-aos="fade-up">Your account</p>
          <p class="account-side__name" data-aos="fade-up" data-account-hello="">Hello, John.</p>
          <p class="account-side__since" data-aos="fade-up" data-account-since="">Member since February 2026</p>
        </div>
        <nav class="account-nav" aria-label="Account" data-aos="fade-up">
          <a class="account-nav__item" href="account.html" data-aos="fade-up">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" data-aos="fade-up" href="account-invoices.html">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" data-aos="fade-up" href="account-reports.html" aria-current="page">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" data-aos="fade-up" href="account-details.html">Account details <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
        </nav>
        <button class="account-side__logout" data-aos="fade-up" type="button" data-log-out="">Log out</button>
      </aside>
      <nav class="account-tabs" aria-label="Account" data-aos="fade-up">
        <div class="account-tabs__top" data-aos="fade-up">
          <span data-account-signed="" data-aos="fade-up">Signed in as John Smith</span>
          <button type="button" data-log-out="" data-aos="fade-up">Log out</button>
        </div>
        <div class="account-tabs__list" data-aos="fade-up">
          <a class="" href="account.html" data-aos="fade-up">Overview</a>
          <a class="" href="account-invoices.html" data-aos="fade-up">Invoices</a>
          <a class="is-active" href="account-reports.html" data-aos="fade-up">Reports</a>
          <a class="" href="account-details.html" data-aos="fade-up">Details</a>
        </div>
      </nav>
      <div class="account__content acc_content" data-aos="fade-up">
        <p class="group-label group-label--plain acc_all_reports" data-aos="fade-up">All reports</p>
        <div data-report-list="">
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Paid search report, September 2026</b>
              <small data-aos="fade-up">Paid search, Bronze</small>
            </div>
            <span data-aos="fade-up" class="report-row__date">Delivered 1 Oct 2026</span>
            <button type="button" data-aos="fade-up" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">SEO report, September 2026</b>
              <small data-aos="fade-up">SEO, Silver</small>
            </div>
            <span class="report-row__date" data-aos="fade-up">Delivered 1 Oct 2026</span>
            <button type="button" data-aos="fade-up" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">SEO report, August 2026</b>
              <small data-aos="fade-up">SEO, Silver</small>
            </div>
            <span class="report-row__date" data-aos="fade-up">Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset" data-aos="fade-up" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Paid search report, August 2026</b>
              <small data-aos="fade-up">Paid search, Bronze</small>
            </div>
            <span class="report-row__date" data-aos="fade-up">Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset" data-aos="fade-up" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Social media report, August 2026</b>
              <small data-aos="fade-up">Social media, Bronze</small>
            </div>
            <span class="report-row__date" data-aos="fade-up" >Delivered 1 Sep 2026</span>
            <button type="button" class="row-link link-reset"data-aos="fade-up" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">SEO technical audit</b>
              <small data-aos="fade-up">SEO, Silver</small>
            </div>
            <span class="report-row__date" data-aos="fade-up">Delivered 15 Aug 2026</span>
            <button type="button" data-aos="fade-up" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Social media report, July 2026</b>
              <small data-aos="fade-up">Social media, Bronze</small>
            </div>
            <span data-aos="fade-up" class="report-row__date">Delivered 1 Aug 2026</span>
            <button data-aos="fade-up" type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Social media report, June 2026</b>
              <small data-aos="fade-up">Social media, Bronze</small>
            </div>
            <span class="report-row__date" data-aos="fade-up">Delivered 1 Jul 2026</span>
            <button  data-aos="fade-up" type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
                <path d="M5.53 0V13M.53 8L5.53 13L10.53 8" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </button>
          </div>
          <div class="report-row" data-aos="fade-up">
            <div>
              <b data-aos="fade-up">Website launch pack</b>
              <small data-aos="fade-up">Web design and development, Silver</small>
            </div>
            <span data-aos="fade-up" class="report-row__date">Delivered 28 Mar 2026</span>
            <button data-aos="fade-up" type="button" class="row-link link-reset" data-inert="Available when the site is live">Download <svg class="icon icon--arrow-down" viewBox="0 0 12 15" fill="none" aria-hidden="true">
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