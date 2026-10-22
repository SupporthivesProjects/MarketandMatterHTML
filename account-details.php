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
        <h1 class="display" data-account-title="">Account details</h1>
        <p class="lead text-muted" data-account-lede="">Your personal and billing details. These go on every invoice.</p>
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
          <a class="account-nav__item" href="account-reports.html">Reports <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
          </a>
          <a class="account-nav__item is-active" href="account-details.html" aria-current="page">Account details <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
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
          <a class="" href="account-reports.html">Reports</a>
          <a class="is-active" href="account-details.html">Details</a>
        </div>
      </nav>
      <div class="account__content">
        <form class="form form--groups" data-form="details" novalidate="">
          <div class="form-group">
            <h2 class="title-m">Personal details</h2>
            <div class="form__row">
              <div class="field">
                <label class="field__label" for="f-name">Full name</label>
                <div class="field__control">
                  <input class="input" id="f-name" name="name" type="text" required="" autocomplete="name">
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-email">Email address</label>
                <div class="field__control">
                  <input class="input" id="f-email" name="email" type="email" required="" autocomplete="email">
                </div>
              </div>
            </div>
            <div class="form__row">
              <div class="field">
                <label class="field__label" for="f-phone">Phone</label>
                <div class="field__control">
                  <input class="input" id="f-phone" name="phone" type="tel" autocomplete="tel">
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-company">Company</label>
                <div class="field__control">
                  <input class="input" id="f-company" name="company" type="text" autocomplete="organization">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <h2 class="title-m">Billing details</h2>
            <div class="field">
              <label class="field__label" for="f-address1">Address line 1</label>
              <div class="field__control">
                <input class="input" id="f-address1" name="address1" type="text" required="" autocomplete="address-line1">
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
                  <input class="input" id="f-city" name="city" type="text" required="" autocomplete="address-level2">
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-region">Region</label>
                <div class="field__control">
                  <input class="input" id="f-region" name="region" type="text" autocomplete="address-level1">
                </div>
              </div>
            </div>
            <div class="form__row">
              <div class="field">
                <label class="field__label" for="f-postcode">Postcode</label>
                <div class="field__control">
                  <input class="input" id="f-postcode" name="postcode" type="text" required="" autocomplete="postal-code">
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-country">Country</label>
                <div class="field__control">
                  <select class="input" id="f-country" name="country" required="">
                    <option>United Kingdom</option>
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
          <div class="form-group">
            <h2 class="title-m">Password</h2>
            <div class="form__row form__row--3">
              <div class="field">
                <label class="field__label" for="f-password">Current password</label>
                <div class="field__control">
                  <input class="input" id="f-password" name="password" type="password" autocomplete="current-password">
                  <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-newpassword">New password</label>
                <div class="field__control">
                  <input class="input" id="f-newpassword" name="newpassword" type="password" autocomplete="new-password">
                  <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="field">
                <label class="field__label" for="f-confirmnew">Confirm new password</label>
                <div class="field__control">
                  <input class="input" id="f-confirmnew" name="confirmnew" type="password" data-match="f-newpassword" autocomplete="new-password">
                  <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
                    <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                      <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                      <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <p class="small text-muted" data-password-note="">Last changed 8 August 2026. Leave the new password blank to keep your current one.</p>
          </div>
          <div>
            <button class="button button--wide-mobile sweep" type="submit">Save changes <span class="button__icon">
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
<?php include 'includes/footer.php'; ?>