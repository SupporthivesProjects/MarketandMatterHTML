<?php include 'includes/header.php'; ?>

<main>
  <section class="hero hero--commerce">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted">Step 2 of 3</p>
        <h1 class="display">Checkout</h1>
        <p class="lead text-muted">Check your details, then pay on a secure page.</p>
      </div>
      <ol class="steps">
        <li class="steps__item steps__item--done">
          <span class="steps__index">Done</span>Cart
        </li>
        <li class="steps__item steps__item--active">
          <span class="steps__index">02</span>Details
        </li>
        <li class="steps__item">
          <span class="steps__index">03</span>Payment
        </li>
      </ol>
    </div>
  </section>
  <section class="section">
    <form class="container commerce" data-checkout="" novalidate="">
      <div class="checkout-details">
        <div class="form-group">
          <h2 class="form-group__head">
            <span>01</span>
            <span class="title-m">Your details</span>
          </h2>
          <div class="form__row">
            <div class="field">
              <label class="field__label" for="f-name">Full name</label>
              <div class="field__control">
                <input class="input" id="f-name" name="name" type="text" placeholder="John Smith" required="" autocomplete="name">
              </div>
            </div>
            <div class="field">
              <label class="field__label" for="f-email">Email address</label>
              <div class="field__control">
                <input class="input" id="f-email" name="email" type="email" placeholder="john@example.com" required="" autocomplete="email">
              </div>
            </div>
          </div>
          <div class="form__row">
            <div class="field">
              <label class="field__label" for="f-phone">Phone</label>
              <div class="field__control">
                <input class="input" id="f-phone" name="phone" type="tel" placeholder="+44 7700 900123" required="" autocomplete="tel">
              </div>
            </div>
            <div class="field">
              <label class="field__label" for="f-company">Company (optional)</label>
              <div class="field__control">
                <input class="input" id="f-company" name="company" type="text" placeholder="Your company name" autocomplete="organization">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <h2 class="form-group__head">
            <span>02</span>
            <span class="title-m">Billing address</span>
          </h2>
          <div class="field">
            <label class="field__label" for="f-address1">Address line 1</label>
            <div class="field__control">
              <input class="input" id="f-address1" name="address1" type="text" placeholder="12 Market Street" required="" autocomplete="address-line1">
            </div>
          </div>
          <div class="field">
            <label class="field__label" for="f-address2">Address line 2 (optional)</label>
            <div class="field__control">
              <input class="input" id="f-address2" name="address2" type="text" placeholder="Apartment, building or floor" autocomplete="address-line2">
            </div>
          </div>
          <div class="form__row">
            <div class="field">
              <label class="field__label" for="f-city">City</label>
              <div class="field__control">
                <input class="input" id="f-city" name="city" type="text" placeholder="London" required="" autocomplete="address-level2">
              </div>
            </div>
            <div class="field">
              <label class="field__label" for="f-region">Region</label>
              <div class="field__control">
                <input class="input" id="f-region" name="region" type="text" placeholder="England" autocomplete="address-level1">
              </div>
            </div>
          </div>
          <div class="form__row">
            <div class="field">
              <label class="field__label" for="f-postcode">Postcode</label>
              <div class="field__control">
                <input class="input" id="f-postcode" name="postcode" type="text" placeholder="EC1A 1BB" required="" autocomplete="postal-code">
              </div>
            </div>
            <div class="field">
              <label class="field__label" for="f-country">Country</label>
              <div class="field__control">
                <select class="input" id="f-country" name="country" required="">
                  <option selected="">United Kingdom</option>
                  <option>United Arab Emirates</option>
                  <option>Ireland</option>
                  <option>France</option>
                  <option>Germany</option>
                  <option>United States</option>
                  <option>Other</option>
                </select>
                <svg class="icon icon--chevron" viewBox="0 0 12 8" fill="none" aria-hidden="true">
                  <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
            </div>
          </div>
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
        <div class="discount">
          <div class="field">
            <label class="field__label" for="f-discount">Discount code</label>
            <div class="field__control">
              <input class="input" id="f-discount" name="discount" type="text" autocomplete="off" data-discount-input="">
            </div>
          </div>
          <button class="discount__apply is-applied" type="button" data-discount-apply="">
            <svg class="icon icon--check" viewBox="0 0 13 10" fill="none" aria-hidden="true">
              <path d="M.5 4.53L4.5 8.53L12.5 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>Applied </button>
        </div>
        <p class="discount__message" data-discount-message="" hidden="">That code is not valid.</p>
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
            <p class="title-s total-label">Total today</p>
            <p class="panel__note">Paid once for the term</p>
          </div>
          <p class="panel__value" data-total="">€8,664</p>
        </div>
        <div class="divider"></div>
        <label class="consent">
          <input type="checkbox" name="consent" required="" checked="">
          <span>I agree to the <a href="terms.html">Terms and conditions</a> and <a href="privacy.html">Privacy policy</a>. </span>
        </label>
        <button type="button" class="captcha captcha--wide" data-captcha="" role="checkbox" aria-checked="false">
          <span class="captcha__box"></span>
          <span>I'm not a robot</span>
          <span class="captcha__badge">
            <span>reCAPTCHA</span>
            <span>Privacy and Terms</span>
          </span>
        </button>
        <button class="button button--block sweep" type="submit" data-pay="">Continue to payment <span class="button__icon">
            <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </span>
        </button>
        <div class="accept">
          <span class="accept__label">We accept</span>
          <div class="card-logos">
            <svg viewBox="0 0 56 36" fill="none" aria-label="Visa" role="img">
              <rect width="56" height="36" rx="8" fill="#fff"></rect>
              <path d="M23.9 12.7L19.5 23.3H16.6L14.4 14.8C14.2 14.3 14.1 14.1 13.7 13.9 13 13.6 12 13.2 11 13L11.1 12.7H15.7C16 12.7 16.3 12.8 16.6 13 16.8 13.2 17 13.5 17 13.8L18.2 19.9 21 12.7H23.9ZM35.3 19.9C35.3 17.1 31.4 16.9 31.4 15.6 31.4 15.3 31.8 14.9 32.6 14.8 33.5 14.7 34.5 14.8 35.3 15.2L35.8 13C35 12.7 34.1 12.5 33.2 12.5 30.5 12.5 28.6 14 28.6 16 28.6 17.5 29.9 18.4 31 18.9 32.1 19.4 32.4 19.8 32.4 20.2 32.4 20.9 31.6 21.3 30.8 21.3 29.4 21.3 28.6 20.9 27.9 20.6L27.5 22.9C28.1 23.2 29.3 23.5 30.5 23.5 33.4 23.5 35.3 22.1 35.3 19.9ZM42.5 23.3H45L42.8 12.7H40.4C40.2 12.7 39.9 12.8 39.7 12.9 39.5 13.1 39.4 13.3 39.3 13.5L35.1 23.3H38L38.6 21.7H42.1L42.5 23.3ZM39.4 19.6L40.8 15.6 41.7 19.6H39.4ZM27.8 12.7L25.6 23.3H22.8L25.1 12.7H27.8Z" fill="#1A1F71"></path>
            </svg>
            <svg viewBox="0 0 56 36" fill="none" aria-label="Mastercard" role="img">
              <rect width="56" height="36" rx="8" fill="#fff"></rect>
              <circle cx="21.5" cy="18" r="10.5" fill="#EB001B"></circle>
              <circle cx="34.5" cy="18" r="10.5" fill="#F79E1B"></circle>
              <path d="M28 9.8C30.4 11.7 32 14.7 32 18S30.4 24.3 28 26.2C25.6 24.3 24 21.3 24 18S25.6 11.7 28 9.8Z" fill="#FF5F00"></path>
            </svg>
          </div>
        </div>
        <p class="secure-note">You finish paying on our payment provider’s secure page. We never see or store your card details.</p>
      </aside>
    </form>
  </section>
</main>
<?php include 'includes/footer.php'; ?>