<?php include 'includes/header.php'; ?>

<main>
  <section class="hero hero--commerce">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400" fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner">
      <div class="hero__copy">
        <p class="hero__label-row eyebrow eyebrow--muted">Step 1 of 3</p>
        <h1 class="display">Your cart</h1>
        <p class="lead text-muted">Change a term or remove a service before you check out.</p>
      </div>
      <ol class="steps">
        <li class="steps__item steps__item--active"><span class="steps__index">01</span>Cart</li>
        <li class="steps__item"><span class="steps__index">02</span>Details</li>
        <li class="steps__item"><span class="steps__index">03</span>Payment</li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="container commerce">
      <div class="cart-lines">
        <h2 class="title-l cart-lines__heading">In your cart</h2>
        <div data-cart-lines=""><div class="cart-line">
        <div class="cart-line__info"><p class="cart-line__name">SEO</p><p class="cart-line__tier">Silver tier</p></div>
        <div class="cart-line__term"><span class="cart-line__label">Term</span><div class="segmented" role="group" aria-label="Term for SEO"><button type="button" class="segmented__option" data-line="mvhseyq75ofa" data-line-term="1">1 month</button><button type="button" class="segmented__option is-active" data-line="mvhseyq75ofa" data-line-term="3">3 months</button><button type="button" class="segmented__option" data-line="mvhseyq75ofa" data-line-term="6">6 months</button><button type="button" class="segmented__option" data-line="mvhseyq75ofa" data-line-term="12">12 months</button></div></div>
        <div class="cart-line__price"><p class="cart-line__total">€1,045</p><p class="cart-line__monthly">€348 a month</p></div>
        <button type="button" class="cart-line__remove" data-remove="mvhseyq75ofa">Remove</button>
      </div><div class="cart-line">
        <div class="cart-line__info"><p class="cart-line__name">SEO</p><p class="cart-line__tier">Gold tier</p></div>
        <div class="cart-line__term"><span class="cart-line__label">Term</span><div class="segmented" role="group" aria-label="Term for SEO"><button type="button" class="segmented__option" data-line="mvhsf02rdxsi" data-line-term="1">1 month</button><button type="button" class="segmented__option" data-line="mvhsf02rdxsi" data-line-term="3">3 months</button><button type="button" class="segmented__option" data-line="mvhsf02rdxsi" data-line-term="6">6 months</button><button type="button" class="segmented__option is-active" data-line="mvhsf02rdxsi" data-line-term="12">12 months</button></div></div>
        <div class="cart-line__price"><p class="cart-line__total">€7,144</p><p class="cart-line__monthly">€595 a month</p></div>
        <button type="button" class="cart-line__remove" data-remove="mvhsf02rdxsi">Remove</button>
      </div><div class="cart-line">
        <div class="cart-line__info"><p class="cart-line__name">SEO</p><p class="cart-line__tier">Bronze tier</p></div>
        <div class="cart-line__term"><span class="cart-line__label">Term</span><div class="segmented" role="group" aria-label="Term for SEO"><button type="button" class="segmented__option" data-line="mvhsf0vh52i3" data-line-term="1">1 month</button><button type="button" class="segmented__option" data-line="mvhsf0vh52i3" data-line-term="3">3 months</button><button type="button" class="segmented__option is-active" data-line="mvhsf0vh52i3" data-line-term="6">6 months</button><button type="button" class="segmented__option" data-line="mvhsf0vh52i3" data-line-term="12">12 months</button></div></div>
        <div class="cart-line__price"><p class="cart-line__total">€590</p><p class="cart-line__monthly">€98 a month</p></div>
        <button type="button" class="cart-line__remove" data-remove="mvhsf0vh52i3">Remove</button>
      </div></div>
        <div class="cart-empty" data-cart-empty="" hidden="">
          <p class="lead">Your cart is empty.</p>
          <p class="text-muted">Pick a service, a tier and a term in Pricing and it lands here.</p>
          <a class="button sweep" href="services.html">Browse services<span class="button__icon"><svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true"><path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path></svg></span></a>
        </div>
      </div>
      <aside class="panel panel--cart" data-cart-summary="">
        <div class="panel__total">
          <div class="stack stack--xs"><h2 class="heading-m">Total at checkout</h2><p class="panel__note">Discount codes go in at checkout</p></div>
          <p class="panel__value" data-cart-total="">€8,779</p>
        </div>
        <a class="button button--block sweep" href="checkout.html" data-checkout-link="">Continue to checkout<span class="button__icon"><svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true"><path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path></svg></span></a>
        <div class="accept"><span class="accept__label">We accept</span><div class="card-logos"><svg viewBox="0 0 56 36" fill="none" aria-label="Visa" role="img"><rect width="56" height="36" rx="8" fill="#fff"></rect><path d="M23.9 12.7L19.5 23.3H16.6L14.4 14.8C14.2 14.3 14.1 14.1 13.7 13.9 13 13.6 12 13.2 11 13L11.1 12.7H15.7C16 12.7 16.3 12.8 16.6 13 16.8 13.2 17 13.5 17 13.8L18.2 19.9 21 12.7H23.9ZM35.3 19.9C35.3 17.1 31.4 16.9 31.4 15.6 31.4 15.3 31.8 14.9 32.6 14.8 33.5 14.7 34.5 14.8 35.3 15.2L35.8 13C35 12.7 34.1 12.5 33.2 12.5 30.5 12.5 28.6 14 28.6 16 28.6 17.5 29.9 18.4 31 18.9 32.1 19.4 32.4 19.8 32.4 20.2 32.4 20.9 31.6 21.3 30.8 21.3 29.4 21.3 28.6 20.9 27.9 20.6L27.5 22.9C28.1 23.2 29.3 23.5 30.5 23.5 33.4 23.5 35.3 22.1 35.3 19.9ZM42.5 23.3H45L42.8 12.7H40.4C40.2 12.7 39.9 12.8 39.7 12.9 39.5 13.1 39.4 13.3 39.3 13.5L35.1 23.3H38L38.6 21.7H42.1L42.5 23.3ZM39.4 19.6L40.8 15.6 41.7 19.6H39.4ZM27.8 12.7L25.6 23.3H22.8L25.1 12.7H27.8Z" fill="#1A1F71"></path></svg><svg viewBox="0 0 56 36" fill="none" aria-label="Mastercard" role="img"><rect width="56" height="36" rx="8" fill="#fff"></rect><circle cx="21.5" cy="18" r="10.5" fill="#EB001B"></circle><circle cx="34.5" cy="18" r="10.5" fill="#F79E1B"></circle><path d="M28 9.8C30.4 11.7 32 14.7 32 18S30.4 24.3 28 26.2C25.6 24.3 24 21.3 24 18S25.6 11.7 28 9.8Z" fill="#FF5F00"></path></svg></div></div>
      </aside>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>