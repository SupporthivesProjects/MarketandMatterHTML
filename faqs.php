<?php include 'includes/header.php'; ?>
<style>
   h1, p, dd, h2, h3, h4, h5, h6{
      margin-bottom: 0px;
   }
   .lead.text-muted{
      color: var(--paper-muted) !important;
  }
</style>
<main>
  <section class="hero hero--plain faq_s1">
    <div class="container hero__inner">
      <div class="hero__copy hero__copy--center">
        <p class="eyebrow">FAQ</p>
        <h1 class="display"><span class="display__muted">Frequently asked</span> Questions</h1>
        <p class="lead text-muted">How services and terms work, how you pay, and what you get in your account once the work starts.</p>
      </div>
    </div>
  </section>

  <section class="section faq-page faq_s2">
    <div class="container">
      <div class="faq-layout">
        <div class="faq-topic" data-reveal>
          <h2 class="heading-s">Services</h2>
          <div class="faq-list" data-accordion="single">
            <div class="faq-row is-open" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="true">What is a term?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">How long your service runs: 1, 3, 6 or 12 months. Longer terms cost less a month. You pay the term total once, at checkout. Web design and development is one off, so it has no term.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Can I buy more than one service?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">Yes. Put as many services as you like in the same order, each with its own tier and term.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Can I change tier during a term?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">The tier stays the same until the term ends. When it does, order the next term on whichever tier suits you then.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">What if I need something not listed?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">Send us a message. If it fits, we quote it as a fixed price before any work starts.</p></div></div></div>
          </div>
        </div>
        <div class="faq-topic" data-reveal>
          <h2 class="heading-s">Paying</h2>
          <div class="faq-list" data-accordion="single">
            <div class="faq-row is-open" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="true">When do I pay?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">Once, at checkout, for the whole term. There is no monthly bill.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Which currencies can I pay in?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">GBP, USD or EUR. Switch currency in the menu and every price on the site follows.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Which cards do you accept?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">Visa and Mastercard, on our payment provider’s secure page.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Can I get an invoice?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">Yes. Every order comes with an invoice by email, and every invoice stays in your account.</p></div></div></div>
          </div>
        </div>
        <div class="faq-topic" data-reveal>
          <h2 class="heading-s">Your account</h2>
          <div class="faq-list" data-accordion="single">
            <div class="faq-row is-open" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="true">How do I see what was done?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">In your account. Each month a one page report shows what was done, what moved and what comes next.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">What happens when a term ends?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">The service stops on its end date. Nothing renews by itself. Buy another term whenever you are ready.</p></div></div></div>
            <div class="faq-row" data-accordion-item><button class="faq-row__button" type="button" data-accordion-button aria-expanded="false">Who owns the work?<i class="plus" aria-hidden="true"></i></button><div class="faq-row__panel"><div><p class="faq-row__answer">You do. The pages, ads, accounts and content we make belong to your business, during the term and after it.</p></div></div></div>
          </div>
        </div>
        <div class="faq-contact" data-reveal>
          <p class="title-l mobile_none">A question we have not answered?</p>
          <p class="title-l desktop_none">A question we<br>have not answered?</p>
          <a class="button sweep" href="contact.html">Contact us<span class="button__icon"><svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true"><path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"/></svg></span></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>