<?php require_once('../process/process.php'); ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup Page</title>
  <link rel="stylesheet" href="../assets/css/signup.css">

  <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body class="text-center">
  <div class="signup-form">
    <form id="supForm" class="form row g-2" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
      <h1 class="h3 mb-3 fw-normal">SIGN UP</h1>
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

      <div class="col-md-6 form-floating">
        <input type="text" class="form-control stext-103" name="FirstName" id="supFirstName" placeholder="First Name"required/>
        <label for="FirstName" class="stext-102">First Name</label>
        <div class="error stext-102"></div>
      </div>
      
      <div class="col-md-6 form-floating">
        <input type="text" class="form-control stext-103" name="LastName" id="supLastName" placeholder="Last Name"required/>
        <label for="LastName" class="stext-102">Last Name</label>
        <div class="error stext-102"></div>
      </div>

      <div class="col-md-6 form-floating">
        <input type="text" class="form-control stext-103" name="PetsName" id="supPetsName" placeholder="PetsName"required/>
        <label for="PetsName" class="stext-102">Pets Name</label>
        <div class="error stext-102"></div>
      </div>

      <div class="col-md-6 form-floating">
        <input type="text" class="form-control stext-103" name="TeachersName" id="supTeachersName" placeholder="Teachers Name"required/>
        <label for="TeachersName" class="stext-102">Teachers Name</label>
        <div class="error stext-102"></div>
      </div>

      <div class="col-md-12 form-floating">
        <input type="email" class="form-control stext-103" name="emailbox" id="supEmailAddress" placeholder="user@email.com"required/>
        <label for="emailbox" class="stext-102">Email Address</label>
        <div class="error stext-102"></div>
      </div>

      <div class="col-md-6 form-floating">
        <input type="password" class="form-control stext-103" name="passbox" id="supPassword" placeholder="Password"required/>
        <label for="passbox" class="stext-102">Password</label>
        <div class="error stext-102"></div>
      </div>

      <div class="col-md-6 form-floating">
        <input type="password" class="form-control stext-103" name="confirmpass" id="supConfirmPassword" placeholder="Password"required/>
        <label for="confirmpass" class="stext-102">Confirm Password</label>
        <div class="error stext-102"></div>
      </div>

      <div class="login-page stext-117">
        <label>
          Already have an Account?
          <a href="login.php">Login</a>
        </label>
      </div>

      <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-lr-15 trans-04 " id="signup-button" name="signup-button" type="submit">
        Register
      </button>
    </form>
    <div class="login-page">
    </div>
    <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-100 bg3 bor1 hov-btn3 p-lr-15 trans-04">
      <a href="../ndex.php" style="text-decoration: none; color: #fff;">Home</a>
    </button>
  </div>
</body>

<script src="../assets/js/validate.js"></script>
<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>