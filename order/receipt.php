<?php
require_once('../process/process.php');
require_once('../process/getCart.php');
require_once('../process/getCheckout.php');
require_once('../process/getPayment.php');
require_once('../process/getReceipt.php');

if (empty($_SESSION['email'])) {
    header('Location: ../account/login.php');
} elseif (count($cart_data) === 0 && count($checkout_data) === 0 && count($payment_data) === 0) {
    header('Location: ../cart.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php') ?>

<body class="animsition">

    <?php require_once('header.php') ?>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../assets/images/bg-01.jpg')">
        <h2 class="ltext-105 cl0 txt-center">Thank you for Ordering at BrandX</h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <h4 class="mb-3 ltext-103">Customer Details</h4>
                    <ul class="stext-103 cl6 p-b-26">
                        <li>
                            <p>Order Number: <?php echo $user_data['order_num'] ?></p>
                        </li>
                        <li>
                            <p>Customer Name: <?php echo $user_data['cust_name'] ?></p>
                        </li>
                        <li>
                            <p>Payment Method: <?php echo $user_data['cc_type'] ?></p>
                        </li>
                        <br>
                        <li>
                            <p>Address: <?php echo $user_data['cust_address'] ?></p>
                        </li>

                        <li>
                            <p>City: <?php echo $user_data['cust_city'] ?></p>
                        </li>
                        <li>
                            <p>Province: <?php echo $user_data['cust_province'] ?></p>
                        </li>
                    </ul>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <h4 class="mb-3 ltext-103">Orders</h4>
                    <div>
                        <ul class="list-group">
                            <?php
                            if (count($order_data) >= 1) {
                                $price = "";
                                foreach ($order_data as $order_det) { ?>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0 stext-103"><?php echo $order_det['prod_name'] ?></h6>
                                        </div>
                                        <?php
                                        $price = $order_det['prod_qty'] * $order_det['prod_price'];
                                        ?>
                                        <span class="text-muted stext-103">$ <?php echo $price ?>.00</span>
                                    </li>
                                <?php
                                }
                                ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="stext-103">Total (USD)</span>
                                    <span class="stext-103">$ <?php echo $total_sum ?>.00</span>
                                </li>
                        </ul>
                    <?php

                            }
                    ?>
                    </ul>
                    </div>
                </div>
            </div>
            <br>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name="place-order">
                    <a href="../account/order-history.php" style="text-decoration: none; color: #fff;">Check Order History</a>

                </button>
                <br>
                <div class="divider"></div>
                <button class="w-100 btn btn-lg flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04" name="place-order">
                    <a href="../product.php" style="text-decoration: none; color: #fff;">Get back to Shopping</a>
                </button>
            </div>
        </div>
    </section>

    <?php require_once('footer.php') ?>
</body>

</html>