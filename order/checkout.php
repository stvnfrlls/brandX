<?php
require_once('../process/process.php');
require_once('../process/getCheckout.php');

if (empty($_SESSION['email'])) {
  header('Location: ../account/login.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php') ?>

<body class="animsition">

  <?php require_once('header.php') ?>

  <!-- Shoping Cart -->
  <form id="chkoutForm" class="bg0 p-t-75 p-b-85" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
    <div class="container">
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="ltext-103">Your cart</span>
          </h4>
          <ul class="list-group mb-3">
            <?php
            if (count($checkout_data) >= 1) {
              $price = "";
              foreach ($checkout_data as $chkout_det) { ?>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0 stext-102"><?php echo $chkout_det['prod_name'] ?></h6>
                  </div>
                  <?php
                  $price = $chkout_det['prod_qty'] * $chkout_det['prod_price'];
                  ?>
                  <span class="text-muted stext-101">$ <?php echo $price ?>.00</span>
                </li>
              <?php
              }
              ?>
              <li class="list-group-item d-flex justify-content-between">
                <span class="stext-101">Total (USD)</span>
                <strong class="stext-101">$ <?php echo $total_sum ?>.00</strong>
              </li>
          </ul>
        <?php
            }
        ?>
        </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3 ltext-103">Billing & Shipping Address</h4>
          <div class="row g-2">
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
            } elseif (count($errors) > 1) {
            ?>
              <div class="alert alert-danger text-center">
                <?php
                foreach ($errors as $showerror) {
                ?>
                  <ul>
                    <li><?php echo $showerror; ?></li>
                  </ul>

                <?php
                }
                ?>
              </div>
            <?php
            }
            ?>

            <div class="col-sm-12 form-floating">
              <input type="text" class="form-control stext-103" id="chkCustname" name="chkCustname" placeholder="Customer Name" value="<?php echo $cust_data['cust_name'] ?>" readonly>
              <label for="firstName" class="form-label stext-102">Customer Name</label>
              <div class="error">
              </div>
            </div>

            <div class="col-sm-6 form-floating">
              <input type="text" class="form-control stext-103" id="chkEmail" name="chkEmail" placeholder="Email" value="<?php echo $cust_data['cust_email'] ?>" readonly>
              <label for="Email" class="form-label stext-102">Email</label>
              <div class="error">
              </div>
            </div>

            <div class="col-sm-6 form-floating">
              <input type="number" class="form-control stext-103" id="chkPhone" name="chkPhone" placeholder="Phone" required>
              <label for="Phone" class="form-label stext-102">Phone</label>
              <div class="error">
              </div>
            </div>

            <div class="col-12 form-floating">
              <input type="text" class="form-control stext-103" id="chkAddress" name="chkAddress" placeholder="1234 Main St" required>
              <label for="address" class="form-label stext-102">Address</label>
              <div class="error">
              </div>
            </div>

            <div class="col-md-5">
              <label for="chkCity" class="form-label stext-101">City</label>
              <select class="form-select stext-102" id="chkCity" name="chkCity" required>
                <option value="">-- Please Select --</option>
              </select>
              <div class="error">
              </div>
            </div>

            <div class="col-md-5">
              <label for="chkProv" class="form-label stext-101">Province</label>
              <select class="form-select stext-102" id="chkProv" name="chkProv" required>
                <option value="">-- Please Select --</option>
                <option value="laguna">Laguna</option>
                <option value="cavite">Cavite</option>
                <option value="manila">Manila</option>
              </select>
              <div class="error">
              </div>
            </div>

            <div class="col-md-2">
              <label for="chkZip" class="form-label stext-101">Zip</label>
              <input type="number" class="form-control stext-102" id="chkZip" name="chkZip" required>
              <div class="error">
              </div>
            </div>
          </div>

          <hr class="my-4">
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name="proceed_payment" type="submit">Continue to Payment</button>
            <br>
            <div class="divider"></div>
            <div>
              <a class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04" href="../cart.php" style="text-decoration: none; color: #fff;">Back to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php require_once('footer.php') ?>
</body>

</html>