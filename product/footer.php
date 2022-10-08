  <!-- Footer -->
  <footer class="bg3 p-t-75 p-b-32">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Categories</h4>

                  <ul>
                      <li class="p-b-10">
                          <a href="product.php" class="stext-107 cl7 hov-cl1 trans-04"> Women </a>
                      </li>

                      <li class="p-b-10">
                          <a href="product.php" class="stext-107 cl7 hov-cl1 trans-04"> Men </a>
                      </li>

                      <li class="p-b-10">
                          <a href="product.php" class="stext-107 cl7 hov-cl1 trans-04"> Shoes </a>
                      </li>

                      <li class="p-b-10">
                          <a href="product.php" class="stext-107 cl7 hov-cl1 trans-04"> Watches </a>
                      </li>
                  </ul>
              </div>

              <div class="col-sm-6 col-lg-3 p-b-50">

              </div>

              <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">GET IN TOUCH</h4>

                  <p class="stext-107 cl7 size-201">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam,
                      et.
                  </p>

                  <div class="p-t-27">
                      <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                          <i class="fa fa-facebook"></i>
                      </a>

                      <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </div>
              </div>

              <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Newsletter</h4>

                  <form>
                      <div class="wrap-input1 w-full p-b-4">
                          <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com" />
                          <div class="focus-input1 trans-04"></div>
                      </div>

                      <div class="p-t-18">
                          <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                              Subscribe
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </footer>
  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="zmdi zmdi-chevron-up"></i>
    </span>
  </div>

  <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="../assets/vendor/animsition/js/animsition.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/popper.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/select2/select2.min.js"></script>
  <script>
      $(".js-select2").each(function() {
          $(this).select2({
              minimumResultsForSearch: 20,
              dropdownParent: $(this).next(".dropDownSelect2"),
          });
      });
  </script>
  <script src="../assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="../assets/vendor/slick/slick.min.js"></script>
  <script src="../assets/js/slick-custom.js"></script>
  <script src="../assets/vendor/parallax100/parallax100.js"></script>
  <script>
      $(".parallax100").parallax100();
  </script>
  <script src="../assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
      $(".gallery-lb").each(function() {
          // the containers for all your galleries
          $(this).magnificPopup({
              delegate: "a", // the selector for gallery item
              type: "image",
              gallery: {
                  enabled: true,
              },
              mainClass: "mfp-fade",
          });
      });
  </script>
  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
  <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
      $(".js-pscroll").each(function() {
          $(this).css("position", "relative");
          $(this).css("overflow", "hidden");
          var ps = new PerfectScrollbar(this, {
              wheelSpeed: 1,
              scrollingThreshold: 1000,
              wheelPropagation: false,
          });

          $(window).on("resize", function() {
              ps.update();
          });
      });
  </script>
  <script src="../assets/js/main.js"></script>