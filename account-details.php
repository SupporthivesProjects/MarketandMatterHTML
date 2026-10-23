<?php include 'includes/header.php'; ?>

<main class="acc_main">
  <section class="hero hero--account" data-aos="fade-up">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner acc_outer" data-aos="fade-up">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted" data-aos="fade-up">
          <span class="hero__label-wide" data-aos="fade-up">Your account</span>
          <span class="hero__label-narrow" data-aos="fade-up" data-account-hello-short="">Hello, John</span>
          <span class="hero__arabic" lang="ar" dir="rtl" data-aos="fade-up">حسابي</span>
        </p>
        <h1 class="display" data-aos="fade-up" data-account-title="">Account details</h1>
        <p class="lead text-muted" data-aos="fade-up" data-account-lede="">Your personal and billing details. These go on every invoice.</p>
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
          <a class="account-nav__item" data-aos="fade-up" href="account.html">Overview <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" data-aos="fade-up" href="account-invoices.html">Invoices <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item" data-aos="fade-up" href="account-reports.html">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" data-aos="fade-up" href="account-details.html" aria-current="page">Account details <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
          <a class="" href="account-reports.html" data-aos="fade-up">Reports</a>
          <a class="is-active" href="account-details.html" data-aos="fade-up">Details</a>
        </div>
      </nav>
      <div class="account__content acc_details_out" data-aos="fade-up">
        <form class="form form--groups" data-form="details" novalidate="" data-aos="fade-up">
          <div class="form-group" data-aos="fade-up">
            <h2 class="title-m" data-aos="fade-up">Personal details</h2>
            <div class="form__row" data-aos="fade-up">
              <div class="field" data-aos="fade-up">
                <label class="field__label" for="f-name" data-aos="fade-up">Full name</label>
                <div class="field__control">
                  <input class="input" id="f-name" name="name" type="text" required="" autocomplete="name" data-aos="fade-up">
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" for="f-email" data-aos="fade-up">Email address</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-email" name="email" type="email" required="" autocomplete="email">
                </div>
              </div>
            </div>
            <div class="form__row" data-aos="fade-up">
              <div class="field" data-aos="fade-up">
                <label class="field__label" for="f-phone" data-aos="fade-up">Phone</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-phone" name="phone" type="tel" autocomplete="tel">
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" for="f-company" data-aos="fade-up">Company</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-company" name="company" type="text" autocomplete="organization">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group" data-aos="fade-up">
            <h2 class="title-m" data-aos="fade-up">Billing details</h2>
            <div class="field" data-aos="fade-up">
              <label class="field__label" data-aos="fade-up" for="f-address1">Address line 1</label>
              <div class="field__control">
                <input class="input" data-aos="fade-up" id="f-address1" name="address1" type="text" required="" autocomplete="address-line1">
              </div>
            </div>
            <div class="field" data-aos="fade-up">
              <label class="field__label" data-aos="fade-up" for="f-address2">Address line 2 (optional)</label>
              <div class="field__control">
                <input class="input" data-aos="fade-up" id="f-address2" name="address2" type="text" placeholder="Apartment, building or floor" autocomplete="address-line2">
              </div>
            </div>
            <div class="form__row" data-aos="fade-up">
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-city">City</label>
                <div class="field__control" data-aos="fade-up">
                  <input class="input" data-aos="fade-up" id="f-city" name="city" type="text" required="" autocomplete="address-level2">
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-region">Region</label>
                <div class="field__control" >
                  <input class="input" data-aos="fade-up" id="f-region" name="region" type="text" autocomplete="address-level1">
                </div>
              </div>
            </div>
            <div class="form__row" data-aos="fade-up">
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-postcode">Postcode</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-postcode" name="postcode" type="text" required="" autocomplete="postal-code">
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-country">Country</label>
                <div class="field__control">
                  <select class="input" data-aos="fade-up" id="f-country" name="country" required="">
                    <option>United Kingdom</option>
                    <option>United Arab Emirates</option>
                    <option>Ireland</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>United States</option>
                    <option>Other</option>
                  </select>
                  <svg class="icon icon--chevron" data-aos="fade-up" viewBox="0 0 12 8" fill="none" aria-hidden="true">
                    <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group" data-aos="fade-up">
            <h2 class="title-m" data-aos="fade-up">Password</h2>
            <div class="form__row form__row--3" data-aos="fade-up">
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-password">Current password</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-password" name="password" type="password" autocomplete="current-password">
                  <button class="field__toggle" data-aos="fade-up" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-newpassword">New password</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-newpassword" name="newpassword" type="password" autocomplete="new-password">
                  <button class="field__toggle" data-aos="fade-up" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="field" data-aos="fade-up">
                <label class="field__label" data-aos="fade-up" for="f-confirmnew">Confirm new password</label>
                <div class="field__control">
                  <input class="input" data-aos="fade-up" id="f-confirmnew" name="confirmnew" type="password" data-match="f-newpassword" autocomplete="new-password">
                  <button class="field__toggle" data-aos="fade-up" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <p class="small text-muted" data-aos="fade-up" data-password-note="">Last changed 8 August 2026. Leave the new password blank to keep your current one.</p>
          </div>
          <div>
            <button class="button button--wide-mobile sweep" data-aos="fade-up" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save changes <span class="button__icon">
                <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                  <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content acc_modal" data-aos="fade-up">
        <div class="acc_modal_div" data-aos="fade-up">
          <svg data-aos="fade-up" xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">
            <path d="M1.0625 9.06055L9.0625 17.0605L25.0625 1.06055" stroke-width="3" stroke="white"/>
          </svg>
        </div>
        <div class="acc_modal_div2" data-aos="fade-up">
          <h2 data-aos="fade-up">Changes saved</h2>
          <p data-aos="fade-up">Your details are up to date.
            We use them on your next invoice.</p>
        </div>
        <button data-aos="fade-up" class="button button--wide-mobile sweep w-100" type="button">Back to your account <span class="button__icon">
            <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </span>
        </button>
    </div>
  </div>
</div>
  
<?php include 'includes/footer.php'; ?>