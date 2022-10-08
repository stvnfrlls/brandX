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

              <li class="active-menu">
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

  <!-- Product -->
  <div class="bg0 m-t-23 p-b-140">
    <div class="container">
      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
            All
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
            Women
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
            Men
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
            Bag
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
            Shoes
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
            Watches
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".cap">
            Caps
          </button>
        </div>
      </div>

      <div class="row isotope-grid">
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-01.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/ladies-style-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Ladies Style 1
                </a>

                <span class="stext-105 cl3"> $16.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-02.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/ladies-style-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Ladies Style 2
                </a>

                <span class="stext-105 cl3"> $16.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-03.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/ladies-style-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Ladies Style 3
                </a>

                <span class="stext-105 cl3"> $16.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-04.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/ladies-style-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Ladies Style 4
                </a>

                <span class="stext-105 cl3"> $16.00 </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-05.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/men-style-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Men Style 1
                </a>

                <span class="stext-105 cl3"> $25.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-06.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/men-style-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Men Style 2
                </a>

                <span class="stext-105 cl3"> $25.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-07.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/men-style-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Men Style 3
                </a>

                <span class="stext-105 cl3"> $25.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-08.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/men-style-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Men Style 4
                </a>

                <span class="stext-105 cl3"> $25.00 </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-09.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/watch-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Watch 1
                </a>

                <span class="stext-105 cl3"> $93.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-10.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/watch-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Watch 2
                </a>

                <span class="stext-105 cl3"> $93.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-11.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/watch-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Watch 3
                </a>

                <span class="stext-105 cl3"> $93.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-12.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/watch-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  Watch 4
                </a>

                <span class="stext-105 cl3"> $93.00 </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-13.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/shoe-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  shoe 1
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-14.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/shoe-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  shoe 2
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-15.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/shoe-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  shoe 3
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-16.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/shoe-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  shoe 4
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cap">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-17.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/cap-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  cap 1
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cap">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-18.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/cap-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  cap 2
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cap">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-19.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/cap-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  cap 3
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cap">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-20.jpg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/cap-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  cap 4
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item bag">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-21.jpeg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/bag-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  bag 1
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item bag">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-22.jpeg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/bag-2.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  bag 2
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item bag">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-23.jpeg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/bag-3.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  bag 3
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item bag">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="assets/images/product-23.jpeg" alt="IMG-PRODUCT" />
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l">
                <a href="product/bag-4.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  bag 4
                </a>

                <span class="stext-105 cl3"> $75.00 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php include('layout/footer.php') ?>
</body>

</html>