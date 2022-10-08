<?php require_once('../process/process.php'); ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/account.css" />

  <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body class="text-center">
  <main class="login-form">
    <form id="lgnForm" class="form" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">

      <div class="text">
        <h1 class="h3 mb-3 fw-normal ltext-101">WELCOME</h1>
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

      <div class="form-floating email">
        <input type="email" class="form-control stext-103" name="emailbox" id="lgnEmail" placeholder="user@email.com"required/>
        <label for="emailbox" class="stext-102">Email Address</label>
        <div class="error stext-102"></div>
      </div>

      <div class="form-floating password">
        <input type="password" class="form-control stext-103" name="passbox" id="lgnPassword" placeholder="password"required/>
        <label for="passbox" class="stext-102">Password</label>
        <div class="error stext-102"></div>
      </div>

      <div class="signup-page stext-117">
        <label>
          Don't have an Account?
          <a href="signup.php">Sign Up</a>
        </label>
        <a href="verify.php">forget password</a>
      </div>

      <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" id="loginbutton" name="login-button" type="submit">
        Login
      </button>

      <div class="divider"></div>
    </form>
    <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04">
      <a href="../ndex.php" style="text-decoration: none; color: #fff;">Home</a>
    </button>
  </main>
</body>
<script src="../assets/js/validate.js"></script>
<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>