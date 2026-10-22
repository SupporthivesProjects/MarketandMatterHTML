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
        <h1 class="display" data-account-title="">Invoice MM 10398</h1>
        <p class="lead text-muted" data-account-lede="">Placed 8 August 2026. Paid once, for the whole term.</p>
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
        <div class="invoice-detail">
          <div class="invoice-detail__lines">
            <h2 class="title-m">Line items</h2>
            <div class="stack stack--s" data-invoice-lines="">
              <div class="order-line">
                <div>
                  <b>SEO, Silver tier</b>
                  <small>3 month term, 8 Aug to 8 Nov 2026</small>
                </div>
                <b>€1,045</b>
              </div>
              <div class="order-line">
                <div>
                  <b>Paid search, Bronze tier</b>
                  <small>3 month term, 8 Aug to 8 Nov 2026</small>
                </div>
                <b>€702</b>
              </div>
            </div>
            <div class="divider"></div>
            <div class="summary-line">
              <span>Subtotal</span>
              <span data-subtotal="">€1,747</span>
            </div>
            <div class="summary-line summary-line--discount" data-discount-line="">
              <span data-discount-label="">Discount, SPRING100</span>
              <span data-discount-value="">€115 off</span>
            </div>
            <div class="panel__total">
              <p class="title-s total-label">Total paid</p>
              <p class="heading-s" data-total="">€1,632</p>
            </div>
          </div>
          <div class="invoice-detail__side">
            <div class="panel">
              <h2 class="title-m">Billed to</h2>
              <p class="text-muted" data-billed-to="">John Smith <br>Smith &amp; Co <br>12 Market Street <br>London, EC1A 1BB <br>United Kingdom </p>
            </div>
            <div class="panel">
              <h2 class="title-m">Payment</h2>
              <div class="summary-line">
                <span>Paid with</span>
                <span data-paid-with="">Visa ending 4242</span>
              </div>
              <div class="summary-line">
                <span>Invoice</span>
                <span data-invoice-ref="">MM 10398</span>
              </div>
              <div>
                <button class="button sweep" type="button" data-print="">Download invoice <span class="button__icon">
                    <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                      <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>