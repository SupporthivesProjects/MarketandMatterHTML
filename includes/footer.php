

<footer class="footer-bg">
      <div class="container p-0">
         <div class="row">
           <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="footer-logo-left">
              <div class="footer-logo">
                <a href="#">
                  <span class="logoen">Market & Matter</span>
                  <div class="divider"></div>
                  <span class="logourd">ماركت آند ماتر</span>
                </a>
                <p>Digital marketing, sold as fixed term services.</p>
              </div>
            </div>
           </div>
           <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="footer-right">
              <div class="footer-menu">
                 <div class="footer-menu-link">
                    <h6>Services</h6>
                    <ul>
                      <li>
                        <a href="#">SEO</a>
                      </li>
                      <li>
                        <a href="#">Paid search</a>
                      </li>
                      <li>
                        <a href="#">Social media</a>
                      </li>
                      <li>
                         <a href="#">Email marketing</a>
                      </li>
                      <li>
                        <a href="#">Web design and development</a>
                      </li>
                      <li>
                        <a href="#">Reputation</a>
                      </li>
                    </ul>
                 </div>
                 <div class="footer-link-two">
                  <div class="footer-menu-link">
                    <h6>Company</h6>
                    <ul>
                      <li>
                        <a href="#">About</a>
                      </li>
                       <li>
                        <a href="#">How it works</a>
                      </li>
                       <li>                        
                         <a href="#">FAQ</a>
                      </li>
                       <li>
                        <a href="#">Contact</a>
                      </li>
                    </ul>
                 </div>
                  <div class="footer-menu-link">
                    <h6>Account</h6>
                    <ul>
                      <li>
                        <a href="#">Log in</a>
                      </li>
                      <li>
                        <a href="#">Sign up</a>
                      </li>
                      <li>
                        <a href="#">Cart</a>
                      </li>
                    </ul>
                 </div>
                 </div>
              </div>
            </div>
           </div>
         </div>
      </div>
      <div class="container container-one p-0">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
               <div class="footer-bottom-link">
                <p>© 2026 Market & Matter. All rights reserved.</p>
                <ul>
                  <li>
                    <a href="#">Terms and conditions</a>
                  </li>
                  <li>
                    <a href="#">Privacy policy</a>
                  </li>
                </ul>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
               <div class="footer-bottom-link-two">
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        GBP
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">GBP</a></li>
                        <li><a class="dropdown-item" href="#">GBP</a></li>
                        <li><a class="dropdown-item" href="#">GBP</a></li>
                      </ul>
                  </div>
                 <div class="foooter-img">
                    <p>We accept</p>
                    <img src="assest/img/card-logo.svg" alt="" class="img-fluid" srcset="assest/img/card-logo.svg">
                    <img src="assest/img/card-logo1.svg" alt="" class="img-fluid" srcset="assest/img/card-logo1.svg">
                 </div>
               </div>
            </div>
          </div>
      </div>
</footer>
</div>
    <script src="assest/uiframe/js/jquery.min.js"></script>
    <script src="assest/uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="assest/uiframe/js/popper.min.js"></script>
    <script src="assest/uiframe/js/slick.js"></script>
    <script src="assest/uiframe/js/owl.carousel.js"></script>
    <script src="assest/uiframe/js/swiper-bundle.min.js"></script>
    <script src="assest/uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="assest/uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <script src="data/catalogue.js"></script>
    <!-- <script src="assest/js/partials.js"></script> -->
    <!-- <script src="assest/js/store.js"></script> -->
    <script src="assest/js/site.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/logo.svg") {
                  logo.attr("src", "./img/logo.svg");
              } else {
                  logo.attr("src", "./img/logo.svg");
              }
          });
      });
    </script>
    <script>
      $('#filterid').on('click', function(event) {
          $('#filterBox').slideToggle(300);
          $('#filterBox').toggleClass('open');
          event.preventDefault();
      });
      $(document).ready(function(){
        $("#filter-close").click(function(){
          $("#filterBox").slideUp("slow");
        });
      });
      document.querySelectorAll(".ul-filter-menu h3").forEach(header => {
        header.addEventListener("click", () => {
          const body = header.nextElementSibling;

          body.classList.toggle("open");     // toggle body
          header.classList.toggle("active"); // toggle class on h3
        });
      });
    </script>
    <script>
      function selectCurrency(currency, flagSrc) {
          const btn = document.getElementById("currencyBtn");
          const flag = document.getElementById("currencyFlag");
          btn.innerHTML = `${currency} <img id="currencyFlag" src="${flagSrc}" class="img-fluid">`;
      }
    </script>
    <script>
      window.addEventListener('scroll', function() {
          var content = document.querySelector('header');
          var scrollPosition = window.scrollY;
          if (scrollPosition > 10) {
              content.classList.add("header-scroll")
          } else {
              content.classList.remove("header-scroll")
          }
      });
    </script>
    <script>
      AOS.init();
    </script>
</body>
</html>
  