<?php include 'includes/header.php'; ?>

<style>
   h1, p, dd, h2, h3, h4, h5, h6{
      margin-bottom: 0px
   }
   .lead.text-muted{
      color: var(--paper-muted) !important;
  }
  .how_s3 .lead.text-muted, .how_s4 .lead.text-muted, .how_s5 .lead.text-muted{
    color: var(--bs-secondary-color)!important;
  }
  .how_s4{
    max-width: 1920px;
    margin: auto;
  }
  .how_s5{
    max-width: 1920px;
    margin: auto;
  }
  .order-steps{
    align-items: stretch;
  }
  .order-step__mock {
    height: -webkit-fill-available;
  }
  .order-steps {
    align-items: stretch;
}
.secure-card{
  align-self: center;
}
.order-steps {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    align-items: stretch;
}

.order-steps .order-step {
    display: grid;
    grid-row: span 3;
    grid-template-rows: subgrid;
}
.tier-card--mini .figures{
  padding-top: 24px;
  padding-bottom: 24px;
}
.tier-card--mini{
  gap: 24px
}
[data-carousel] > *{
  scroll-snap-align: center;
}
</style>

<main>
  <section class="hero hero--how how_s1">
    <img class="hero__media" src="assest/img/mountain-landscape.jpg" alt="" width="2000" height="1125" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner work_container">
      <div class="hero__copy hero__copy--center">
        <p class="eyebrow">How it works</p>
        <h1 class="display">How a service <br>goes from order <br>to work done </h1>
        <p class="lead text-muted">Choose a service, a tier and a term, then see what we do once you have paid.</p>
      </div>
      <div class="hero__arches" aria-hidden="true">
        <div class="hero__arch">
          <img src="assest/img/owner-with-tablet.jpg" alt="" decoding="async" width="1000" height="1477">
        </div>
        <div class="hero__arch">
          <img src="assest/img/owner-writing-plan.jpg" alt="" decoding="async" width="1000" height="1500">
        </div>
        <div class="hero__arch">
          <img src="assest/img/florist-reading-report.jpg" alt="" decoding="async" width="1000" height="1370">
        </div>
      </div>
    </div>
  </section>
  <section class="section section--mist how_s2">
    <div class="container work_container">
      <div class="section-head section-head--stack work_continner">
        <p class="index-label" data-reveal>
          <span class="index-label__index">01</span>How to order
        </p>
        <h2 class="heading-l" data-reveal>From service to checkout</h2>
      </div>
      <div class="grid-4 order-steps" data-carousel>
        <article class="order-step" data-reveal>
          <p class="index-label">
            <span class="index-label__index">01</span>Step
          </p>
          <div class="order-step__mock order-step__mock--surface" aria-hidden="true">
            <div class="mini-services">
              <span class="mini-services__tile is-active">
                <b>SEO</b>
                <small data-price-from="seo" data-style="amount"></small>
              </span>
              <span class="mini-services__tile">
                <b>Paid search</b>
                <small data-price-from="paid-search" data-style="amount"></small>
              </span>
              <span class="mini-services__tile">
                <b>Social media</b>
                <small data-price-from="social-media" data-style="amount"></small>
              </span>
              <span class="mini-services__tile">
                <b>Email marketing</b>
                <small data-price-from="email-marketing" data-style="amount"></small>
              </span>
              <span class="mini-services__tile">
                <b>Web design</b>
                <small data-price-from="web-design" data-style="amount"></small>
              </span>
              <span class="mini-services__tile">
                <b>Reputation</b>
                <small data-price-from="reputation" data-style="amount"></small>
              </span>
            </div>
          </div>
          <div class="stack stack--xs">
            <h3 class="title-l">Pick a service</h3>
            <p class="text-muted">Six to choose from. Each has its own page with the three tiers, what every tier includes and the price for every term.</p>
          </div>
        </article>
        <article class="order-step" data-reveal>
          <p class="index-label">
            <span class="index-label__index">02</span>Step
          </p>
          <div class="order-step__mock" aria-hidden="true">
            <div class="tier-card tier-card--featured tier-card--mini">
              <div class="tier-card__top">
                <span class="title-l">Silver</span>
                <span class="tag">Most popular</span>
              </div>
              <div>
                <div class="tier-card__total" data-price="seo:silver:3"></div>
                <p class="tier-card__monthly">
                  <span data-price-monthly="seo:silver:3"></span> a month, 3 month term
                </p>
              </div>
              <div class="figures" data-figures="seo:silver"></div>
              <span class="tier-card__button">Start with Silver</span>
            </div>
          </div>
          <div class="stack stack--xs">
            <h3 class="title-l">Choose a tier</h3>
            <p class="text-muted">Bronze, Silver or Gold. The difference is in the numbers on the card: keywords, posts, links, locations. Silver is the one most people pick.</p>
          </div>
        </article>
        <article class="order-step" data-reveal>
          <p class="index-label">
            <span class="index-label__index">03</span>Step
          </p>
          <div class="order-step__mock order-step__mock--surface" aria-hidden="true">
            <div class="term-maths">
              <div class="term-maths__options">
                <span>1 month</span>
                <span class="is-active">3 months</span>
                <span>6 months</span>
                <span>12 months</span>
              </div>
              <div class="term-maths__line">
                <span>Silver, monthly</span>
                <b data-price-monthly="seo:silver:3"></b>
              </div>
              <div class="term-maths__line">
                <span>Term</span>
                <b>3 months</b>
              </div>
              <div class="term-maths__total">
                <b>Total, paid once</b>
                <span data-price="seo:silver:3"></span>
              </div>
            </div>
          </div>
          <div class="stack stack--xs">
            <h3 class="title-l">Set the term</h3>
            <p class="text-muted">1, 3, 6 or 12 months. Longer terms cost less a month, and the term total is what you pay.</p>
          </div>
        </article>
        <article class="order-step" data-reveal>
          <p class="index-label">
            <span class="index-label__index">04</span>Step
          </p>
          <div class="order-step__mock" aria-hidden="true">
            <div class="secure-card">
              <span class="currency__label">Secure payment</span>
              <p>You finish paying on our payment provider’s page. Your card details never touch our site.</p>
              <div class="card-logos">
                <svg viewBox="0 0 56 36" fill="none" aria-label="Visa" role="img">
                  <rect width="56" height="36" rx="8" fill="#fff" />
                  <path d="M23.9 12.7L19.5 23.3H16.6L14.4 14.8C14.2 14.3 14.1 14.1 13.7 13.9 13 13.6 12 13.2 11 13L11.1 12.7H15.7C16 12.7 16.3 12.8 16.6 13 16.8 13.2 17 13.5 17 13.8L18.2 19.9 21 12.7H23.9ZM35.3 19.9C35.3 17.1 31.4 16.9 31.4 15.6 31.4 15.3 31.8 14.9 32.6 14.8 33.5 14.7 34.5 14.8 35.3 15.2L35.8 13C35 12.7 34.1 12.5 33.2 12.5 30.5 12.5 28.6 14 28.6 16 28.6 17.5 29.9 18.4 31 18.9 32.1 19.4 32.4 19.8 32.4 20.2 32.4 20.9 31.6 21.3 30.8 21.3 29.4 21.3 28.6 20.9 27.9 20.6L27.5 22.9C28.1 23.2 29.3 23.5 30.5 23.5 33.4 23.5 35.3 22.1 35.3 19.9ZM42.5 23.3H45L42.8 12.7H40.4C40.2 12.7 39.9 12.8 39.7 12.9 39.5 13.1 39.4 13.3 39.3 13.5L35.1 23.3H38L38.6 21.7H42.1L42.5 23.3ZM39.4 19.6L40.8 15.6 41.7 19.6H39.4ZM27.8 12.7L25.6 23.3H22.8L25.1 12.7H27.8Z" fill="#1A1F71" />
                </svg>
                <svg viewBox="0 0 56 36" fill="none" aria-label="Mastercard" role="img">
                  <rect width="56" height="36" rx="8" fill="#fff" />
                  <circle cx="21.5" cy="18" r="10.5" fill="#EB001B" />
                  <circle cx="34.5" cy="18" r="10.5" fill="#F79E1B" />
                  <path d="M28 9.8C30.4 11.7 32 14.7 32 18S30.4 24.3 28 26.2C25.6 24.3 24 21.3 24 18S25.6 11.7 28 9.8Z" fill="#FF5F00" />
                </svg>
              </div>
            </div>
          </div>
          <div class="stack stack--xs">
            <h3 class="title-l">Pay at checkout</h3>
            <p class="text-muted">You pay the total in one go on our payment provider’s secure page.</p>
          </div>
        </article>
      </div>
      <div class="carousel-dots" data-carousel-dots></div>
    </div>
  </section>
  <section class="section how_s3">
    <div class="container work_container">
      <div class="section-head section-head--stack">
        <p class="index-label" data-reveal>
          <span class="index-label__index">02</span>Your first month
        </p>
        <h2 class="heading-l" data-reveal>What happens after you pay</h2>
        <p class="lead text-muted" data-reveal>Every order runs the same way, whichever service and tier you choose.</p>
      </div>
      <div class="grid-4 milestones">
        <div class="milestone" data-reveal>
          <span class="rule-col__when">Start</span>
          <h3 class="title-l">Account open</h3>
          <p class="text-muted">Your account opens with the invoice in it. We send a short form: logins, your goals and what not to touch.</p>
        </div>
        <div class="milestone" data-reveal>
          <span class="rule-col__when">Setup</span>
          <h3 class="title-l">Plan sent</h3>
          <p class="text-muted">We set up what the service needs and send a one page plan for the month. You say yes or change it.</p>
        </div>
        <div class="milestone" data-reveal>
          <span class="rule-col__when">Through the month</span>
          <h3 class="title-l">Work done</h3>
          <p class="text-muted">The plan gets done, and anything we need from you comes in one email.</p>
        </div>
        <div class="milestone" data-reveal>
          <span class="rule-col__when">Month end</span>
          <h3 class="title-l">Report lands</h3>
          <p class="text-muted">What was done, what moved, what comes next. In your account, one page, plain numbers.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="split section--mist how_s4">
    <div class="split__image">
      <img src="assest/img/boutique-owner-shop.jpg" alt="A boutique owner holding a folder in her shop" loading="lazy" decoding="async" width="1920" height="1080">
    </div>
    <div class="split__copy">
      <p class="index-label" data-reveal>
        <span class="index-label__index">03</span>After the term
      </p>
      <h2 class="heading-l" data-reveal>What you hold when <br>the last month closes </h2>
      <div class="prose lead text-muted" data-reveal>
        <p>Nothing we set up sits behind our login. We work inside your profiles, your ad accounts and your site, so when a term closes, the people doing the work change and the ownership does not.<br><br>
        There is nothing to hand back and nothing to transfer.</p>
      </div>
      <div class="keep-list" data-reveal>
        <div class="keep-list__item">
          <b>Your accounts</b>
          <span class="text-muted">Profiles and ad accounts are opened in your name, with you as the owner.</span>
        </div>
        <div class="keep-list__item">
          <b>Your live work</b>
          <span class="text-muted">Pages, posts and links stay up on your site and your channels.</span>
        </div>
        <div class="keep-list__item">
          <b>Your full record</b>
          <span class="text-muted">Every report from the term stays in your account to read again.</span>
        </div>
      </div>
    </div>
  </section>
  <section class="split split--reverse how_s5">
    <div class="split__copy split__copy--left">
      <p class="index-label" data-reveal>
        <span class="index-label__index">04</span>Why fixed services
      </p>
      <h2 class="heading-l" data-reveal>Marketing you <br>can plan around </h2>
      <div class="prose lead text-muted" data-reveal>
        <p>Most marketing is bought on trust. You agree a monthly fee, wait for results and hope the report explains where the money went.<br><br>
        A fixed service works the other way round. The work is set before you order, and you pick how long it runs. When the term ends, you decide what comes next, knowing what the last one did.<br><br>
        It makes marketing a line in your budget, not an open question.</p>
      </div>
      <div data-reveal>
        <a class="button button--light sweep" href="services.html">Browse services <span class="button__icon">
            <svg class="icon icon--arrow-up" viewBox="0 0 14 14" fill="none" aria-hidden="true">
              <path d="M3 11L11 3M11 3H4.5M11 3V9.5" stroke="currentColor" stroke-width="1.6" />
            </svg>
          </span>
        </a>
      </div>
    </div>
    <div class="split__image">
      <img src="assest/img/owner-budget.jpg" alt="A man in a suit working through papers at a desk" loading="lazy" decoding="async" width="1920" height="1280">
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>