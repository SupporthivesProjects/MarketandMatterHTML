<?php include 'includes/header.php'; ?>
<main>
  <section class="auth">
    <div class="auth__image">
      <img src="assest/img/reading-notes-at-desk.jpg" alt="A man in a ghutra reading notes at his desk" width="1600" height="2397" fetchpriority="high">
    </div>
    <div class="auth__form">
      <form class="form" data-form="loginf" novalidate="">
        <p class="auth__label">
          <span class="mono">Log in</span>
          <span class="hero__arabic" lang="ar" dir="rtl">تسجيل الدخول</span>
        </p>
        <h1 class="heading-l">Log in to your account.</h1>
        <div class="field">
          <label class="field__label" for="f-email">Email address</label>
          <div class="field__control">
            <input class="input" id="f-email" name="email" type="email" placeholder="john@example.com" required="" autocomplete="email">
          </div>
        </div>
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
        <div class="auth__actions">
          <a class="auth__link" href="forgot-password.html">Forgot password?</a>
          <button class="button sweep" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in <span class="button__icon">
              <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </span>
          </button>
        </div>
        <p class="auth__switch">New here? <a href="signup.html">Create an account</a>
        </p>
      </form>
    </div>
  </section>

   <!-- Modal -->
        <div class="modal fade  mod-fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mod-cen ">
                <div class="modal-content login_modal">
                    <div class="log_modal_div">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">
                            <path d="M1.0625 9.06055L9.0625 17.0605L25.0625 1.06055" stroke-width="3" stroke="white"/>
                        </svg>
                    </div>
                    <div class="mod-text">
                      <h2 class="log_modal_head" id="exampleModalLabel">Account created</h2>
                      <p class="log_modal_p">Welcome, John. Your invoices and reports will all live in your account.</p>
                    </div>
                    <a class="btn log_btn w-100" href="index.php">Go to your account
                      <span class="mod-span">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M0 5.53027H13M8 10.5303L13 5.53027L8 0.530273" stroke-width="2.0" stroke="#14130F"/>
                        </svg>
                      </span>
                    </a>

                </div>
            </div>
        </div>
</main>
<?php include 'includes/footer.php'; ?>