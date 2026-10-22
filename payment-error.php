<?php include 'includes/header.php'; ?>

<main>
  <section class="hero hero--commerce">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted">Order <span data-order-ref="">MM 10482</span>
        </p>
        <h1 class="display">Payment <span class="display__error">Failed</span>
        </h1>
      </div>
      <ol class="steps">
        <li class="steps__item steps__item--done">
          <span class="steps__index">Done</span>Cart
        </li>
        <li class="steps__item steps__item--done">
          <span class="steps__index">Done</span>Details
        </li>
        <li class="steps__item steps__item--error">
          <span class="steps__index">Failed</span>Payment
        </li>
      </ol>
    </div>
  </section>
  <section class="section">
    <div class="container commerce commerce--result">
      <div class="result">
        <span class="result__mark result__mark--error">
          <i class="plus" aria-hidden="true"></i>
        </span>
        <p class="lead">Nothing was taken from your card. Check the details and try again, or use another card. If it keeps happening, send us a message and we’ll sort it by email.</p>
        <div class="result__buttons">
          <a class="button sweep" href="checkout.html">Try again <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </span>
          </a>
          <a class="button button--ghost sweep" href="contact.html">Contact us</a>
        </div>
      </div>
      <aside class="panel" data-order-summary="">
        <h2 class="title-m">Your order</h2>
        <div class="stack stack--s" data-order-lines="">
          <div class="order-line">
            <div>
              <b>SEO, Silver tier</b>
              <small>3 month term</small>
            </div>
            <b>€1,045</b>
          </div>
          <div class="order-line">
            <div>
              <b>SEO, Gold tier</b>
              <small>12 month term</small>
            </div>
            <b>€7,144</b>
          </div>
          <div class="order-line">
            <div>
              <b>SEO, Bronze tier</b>
              <small>6 month term</small>
            </div>
            <b>€590</b>
          </div>
        </div>
        <div class="divider"></div>
        <div class="summary-line">
          <span>Subtotal</span>
          <span data-subtotal="">€8,779</span>
        </div>
        <div class="summary-line summary-line--discount" data-discount-line="">
          <span data-discount-label="">Discount, SPRING100</span>
          <span data-discount-value="">€115 off</span>
        </div>
        <div class="panel__total">
          <div>
            <p class="title-s total-label">Total to pay</p>
            <p class="panel__note">Paid once for the term</p>
          </div>
          <p class="panel__value" data-total="">€8,664</p>
        </div>
      </aside>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>