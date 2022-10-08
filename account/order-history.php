<?php
require_once('../process/process.php');
require_once('../process/getHistory.php');

if (empty($_SESSION['email'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order History</title>
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

    <div class="container p-t-75 p-b-85">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <h4 class="mb-3 ltext-103">Order History</h4>
                    <div class="wrap-table-shopping-cart">

                        <table class="table-shopping-cart">

                            <tr class="table_head text-center">
                                <th class="column-2">Order Number</th>
                                <th class="column-2">Date Ordered</th>
                                <th class="column-2">Total</th>
                                <th class="column-2">Payment Method</th>
                            </tr>

                            <?php
                            if (count($history_data) >= 1) {
                                foreach ($history_data as $history) { ?>
                                    <tr class="table_row text-center">
                                        <td class="column-2"><?php echo $history['order_num'] ?></td>
                                        <td class="column-2"><?php echo $history['order_time'] ?></td>
                                        <td class="column-2"><?php echo $history['prod_total'] ?>.00</td>
                                        <td class="column-2"><?php echo $history['cc_type'] ?></td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr class="table_row text-center">
                                    <td class="mtext-109 cl2 p-all-30" colspan="4">NO DATA</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" href="profile.php" style="text-decoration: none; color: #fff;">My Account</a>
                        <br>
                        <div class="divider"></div>
                        <a class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04" href="../product.php" style="text-decoration: none; color: #fff;">See Products</a>
                    </div>
                </div>
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