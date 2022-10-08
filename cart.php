<?php
require_once('process/process.php');
require_once('process/getCart.php');

if (empty($_SESSION['email'])) {
  header('Location: account/login.php');
}

if (empty($_SESSION['email'])) {
  $link = "";
}

?>
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

              <li class="active-menu">
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

  <!-- Shoping Cart -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
        <div class="m-l-25 m-r--38 m-lr-0-xl">
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
          }
          ?>
          <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
              <tr class="table_head text-center">
                <th class="column-2">Product</th>
                <th class="column-2">Price</th>
                <th class="column-3">Quantity</th>
                <th class="column-2">Total</th>
                <th class="column-2">Update</th>
              </tr>
              <?php
              if ($get_cart_data->num_rows > 0) {
                while ($row = $get_cart_data->fetch_array()) {
              ?>
                  <form action="<?php $_SERVER["PHP_SELF"] ?>?action=update&id=<?php echo $row["prod_id"]; ?>" method="post">
                    <tr class="table_row text-center">
                      <td class="column-2">
                        <?php echo $row['prod_name'] ?>
                      </td>
                      <td class="column-2">
                        <input type="hidden" name="prod_price" value="<?php echo $row['prod_price'] ?>" readonly>
                        <?php echo $row['prod_price'] ?>
                      </td>
                      <td class="column-2">
                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                          <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-minus"></i>
                          </div>
                          <input class="mtext-104 cl3 txt-center num-product" type="number" name="prod_qty" value="<?php echo $row['prod_qty'] ?>" readonly />
                          <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-plus"></i>
                          </div>
                        </div>
                      </td>
                      <td class="column-2">
                        <?php echo $row['prod_total']; ?>
                      </td>
                      <td class="column-2">
                        <div class="flex-c-m stext-101 cl2 size-105 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                          <button type="submit" name="update_cart">Update Cart</button>
                        </div>
                      </td>
                  </form>
                <?php
                }
              } else {
                ?>
                <tr class="table_row text-center">
                  <td class="mtext-109 cl2 p-all-30" colspan="5">No Data</td>
                </tr>
              <?php
              }
              ?>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
          <h4 class="mtext-109 cl2 p-b-30">Cart Totals</h4>

          <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
              <span class="stext-110 cl2"> Subtotal: </span>
            </div>

            <div class="size-209">
              <span class="mtext-110 cl2"> $ <?php echo $sum ?>.00 </span>
            </div>
          </div>

          <div class="flex-w flex-t p-t-27 p-b-33">
            <div class="size-208">
              <span class="mtext-101 cl2"> Total: </span>
            </div>

            <div class="size-209 p-t-1">
              <span class="mtext-110 cl2"> $ <?php echo $sum ?>.00 </span>
            </div>
          </div>

          <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"><button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="proceed-checkout">
              Proceed to Checkout
            </button></form>
        </div>
      </div>
    </div>
  </div>

  <?php include('layout/footer.php') ?>
</body>

</html>