<?php include 'includes/header.php'; ?>

<main class="acc_main">
  <section class="hero hero--account" data-aos="fade-up">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner acc_outer">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted" data-aos="fade-up">
          <span class="hero__label-wide" data-aos="fade-up">Your account</span>
          <span class="hero__label-narrow" data-account-hello-short="" data-aos="fade-up">Hello, John</span>
          <span class="hero__arabic" lang="ar" dir="rtl" data-aos="fade-up">حسابي</span>
        </p>
        <h1 class="display" data-account-title="" data-aos="fade-up">Invoice MM 10398</h1>
        <p class="lead text-muted" data-account-lede="" data-aos="fade-up">Placed 8 August 2026. Paid once, for the whole term.</p>
      </div>
    </div>
  </section>
  <section class="section account-section" data-aos="fade-up">
    <div class="container account" data-aos="fade-up" >
      <aside class="account-side">
        <div class="stack stack--xs">
          <p class="eyebrow" data-aos="fade-up">Your account</p>
          <p class="account-side__name" data-account-hello="" data-aos="fade-up">Hello, John.</p>
          <p class="account-side__since" data-account-since="" data-aos="fade-up">Member since February 2026</p>
        </div>
        <nav class="account-nav" aria-label="Account" data-aos="fade-up">
          <a class="account-nav__item" href="account.html" data-aos="fade-up">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" data-aos="fade-up" href="account-invoices.html" aria-current="page">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" data-aos="fade-up" href="account-reports.html">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
          <a class="is-active" href="account-invoices.html" data-aos="fade-up">Invoices</a>
          <a class="" href="account-reports.html" data-aos="fade-up">Reports</a>
          <a class="" href="account-details.html" data-aos="fade-up">Details</a>
        </div>
      </nav>
      <div class="account__content" data-aos="fade-up">
        <div class="invoice-detail" data-aos="fade-up">
          <div class="invoice-detail__lines">
            <h2 class="title-m" data-aos="fade-up">Line items</h2>
            <div class="stack stack--s" data-invoice-lines="">
              <div class="order-line" data-aos="fade-up">
                <div data-aos="fade-up">
                  <b data-aos="fade-up">SEO, Silver tier</b>
                  <small data-aos="fade-up">3 month term, 8 Aug to 8 Nov 2026</small>
                </div>
                <b data-aos="fade-up">€1,045</b>
              </div>
              <div class="order-line" data-aos="fade-up">
                <div data-aos="fade-up">
                  <b data-aos="fade-up">Paid search, Bronze tier</b>
                  <small data-aos="fade-up">3 month term, 8 Aug to 8 Nov 2026</small>
                </div>
                <b data-aos="fade-up">€702</b>
              </div>
            </div>
            <div class="acc_divider" data-aos="fade-up"></div>
            <div class="summary-line" data-aos="fade-up">
              <span data-aos="fade-up"> Subtotal</span>
              <span data-subtotal="" data-aos="fade-up">€1,747</span>
            </div>
            <div class="summary-line summary-line--discount" data-aos="fade-up" data-discount-line="">
              <span data-discount-label="" data-aos="fade-up">Discount, SPRING100</span>
              <span data-discount-value="" data-aos="fade-up">€115 off</span>
            </div>
            <div class="panel__total" data-aos="fade-up">
              <p class="title-s total-label" data-aos="fade-up">Total paid</p>
              <p class="heading-s acc_heading_S" data-aos="fade-up" data-total="">€1,632</p>
            </div>
          </div>
          <div class="invoice-detail__side" data-aos="fade-up">
            <div class="panel acc_panel_ph" data-aos="fade-up">
              <h2 class="title-m" data-aos="fade-up">Billed to</h2>
              <p class="text-muted" data-aos="fade-up" data-billed-to="">John Smith <br>Smith &amp; Co <br>12 Market Street <br>London, EC1A 1BB <br>United Kingdom </p>
            </div>
            <div class="panel acc_panel_ph acc_panel_gap" data-aos="fade-up">
              <h2 class="title-m" data-aos="fade-up">Payment</h2>
              <div class="summary-line" data-aos="fade-up">
                <span data-aos="fade-up">Paid with</span>
                <span data-paid-with="" data-aos="fade-up">Visa ending 4242</span>
              </div>
              <div class="summary-line" data-aos="fade-up" >
                <span data-aos="fade-up">Invoice</span>
                <span data-aos="fade-up" data-invoice-ref="">MM 10398</span>
              </div>
              <div>
                <button class="button sweep acc_btn" type="button" data-print="" data-aos="fade-up">Download invoice <span class="button__icon">
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