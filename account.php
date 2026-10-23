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
        <h1 class="display" data-account-title="" data-aos="fade-up">Overview</h1>
        <p class="lead text-muted" data-account-lede="">What is running, what is next and what you have bought.</p>
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
        <nav class="account-nav" aria-label="Account" data-aos="fade-up">
          <a class="account-nav__item is-active" href="account.html" aria-current="page" data-aos="fade-up">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-invoices.html" data-aos="fade-up">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
        <div class="account-tabs__top" data-aos="fade-up">
          <span data-account-signed="" data-aos="fade-up">Signed in as John Smith</span>
          <button type="button" data-log-out="" data-aos="fade-up">Log out</button>
        </div>
        <div class="account-tabs__list">
          <a class="is-active" href="account.html" data-aos="fade-up">Overview</a>
          <a class="" href="account-invoices.html" data-aos="fade-up">Invoices</a>
          <a class="" href="account-reports.html" data-aos="fade-up">Reports</a>
          <a class="" href="account-details.html" data-aos="fade-up">Details</a>
        </div>
      </nav>
      <div class="account__content" data-aos="fade-up">
        <div data-overview="">
          <p class="group-label group-label--preparing" data-aos="fade-up">Preparing</p>
          <div class="service-row acc_no_border" data-aos="fade-up">
            <div class="service-row__image">
              <img src="assest/img/email.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m" data-aos="fade-up">Email marketing, Bronze tier</h2>
                <span class="status status--preparing" data-aos="fade-up">Preparing</span>
              </div>
              <p class="service-row__note" data-aos="fade-up">Starts once your brief is in.<br class="mobile_none_sk"> First report a month after.</p>
              <div class="progress" data-aos="fade-up">
                <div class="progress__fill progress__fill--preparing" style="width:4%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b data-aos="fade-up">€259</b>
              <small data-aos="fade-up">3 month term</small>
            </div>
          </div>
          <p class="group-label group-label--active acc_padding" data-aos="fade-up">Running now</p>
          <div class="service-row" data-aos="fade-up">
            <div class="service-row__image">
              <img src="assest/img/seo.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m" data-aos="fade-up">SEO, Silver tier</h2>
                <span class="status status--active" data-aos="fade-up">Active</span>
              </div>
              <p class="service-row__note" data-aos="fade-up">Month 2 of 3. Ends 8 Nov 2026.<br class="mobile_none_sk"> Next report 1 Nov.</p>
              <div class="progress" data-aos="fade-up">
                <div class="progress__fill progress__fill--active" style="width:59%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b data-aos="fade-up">€1,045</b>
              <small data-aos="fade-up">3 month term</small>
            </div>
          </div>
          <div class="service-row acc_no_border " data-aos="fade-up">
            <div class="service-row__image">
              <img src="assest/img/paid-search.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="" data-aos="fade-up">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m" data-aos="fade-up">Paid search, Bronze tier</h2>
                <span class="status status--active" data-aos="fade-up">Active</span>
              </div>
              <p class="service-row__note" data-aos="fade-up">Month 2 of 3. Ends 8 Nov 2026.<br class="mobile_none_sk"> Next report 1 Nov.</p>
              <div class="progress" data-aos="fade-up">
                <div class="progress__fill progress__fill--active" style="width:59%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b data-aos="fade-up">€702</b>
              <small data-aos="fade-up">3 month term</small>
            </div>
          </div>
          <p class="group-label group-label--ended acc_padding" data-aos="fade-up">Completed</p>
          <div class="service-row" data-aos="fade-up">
            <div class="service-row__image">
              <img src="assest/img/social.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="" data-aos="fade-up">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m" data-aos="fade-up">Social media, Bronze tier</h2>
                <span class="status status--ended" data-aos="fade-up">Ended</span>
              </div>
              <p class="service-row__note" data-aos="fade-up">Ended 2 Sep 2026. <br class="mobile_none_sk"> All 3 reports delivered.</p>
              <div class="progress" data-aos="fade-up">
                <div class="progress__fill progress__fill--ended" style="width:100%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b data-aos="fade-up">€409</b>
              <small data-aos="fade-up">3 month term</small>
            </div>
          </div>
          <div class="service-row acc_no_border " data-aos="fade-up">
            <div class="service-row__image">
              <img src="assest/img/web.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="" data-aos="fade-up">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m" data-aos="fade-up">Web design and development, Silver tier</h2>
                <span class="status status--ended" data-aos="fade-up">Ended</span>
              </div>
              <p class="service-row__note" data-aos="fade-up">Launched 28 Mar 2026.<br class="mobile_none_sk"> Launch pack delivered.</p>
              <div class="progress" data-aos="fade-up">
                <div class="progress__fill progress__fill--ended" style="width:100%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b data-aos="fade-up">€1,581</b>
              <small data-aos="fade-up">One off</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>