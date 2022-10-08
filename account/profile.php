<?php
require_once('../process/process.php');

if (empty($_SESSION['email'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/fonts/linearicons-v1.0.0/icon-font.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
</head>

<body class="animsition">
  <!-- Header -->
  <header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop p-l-45">
          <!-- Logo desktop -->
          <a href="#" class="logo">
            <img src="../assets/images/icons/logo-01.png" alt="IMG-LOGO" />
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">
              <li>
                <a href="../index.php">Home</a>
              </li>

              <li>
                <a href="../product.php">Shop</a>
              </li>

              <li>
                <a href="../cart.php">Cart</a>
              </li>

              <li>
                <a href="../about.php">About</a>
              </li>

              <li>
                <a href="../contact.php">Contact</a>
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
        <a href="../index.php"><img src="../assets/images/icons/logo-01.png" alt="IMG-LOGO" /></a>
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
          <a href="../index.php">Home</a>
        </li>

        <li>
          <a href="../product.php">Shop</a>
        </li>

        <li>
          <a href="../cart.php">Cart</a>
        </li>

        <li>
          <a href="../about.php">About</a>
        </li>

        <li>
          <a href="../contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </header>

  <!-- Sidebar -->
  <aside class="wrap-sidebar js-sidebar">
    <div class="s-full js-hide-sidebar"></div>

    <div class="sidebar flex-col-l p-t-22 p-b-25">
      <div class="flex-r w-full p-b-30 p-r-27">
        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
          <i class="zmdi zmdi-close"></i>
        </div>
      </div>

      <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
        <ul class="sidebar-link w-full">
          <li class="p-b-13">
            <a href="../index.php" class="stext-102 cl2 hov-cl1 trans-04">
              Home
            </a>
          </li>

          <li class="p-b-13">
            <a href="../account/profile.php" class="stext-102 cl2 hov-cl1 trans-04">
              My Account
            </a>
          </li>

          <li class="p-b-13">
            <a href="../pages/help-faqs.php" class="stext-102 cl2 hov-cl1 trans-04">
              Help & FAQs
            </a>
          </li>

          <li class="p-b-13">
            <a href="../process/logout.php" class="stext-102 cl2 hov-cl1 trans-04"> Logout </a>
          </li>
        </ul>

        <div class="sidebar-gallery w-full">
          <span class="mtext-101 cl5"> About Us </span>

          <p class="stext-108 cl6 p-t-27">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
            maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum
            gravida. Vestibulum tempus mi enim, in molestie sem fermentum
            quis.
          </p>
        </div>
      </div>
    </div>
  </aside>

  <!-- User Profile -->
  <div class="container">
    <div class="row g-5 d-flex justify-content-center">
      <div class="col-md-7 col-lg-8">
        <form id="pfForm" class="bg0 p-t-75 p-b-85 form" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
          <h4 class="mb-3  ltext-103">User Profile</h4>
          <?php
          if (count($errors) == 1) {
          ?>
            <div class="alert alert-danger text-center">
              <?php
              foreach ($errors as $showerror) {
                echo $showerror;
              }
              ?>
            </div>
          <?php
          } elseif (count($success) == 1) {
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
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="custName" class="form-label stext-101">Customer Name</label>
              <input type="text" class="form-control stext-103" id="custName" name="custName" placeholder="<?php echo $_SESSION['name']; ?>">
            </div>



            <div class="container">
              <label class="form-label stext-101">Security Questions</label>
              <div class="row">
                <div class="col-sm-6">
                  <label for="petsName" class="form-label stext-103">Pet's name</label>
                  <input type="text" class="form-control stext-103" id="petsName" name="petsName" placeholder="<?php echo $_SESSION['dog']; ?>">
                </div>

                <div class="col-sm-6">
                  <label for="teachersName" class="form-label stext-103">Teacher's name</label>
                  <input type="text" class="form-control stext-103" id="teachersName" name="teachersName" placeholder="<?php echo $_SESSION['teacher']; ?>">
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label stext-101">Email Address</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control stext-103" id="pfEmail" name="email" placeholder="<?php echo $_SESSION['email']; ?>">
              </div>
            </div>

            <div class="container">
              <label class="form-label stext-101">Change Password</label>
              <div class="row">
                <br>
                <div class="col-sm-6">
                  <input type="password" class="form-control stext-103" id="newpass" name="newpass" placeholder="New Password">
                </div>

                <div class="col-sm-6">
                  <input type="password" class="form-control stext-103" id="confirmpass" name="confirmpass" placeholder="Confirm Password">
                </div>
              </div>
            </div>

          </div>
          <hr class="my-4">
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name="update-user">
              Update Details
            </button>
            <br>
            <div class="divider"></div>
            <a class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04" href="order-history.php" style="text-decoration: none; color: #fff;">Order History</a>
          </div>
        </form>
      </div>
    </div>
  </div>

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

  <!--===============================================================================================-->
  <script src="../assets/js/validate.js"></script>
  <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="../assets/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="../assets/vendor/bootstrap/js/popper.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="../assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <!--===============================================================================================-->
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
  <!--===============================================================================================-->
  <script src="../assets/js/main.js"></script>
</body>

</html>