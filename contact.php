<?php require_once('process/process.php'); ?>
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

              <li>
                <a href="about.php">About</a>
              </li>

              <li class="active-menu">
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
    <h2 class="ltext-105 cl0 txt-center">Contact</h2>
  </section>

  <!-- Content page -->
  <section class="bg0 p-t-104 p-b-116">
    <div class="container">
      <div class="flex-w flex-tr">
        <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
          <form class="form" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <h4 class="mtext-105 cl2 txt-center p-b-30">Send Us A Message</h4>
            <?php
            if (count($success) == 1) {
            ?>
              <div class="alert alert-success text-center">
                <?php
                foreach ($success as $showsuccess) {
                  echo $showsuccess;
                }
                ?>
              </div>
            <?php
            }
            ?>
            <div class="bor8 m-b-20 how-pos4-parent">
              <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address" />
              <img class="how-pos4 pointer-none" src="assets/images/icons/icon-email.png" alt="ICON" />
            </div>

            <div class="bor8 m-b-30">
              <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
            </div>

            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="sendmsg">
              Submit
            </button>
          </form>
        </div>

        <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
          <div class="flex-w w-full p-b-42">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-map-marker"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Address </span>

              <p class="stext-115 cl6 size-213 p-t-18">
                Manila, Philippines
              </p>
            </div>
          </div>

          <div class="flex-w w-full p-b-42">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-phone-handset"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Lets Talk </span>

              <p class="stext-115 cl1 size-213 p-t-18">1234 567 8910</p>
            </div>
          </div>

          <div class="flex-w w-full">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-envelope"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Sale Support </span>

              <p class="stext-115 cl1 size-213 p-t-18">
                brandx@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('layout/footer.php') ?>
</body>

</html>