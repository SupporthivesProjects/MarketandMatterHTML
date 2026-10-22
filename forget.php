<?php include 'includes/header.php'; ?>
<main>
  <section class="auth">
    <div class="auth__image">
      <img src="assest/img/closed-carved-door.jpg" alt="A closed carved wooden door" width="1500" height="2400" fetchpriority="high">
    </div>
    <div class="auth__form">
      <form class="form" data-form="forgot" novalidate>
        <p class="auth__label">
          <span class="mono">Forgot password</span>
          <span class="hero__arabic" lang="ar" dir="rtl">نسيت كلمة المرور</span>
        </p>
        <h1 class="heading-l">Reset your password.</h1>
        <p class="body text-muted">Enter the email on your account and we’ll send you <br>a link to set a new password. </p>
        <div class="field">
          <label class="field__label" for="f-email">Email address</label>
          <div class="field__control">
            <input class="input" id="f-email" name="email" type="email" placeholder="john@example.com" required autocomplete="email">
          </div>
        </div>
        <div class="auth__actions auth__actions--stack">
          <p class="body text-muted">Remembered it? <a class="auth__link" href="login.html">Back to log in</a>
          </p>
          <button class="button sweep" type="submit">Send reset link <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>