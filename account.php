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
        <h1 class="display" data-account-title="">Overview</h1>
        <p class="lead text-muted" data-account-lede="">What is running, what is next and what you have bought.</p>
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
          <a class="account-nav__item is-active" href="account.html" aria-current="page">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" href="account-invoices.html">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
          <a class="is-active" href="account.html">Overview</a>
          <a class="" href="account-invoices.html">Invoices</a>
          <a class="" href="account-reports.html">Reports</a>
          <a class="" href="account-details.html">Details</a>
        </div>
      </nav>
      <div class="account__content">
        <div data-overview="">
          <p class="group-label group-label--preparing">Preparing</p>
          <div class="service-row">
            <div class="service-row__image">
              <img src="assest/img/email.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m">Email marketing, Bronze tier</h2>
                <span class="status status--preparing">Preparing</span>
              </div>
              <p class="service-row__note">Order MM 10421, paid in full. Starts once your brief is in.</p>
              <div class="progress">
                <div class="progress__fill progress__fill--preparing" style="width:4%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b>€259</b>
              <small>3 month term</small>
            </div>
          </div>
          <p class="group-label group-label--active">Running now</p>
          <div class="service-row">
            <div class="service-row__image">
              <img src="assest/img/seo.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m">SEO, Silver tier</h2>
                <span class="status status--active">Active</span>
              </div>
              <p class="service-row__note">Month 2 of 3. Ends 8 Nov 2026. Next report 1 Nov.</p>
              <div class="progress">
                <div class="progress__fill progress__fill--active" style="width:59%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b>€1,045</b>
              <small>3 month term</small>
            </div>
          </div>
          <div class="service-row">
            <div class="service-row__image">
              <img src="assest/img/paid-search.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m">Paid search, Bronze tier</h2>
                <span class="status status--active">Active</span>
              </div>
              <p class="service-row__note">Month 2 of 3. Ends 8 Nov 2026. Next report 1 Nov.</p>
              <div class="progress">
                <div class="progress__fill progress__fill--active" style="width:59%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b>€702</b>
              <small>3 month term</small>
            </div>
          </div>
          <p class="group-label group-label--ended">Completed</p>
          <div class="service-row">
            <div class="service-row__image">
              <img src="assest/img/social.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m">Social media, Bronze tier</h2>
                <span class="status status--ended">Ended</span>
              </div>
              <p class="service-row__note">Ended 2 Sep 2026. All 3 reports delivered.</p>
              <div class="progress">
                <div class="progress__fill progress__fill--ended" style="width:100%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b>€409</b>
              <small>3 month term</small>
            </div>
          </div>
          <div class="service-row">
            <div class="service-row__image">
              <img src="assest/img/web.jpg" alt="" loading="lazy" decoding="async" width="1400" height="933" data-media="1" class="">
            </div>
            <div class="service-row__text">
              <div class="service-row__top">
                <h2 class="title-m">Web design and development, Silver tier</h2>
                <span class="status status--ended">Ended</span>
              </div>
              <p class="service-row__note">Launched 28 Mar 2026. Launch pack delivered.</p>
              <div class="progress">
                <div class="progress__fill progress__fill--ended" style="width:100%"></div>
              </div>
            </div>
            <div class="service-row__price">
              <b>€1,581</b>
              <small>One off</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>