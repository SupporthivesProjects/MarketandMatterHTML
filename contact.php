<?php include 'includes/header.php'; ?>
<style>
   h1, p, dd, h2, h3, h4, h5, h6{
      margin-bottom: 0px
   }
   .contact_container .form{
      gap: 32px;
   }
   .lead.text-muted{
      color: var(--paper-muted) !important;
   }
</style>
<main>
   <section class="hero hero--image contact_s1">
      <img class="hero__media" src="assest/img/dubai-skyline.jpg" alt="" width="2400" height="1600" fetchpriority="high">
      <div class="hero__overlay"></div>
      <div class="container hero__inner hero__row contact_container">
         <div class="hero__copy hero__copy--narrow">
            <p class="eyebrow">Contact</p>
            <h1 class="display">
               <span class="display__muted">Ask us anything</span> about a service
            </h1>
            <p class="lead text-muted">A question about a service, an order you have placed or work we do not list. Write to us below.</p>
         </div>
         <dl class="contact-details">
            <div class="contact-details__item">
               <dt class="contact-details__label">Email</dt>
               <dd>
                  <a href="mailto:hello@marketandmatter.com">hello@marketandmatter.com</a>
               </dd>
            </div>
            <div class="contact-details__item">
               <dt class="contact-details__label">Office</dt>
               <dd>Office 1204, Bay Square, Business Bay, Dubai</dd>
            </div>
            <div class="contact-details__item">
               <dt class="contact-details__label">Replies</dt>
               <dd>By email, to the address you give us</dd>
            </div>
         </dl>
      </div>
   </section>
   <section class="section contact-section">
      <div class="container contact contact_container">
         <div class="contact__photo" data-reveal>
            <img src="assest/img/reading-laptop-cafe.jpg" alt="A woman reading on a laptop in a cafe" decoding="async" width="900" height="1350">
         </div>
         <form class="form" data-form="message" novalidate data-reveal>
            <h2 class="heading-m">Send us a message</h2>
            <div class="form__row">
               <div class="field">
                  <label class="field__label" for="f-name">Full name</label>
                  <div class="field__control">
                     <input class="input" id="f-name" name="name" type="text" placeholder="John Smith" required autocomplete="name">
                  </div>
               </div>
               <div class="field">
                  <label class="field__label" for="f-email">Email address</label>
                  <div class="field__control">
                     <input class="input" id="f-email" name="email" type="email" placeholder="john@example.com" required autocomplete="email">
                  </div>
               </div>
            </div>
            <div class="form__row">
               <div class="field">
                  <label class="field__label" for="f-phone">Phone (optional)</label>
                  <div class="field__control">
                     <input class="input" id="f-phone" name="phone" type="tel" placeholder="+44 20 7946 0000" autocomplete="tel">
                  </div>
               </div>
               <div class="field">
                  <label class="field__label" for="f-service">Service</label>
                  <div class="field__control">
                     <select class="input" id="f-service" name="service" required>
                        <option value="">Choose a service</option>
                        <option>SEO</option>
                        <option>Paid search</option>
                        <option>Social media</option>
                        <option>Email marketing</option>
                        <option>Web design and development</option>
                        <option>Reputation</option>
                        <option>Something else</option>
                     </select>
                     <svg class="icon icon--chevron" viewBox="0 0 12 8" fill="none" aria-hidden="true">
                        <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" />
                     </svg>
                  </div>
               </div>
            </div>
            <div class="field">
               <label class="field__label" for="f-message">Message</label>
               <div class="field__control">
                  <textarea class="input" id="f-message" name="message" placeholder="Tell us about your business and what you need" required></textarea>
               </div>
            </div>
            <label class="consent">
               <input type="checkbox" name="consent" required checked>
               <span>I agree to the <a href="terms.html">Terms and conditions</a> and <a href="privacy.html">Privacy policy</a>. </span>
            </label>
            <div class="submit-row">
               <button type="button" class="captcha" data-captcha role="checkbox" aria-checked="false">
                  <span class="captcha__box"></span>
                  <span>I'm not a robot</span>
                  <span class="captcha__badge">
                     <span>reCAPTCHA</span>
                     <span>Privacy and Terms</span>
                  </span>
               </button>
               <button class="button button--wide-mobile sweep" type="submit">Send message <span class="button__icon">
                     <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                        <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5" />
                     </svg>
                  </span>
               </button>
            </div>
         </form>
      </div>
   </section>
   <section class="section section--mist contact_s3">
      <div class="container before contact_container">
         <div class="stack">
            <p class="index-label" data-reveal>
               <span class="index-label__index">01</span>Before you write
            </p>
            <h2 class="heading-l" data-reveal>The answer may <br>already be here </h2>
         </div>
         <div class="grid-3">
            <div class="rule-col" data-reveal>
               <h3 class="title-l">FAQ</h3>
               <p class="text-muted">How terms, payment and reports work.</p>
               <a class="link-arrow" href="faq.html">Read the FAQ <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                     <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5" />
                  </svg>
               </a>
            </div>
            <div class="rule-col" data-reveal>
               <h3 class="title-l">How it works</h3>
               <p class="text-muted">From your order to your first report.</p>
               <a class="link-arrow" href="how-it-works.html">See how it works <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                     <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5" />
                  </svg>
               </a>
            </div>
            <div class="rule-col" data-reveal>
               <h3 class="title-l">Services</h3>
               <p class="text-muted">Every service with its Bronze price.</p>
               <a class="link-arrow" href="services.html">Browse services <svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                     <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5" />
                  </svg>
               </a>
            </div>
         </div>
      </div>
   </section>
</main>
<?php include 'includes/footer.php'; ?>