<?php include 'includes/header.php'; ?>
<main>
  <section class="auth">
    <div class="auth__image">
      <img src="assest/img/handshake-close-up.jpg" alt="A handshake close up" width="2400" height="1602" fetchpriority="high">
    </div>
    <div class="auth__form">
      <form class="form" data-form="signupr" novalidate="">
        <p class="auth__label">
          <span class="mono">Sign up</span>
          <span class="hero__arabic" lang="ar" dir="rtl">إنشاء حساب</span>
        </p>
        <h1 class="heading-l">Create your account.</h1>
        <ul class="ticks ticks--light text-muted">
          <li>
            <svg class="icon icon--check" viewBox="0 0 13 10" fill="none" aria-hidden="true">
              <path d="M.5 4.53L4.5 8.53L12.5 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
            <span>Every invoice in one place</span>
          </li>
          <li>
            <svg class="icon icon--check" viewBox="0 0 13 10" fill="none" aria-hidden="true">
              <path d="M.5 4.53L4.5 8.53L12.5 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
            <span>A report every month for each service</span>
          </li>
          <li>
            <svg class="icon icon--check" viewBox="0 0 13 10" fill="none" aria-hidden="true">
              <path d="M.5 4.53L4.5 8.53L12.5 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg>
            <span>Buy another term whenever you are ready</span>
          </li>
        </ul>
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
        <div class="form__row">
          <div class="field">
            <label class="field__label" for="f-password">Password</label>
            <div class="field__control">
              <input class="input" id="f-password" name="password" type="password" required="" autocomplete="current-password">
              <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
                <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                  <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                  <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                </svg>
              </button>
            </div>
          </div>
          <div class="field">
            <label class="field__label" for="f-confirm">Confirm password</label>
            <div class="field__control">
              <input class="input" id="f-confirm" name="confirm" type="password" required="" data-match="f-password" autocomplete="new-password">
              <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
                <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                  <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                  <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <label class="consent">
          <input type="checkbox" name="consent" required="" checked="">
          <span>I agree to the <a href="terms.html">Terms and conditions</a> and <a href="privacy.html">Privacy policy</a>. </span>
        </label>
        <button type="button" class="captcha" data-captcha="" role="checkbox" aria-checked="false">
          <span class="captcha__box"></span>
          <span>I'm not a robot</span>
          <span class="captcha__badge">
            <span>reCAPTCHA</span>
            <span>Privacy and Terms</span>
          </span>
        </button>
        <div>
          <button class="button button--wide-mobile sweep" type="submit">Create account <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </span>
          </button>
        </div>
        <p class="auth__switch">Already have an account? <a href="login.html">Log in</a>
        </p>
      </form>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>