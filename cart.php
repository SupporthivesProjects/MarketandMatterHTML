<?php include 'includes/header.php'; ?>

<main>
  <section class="hero hero--commerce">
    <img class="hero__media" src="assest/img/carved-wood-pattern.jpg" alt="" width="1600" height="2400"
      fetchpriority="high">
    <div class="hero__overlay"></div>
    <div class="container hero__inner px-0">
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
    <div class="container commerce px-0">
      <div class="cart-lines">
        <h2 class="title-l cart-lines__heading">In your cart</h2>
        <div data-cart-lines="" class="data-cart-lines">
          <div class="cart-line">
            <div class="cart-line__info">
              <p class="cart-line__name">SEO</p>
              <p class="cart-line__tier">Silver tier</p>
            </div>
            <div class="cart-line__term"><span class="cart-line__label">Term</span>
              <div class="segmented" role="group" aria-label="Term for SEO"><button type="button"
                  class="segmented__option" data-line="mvhseyq75ofa" data-line-term="1">1 month</button><button
                  type="button" class="segmented__option is-active" data-line="mvhseyq75ofa" data-line-term="3">3
                  months</button><button type="button" class="segmented__option" data-line="mvhseyq75ofa"
                  data-line-term="6">6 months</button><button type="button" class="segmented__option"
                  data-line="mvhseyq75ofa" data-line-term="12">12 months</button></div>
            </div>
            <div class="cart-line__price">
              <p class="cart-line__total">€1,045</p>
              <p class="cart-line__monthly">€348 a month</p>
            </div>
            <button type="button" class="cart-line__remove" data-remove="mvhseyq75ofa">Remove</button>
          </div>
          <div class="cart-line">
            <div class="cart-line__info">
              <p class="cart-line__name">SEO</p>
              <p class="cart-line__tier">Gold tier</p>
            </div>
            <div class="cart-line__term"><span class="cart-line__label">Term</span>
              <div class="segmented" role="group" aria-label="Term for SEO"><button type="button"
                  class="segmented__option" data-line="mvhsf02rdxsi" data-line-term="1">1 month</button><button
                  type="button" class="segmented__option" data-line="mvhsf02rdxsi" data-line-term="3">3
                  months</button><button type="button" class="segmented__option" data-line="mvhsf02rdxsi"
                  data-line-term="6">6 months</button><button type="button" class="segmented__option is-active"
                  data-line="mvhsf02rdxsi" data-line-term="12">12 months</button></div>
            </div>
            <div class="cart-line__price">
              <p class="cart-line__total">€7,144</p>
              <p class="cart-line__monthly">€595 a month</p>
            </div>
            <button type="button" class="cart-line__remove" data-remove="mvhsf02rdxsi">Remove</button>
          </div>
          <div class="cart-line">
            <div class="cart-line__info">
              <p class="cart-line__name">SEO</p>
              <p class="cart-line__tier">Bronze tier</p>
            </div>
            <div class="cart-line__term"><span class="cart-line__label">Term</span>
              <div class="segmented" role="group" aria-label="Term for SEO"><button type="button"
                  class="segmented__option" data-line="mvhsf0vh52i3" data-line-term="1">1 month</button><button
                  type="button" class="segmented__option" data-line="mvhsf0vh52i3" data-line-term="3">3
                  months</button><button type="button" class="segmented__option is-active" data-line="mvhsf0vh52i3"
                  data-line-term="6">6 months</button><button type="button" class="segmented__option"
                  data-line="mvhsf0vh52i3" data-line-term="12">12 months</button></div>
            </div>
            <div class="cart-line__price">
              <p class="cart-line__total">€590</p>
              <p class="cart-line__monthly">€98 a month</p>
            </div>
            <button type="button" class="cart-line__remove" data-remove="mvhsf0vh52i3">Remove</button>
          </div>
        </div>
        <div class="cart-empty" data-cart-empty="" hidden="">
          <p class="lead">Your cart is empty.</p>
          <p class="text-muted">Pick a service, a tier and a term in Pricing and it lands here.</p>
          <a class="button sweep" href="services.html">Browse services<span class="button__icon"><svg
                class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
                <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
              </svg></span></a>
        </div>
      </div>
      <aside class="panel panel--cart" data-cart-summary="">
        <div class="panel__total">
          <div class="stack stack--xs">
            <h2 class="heading-m">Total Due</h2>
            <p class="panel__note">Discount codes go in at checkout</p>
          </div>
          <p class="panel__value" data-cart-total="">€8,779</p>
        </div>
        <a class="button button--block sweep" href="checkout.html" data-checkout-link="">Continue to checkout<span
            class="button__icon"><svg class="icon icon--arrow" viewBox="0 0 15 12" fill="none" aria-hidden="true">
              <path d="M0 5.53H13M8 10.53L13 5.53L8 .53" stroke="currentColor" stroke-width="1.5"></path>
            </svg></span></a>
        <div class="accept"><span class="accept__label">We accept</span>
          <div class="card-logos">
           <svg xmlns="http://www.w3.org/2000/svg" width="34" height="11" viewBox="0 0 34 11" fill="none">
  <path d="M12.9087 0.195501L8.4575 10.8148H5.55333L3.36317 2.33892C3.23 1.81758 3.11525 1.62633 2.71008 1.40675C2.04992 1.04833 0.959083 0.712584 0 0.502917L0.0651667 0.195501H4.74017C5.04567 0.195194 5.34121 0.304109 5.57346 0.502584C5.80571 0.701059 5.95935 0.976019 6.00667 1.27783L7.16408 7.42333L10.0229 0.195501H12.9087ZM24.2887 7.34825C24.3001 4.54467 20.4128 4.39025 20.4397 3.13792C20.4482 2.75683 20.8108 2.35167 21.6042 2.24825C22.5339 2.15995 23.4702 2.32441 24.3142 2.72425L24.7959 0.47175C23.9742 0.162839 23.1039 0.00308354 22.2261 0C19.5103 0 17.5993 1.445 17.5823 3.51192C17.5653 5.0405 18.9465 5.89192 19.9877 6.40192C21.0588 6.92183 21.4186 7.25617 21.4129 7.72083C21.4058 8.43483 20.5601 8.74792 19.7696 8.76067C18.3883 8.78192 17.5879 8.38808 16.9476 8.09058L16.4503 10.4168C17.0921 10.7114 18.2764 10.9693 19.5047 10.9806C22.3904 10.9806 24.2788 9.55542 24.2887 7.34825ZM31.4585 10.8148H34L31.7829 0.195501H29.4369C29.1863 0.193178 28.9407 0.266219 28.732 0.405151C28.5234 0.544083 28.3613 0.742498 28.2667 0.974668L24.1457 10.8148H27.03L27.6038 9.22817H31.1284L31.4585 10.8148ZM28.3942 7.05217L29.8392 3.06425L30.6722 7.05217H28.3942ZM16.8342 0.195501L14.5633 10.8148H11.815L14.0887 0.195501H16.8342Z" fill="#1A1F71"/>
</svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="21" viewBox="0 0 34 21" fill="none">
  <g clip-path="url(#clip0_12668_352)">
    <path d="M10.5 21C16.299 21 21 16.299 21 10.5C21 4.70101 16.299 0 10.5 0C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21Z" fill="#EB001B"/>
    <path d="M23.5 21C29.299 21 34 16.299 34 10.5C34 4.70101 29.299 0 23.5 0C17.701 0 13 4.70101 13 10.5C13 16.299 17.701 21 23.5 21Z" fill="#F79E1B"/>
    <path d="M17.0009 2.25C18.249 3.23263 19.2579 4.48564 19.9516 5.91467C20.6453 7.3437 21.0057 8.9115 21.0057 10.5C21.0057 12.0885 20.6453 13.6563 19.9516 15.0853C19.2579 16.5144 18.249 17.7674 17.0009 18.75C15.7528 17.7674 14.7439 16.5144 14.0502 15.0853C13.3565 13.6563 12.9961 12.0885 12.9961 10.5C12.9961 8.9115 13.3565 7.3437 14.0502 5.91467C14.7439 4.48564 15.7528 3.23263 17.0009 2.25Z" fill="#FF5F00"/>
  </g>
  <defs>
    <clipPath id="clip0_12668_352">
      <rect width="34" height="21" fill="white"/>
    </clipPath>
  </defs>
</svg>
          </div>
        </div>
      </aside>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>