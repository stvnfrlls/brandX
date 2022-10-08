<!DOCTYPE html>
<html lang="en">

<?php include('layout/head.php') ?>

<body class="animsition">
  <!-- Header -->
  <header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop p-l-45">
          <!-- Logo desktop -->
          <a href="index.php" class="logo">
            <img src="assets/images/icons/logo-01.png" alt="IMG-LOGO" />
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li>
                <a href="index.php">Home</a>
              </li>

              <li>
                <a href="product.php">Shop</a>
              </li>

              <li>
                <a href="cart.php">Cart</a>
              </li>

              <li class="active-menu">
                <a href="about.php">About</a>
              </li>

              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>

          <!-- Icon header -->
          <div class="wrap-icon-header flex-w flex-r-m h-full">
            <div class="flex-c-m h-full p-lr-19">
              <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                <i class="zmdi zmdi-menu"></i>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->
      <div class="logo-mobile">
        <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO" /></a>
      </div>

      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <ul class="main-menu-m">
        <li>
          <a href="index.php">Home</a>
        </li>

        <li>
          <a href="product.php">Shop</a>
        </li>

        <li>
          <a href="cart.php">Cart</a>
        </li>

        <li>
          <a href="about.php">About</a>
        </li>

        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </header>

  <?php include('layout/header.php') ?>

  <!-- Title page -->
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('assets/images/bg-01.jpg')">
    <h2 class="ltext-105 cl0 txt-center">About</h2>
  </section>

  <!-- Content page -->
  <section class="bg0 p-t-75 p-b-120">
    <div class="container">
      <div class="row p-b-148">
        <div class="col-md-7 col-lg-8">
          <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
            <h3 class="mtext-111 cl2 p-b-16">Our Story</h3>

            <p class="stext-113 cl6 p-b-26">
              Beginning in 1987 with a small store selling men’s t-shirts,
              BrandX has grown to include a ladies’ line, underwear, fragrances, house wares, snacks,
              and a wide array of other lifestyle products, with the distinction of being present in virtually every retail space
              in the Philippines, and with a worldwide network of stores and outlets, reaching as far as the United States, the Middle East, and China.
              There are a total of 678 stores nationwide.
              Spreading out its wings has been continuous owning to the viable franchise partners they choose – people who really understand business and are knowledgeable about the same industry.
              <br><br>“It was Francorp,” according to Mr. Chan, “who legitimized and gave credibility to the business concept of the BrandX franchise.
              Francorp & its team of franchise consultants also helped professionalize the franchising industry.”
            </p>

            <p class="stext-113 cl6 p-b-26">
              To boost BrandX growth, it pioneered in the use of celebrity endorsers, television and giant billboards to
              create awareness for a fashion brand that offers premium quality products at affordable prices.
            </p>

          </div>
        </div>

        <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
          <div class="how-bor1">
            <div class="hov-img0">
              <img src="assets/images/about-01.jpg" alt="IMG" />
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
          <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
            <h3 class="mtext-111 cl2 p-b-16">Our Mission</h3>

            <p class="stext-113 cl6 p-b-26">
              To be a recognized world brand among the best world brands
              When we create, we inspire.
              When we make, we innovate.
              When we lead, we serve.
            </p>

            <div class="bor16 p-l-29 p-b-9 m-t-22">
              <p class="stext-114 cl6 p-r-40 p-b-11">
                “The real test of an entrepreneur is how far he can go when the tides of business turn for the worse. It is in times like these when he should be unafraid. Be aggressive. Know your market's needs and serve them.”
              </p>

              <span class="stext-111 cl8"> - Ben Chan </span>
            </div>
          </div>
        </div>

        <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
          <div class="how-bor2">
            <div class="hov-img0">
              <img src="assets/images/about-02.jpg" alt="IMG" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('layout/footer.php') ?>
</body>

</html>