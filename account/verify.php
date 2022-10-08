<?php
require_once('../process/process.php');
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forget Password</title>
  <link rel="stylesheet" href="../assets/css/account.css" />

  <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body class="text-center">
  <div class="detail-form">
    <form id="vfForm" class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="text">
        <h1 class="h3 mb-3 fw-normal ltext-101">Enter your <br> Account Details</h1>
      </div>
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
      <div class="form-floating">
        <input type="email" class="form-control stext-103" name="emailbox" id="vfEmail" placeholder="email@domain.com" required />
        <label for="emailbox" class="stext-102">Email Address</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control stext-103" name="sec1" id="vfsec1" placeholder="Dog" required />
        <label for="sec1" class="stext-102">Pets Name</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control stext-103" name="sec2" id="vfsec2" placeholder="Teacher" required />
        <label for="sec2" class="stext-102">Teachers Name</label>
      </div>

      <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-lr-15 trans-04" id="verify-button" name="verify-button" type="submit">
        Verify
      </button>
      <div class="divider">
      </div>
    </form>
    <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04">
      <a href="login.php" style="text-decoration: none; color: #fff;">Back</a>
    </button>
  </div>
</body>

<script src="../assets/js/validate.js"></script>
<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>