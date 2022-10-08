<?php
require_once('../process/process.php');
require_once('../process/getPayment.php');

if (empty($_SESSION['email'])) {
  header('Location: ../account/login.php');
} elseif (count($payment_data) === 0) {
  header('Location: ../cart.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php') ?>

<body class="animsition">

  <?php require_once('header.php') ?>

  <!-- Shoping Cart -->
  <form id="pymntForm" class="bg0 p-t-75 p-b-85" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
    <div class="container">
      <div class="row g-5 d-flex justify-content-center">
        <div class="col-md-7 col-lg-8">
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
            <div class="alert alert-danger">
              <?php
              foreach ($errors as $showerror) {
              ?>
                <li><?php echo $showerror; ?></li>
              <?php
              }
              ?>
            </div>
          <?php
          }
          ?>
          <h4 class="mb-3 ltext-103">Payment</h4>
          <div class="row my-3">
            <div class="col-lg-4 mb-lg-0 mb-3 form-check ">
              <div class="card p-3">
                <img src="../assets/images/icons/mastercard.png" alt="" style="width: 150px; height: auto;">
                <p class="mtext-101">●●●● ●●●● ●●●● 1234</p>
                <input id="MASTER" name="paymentMethod" type="radio" value="Master Card" class="form-check-input" checked>
                <label class="form-check-label stext-101" for="MASTER">Master Card</label>
              </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3 form-check">
              <div class="card p-3">
                <img src="../assets/images/icons/visa.png" alt="" style="width: 150px; height: auto;">
                <p class="mtext-101">●●●● ●●●● ●●●● 1234</p>
                <input id="VISA" name="paymentMethod" type="radio" value="Visa" class="form-check-input">
                <label class="form-check-label stext-101" for="VISA">Visa</label>

              </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3 form-check">
              <div class="card p-3">
                <img src="../assets/images/icons/americanexpress.png" alt="" style="width: 150px; height: auto;">
                <p class="mtext-101">●●●● ●●●● ●●●● 1234</p>
                <input id="AMEX" name="paymentMethod" type="radio" value="American Express" class="form-check-input">
                <label class="form-check-label stext-101" for="AMEX">American express</label>
              </div>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label stext-101">Name on card</label>
              <input type="text" class="form-control stext-102" id="cc_name" name="cc_name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="error">
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label stext-101">Credit card number</label>
              <input type="text" class="form-control stext-102" id="cc_number" name="cc_number" placeholder="1234 5678 9012 3456" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" required>
              <div class="error">
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label stext-101">Expiration</label>
              <input type="month" class="form-control stext-102" id="cc_expiration" name="cc_expiration" placeholder="MM/YYYY" required>
              <div class="error">
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label stext-101">CVV</label>
              <input type="number" class="form-control stext-102" id="cc_cvv" name="cc_cvv" placeholder="000" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" required>
              <div class="error">
              </div>
            </div>
          </div>
          <hr class="my-4">
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" type="submit" name="place-order">Place Order</button>
            <br>
            <div class="divider"></div>
            <div>
              <a class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04" href="checkout.php" style="text-decoration: none; color: #fff;">Go Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php require_once('footer.php') ?>

</body>

</html>