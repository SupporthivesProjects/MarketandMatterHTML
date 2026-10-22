<?php include 'includes/header.php'; ?>
<main>
  <section class="auth">
    <div class="auth__image">
      <img src="assest/img/arched-door-open.jpg" alt="An arched door standing open" width="1600" height="2400" fetchpriority="high">
    </div>
    <div class="auth__form">
      <form class="form" data-form="reset" novalidate="">
        <p class="auth__label">
          <span class="mono">Reset password</span>
          <span class="hero__arabic" lang="ar" dir="rtl">كلمة مرور جديدة</span>
        </p>
        <h1 class="heading-l">Set a new password.</h1>
        <p class="forget-para text-muted">Choose one you have not used here before.</p>
        <div class="field">
          <label class="field__label" for="f-newpassword">New password</label>
          <div class="field__control">
            <input class="input" id="f-newpassword" name="newpassword" type="password" required="" autocomplete="new-password">
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
            <input class="input" id="f-confirmnew" name="confirmnew" type="password" required="" data-match="f-newpassword" autocomplete="new-password">
            <button class="field__toggle" type="button" data-toggle-password="" aria-label="Show password">
              <svg viewBox="0 0 20 20" width="20" height="20" fill="none" aria-hidden="true">
                <path d="M1.7 10S4.7 4.2 10 4.2 18.3 10 18.3 10 15.3 15.8 10 15.8 1.7 10 1.7 10Z" stroke="currentColor" stroke-width="1.3"></path>
                <circle cx="10" cy="10" r="2.6" stroke="currentColor" stroke-width="1.3"></circle>
              </svg>
            </button>
          </div>
        </div>
        <div>
          <button class="button button--wide-mobile sweep" type="submit">Set new password <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>