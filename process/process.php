<?php
session_start();
require_once('connection.php');
$errors = array();
$success = array();
$counter = "1";
$_SESSION['detector'] =  1;

if (isset($_POST['login-button'])) {
    $email    = $mysqli->real_escape_string($_POST['emailbox']);
    $password = $mysqli->real_escape_string($_POST['passbox']);

    $check_email = "SELECT * FROM user_data WHERE user_email = '$email'";
    $result = $mysqli->query($check_email);

    if ($result->num_rows === 1) {
        $fetch = $result->fetch_assoc();
        $fetch_name = $fetch['user_name'];
        $fetch_email = $fetch['user_email'];
        $fetch_password = $fetch['user_password'];
        $fetch_address = $fetch['user_address'];
        $fetch_dog = $fetch['user_dog'];
        $fetch_teacher = $fetch['user_teacher'];


        if ($fetch_password !== $password) {
            $errors['password'] = "Incorrect Password.";
        } else {
            $_SESSION['name'] = $fetch_name;
            $_SESSION['email'] = $fetch_email;
            $_SESSION['address'] = $fetch_address;
            $_SESSION['dog'] = $fetch_dog;
            $_SESSION['teacher'] = $fetch_teacher;
            header('Location: ../index.php');
        }
    } else {
        $errors['error'] = "Account does not Exist.";
    }
}

if (isset($_POST['signup-button'])) {
    $FirstName = $mysqli->real_escape_string($_POST['FirstName']);
    $LastName  = $mysqli->real_escape_string($_POST['LastName']);
    $Address   = $mysqli->real_escape_string($_POST['Address']);

    $PetsName      = $mysqli->real_escape_string($_POST['PetsName']);
    $TeachersName  = $mysqli->real_escape_string($_POST['TeachersName']);

    $email      = $mysqli->real_escape_string($_POST['emailbox']);
    $password   = $mysqli->real_escape_string($_POST['passbox']);
    $cpassword  = $mysqli->real_escape_string($_POST['confirmpass']);

    $check_email = "SELECT * FROM user_data WHERE user_email = '$email'";
    $result = $mysqli->query($check_email);

    if ($result->num_rows === 0) {
        $full_name = "" . $FirstName . " " . $LastName . "";
        $signup = "INSERT INTO user_data
                   (user_name, user_email, user_address, user_dog, user_teacher, user_password)
                   VALUES
                   ('$full_name', '$email', '$Address', '$PetsName ', ' $TeachersName', '$password')";
        $result = $mysqli->query($signup);

        if ($result) {
            header('Location: login.php');
        } else {
            $errors['unknown'] = "Error inputting Data";
        }
    } else {
        $errors['email'] = "Email already in use." . $email;
    }
}

if (isset($_POST['verify-button'])) { //perfect 
    $email = $mysqli->real_escape_string($_POST['emailbox']);
    $sec1  = $mysqli->real_escape_string($_POST['sec1']);
    $sec2  = $mysqli->real_escape_string($_POST['sec2']);

    $check_email = "SELECT * FROM user_data 
                    WHERE 
                    user_email = '$email'";
    $result = $mysqli->query($check_email);

    if ($result->num_rows === 1) {
        $fetch = $result->fetch_assoc();
        $fetch_email = $fetch['user_email'];
        $fetch_sec1  = $fetch['user_dog'];
        $fetch_sec2  = $fetch['user_teacher'];

        if ($fetch_sec1 !== $sec1) {
            $errors['sec1'] = "Pets Name: Wrong Credentials.";
        }
        if ($fetch_sec2 !== $sec2) {
            $errors['sec2'] = "Teachers Name: Wrong Credentials.";
        }

        if ($fetch_sec1 === $sec1 && $fetch_sec2 === $sec2) {
            $_SESSION['reset_pass'] = $email;
            header('location: ../account/reset.php');
        }
    } else {
        $errors['email'] = "Wrong Credentials.";
    }
}

if (isset($_POST['update-button'])) {
    $passbox    = $mysqli->escape_string($_POST['passbox']);
    $confirmbox = $mysqli->escape_string($_POST['confirmbox']);

    $reset_pass = "UPDATE user_data 
                   SET user_password = '$passbox'
                   WHERE user_email = '{$_SESSION['reset_pass']}'";
    $result = $mysqli->query($reset_pass);

    if ($result) {
        unset($_SESSION['reset_pass']);
        header('Location: ../account/login.php');
    } else {
        $errors['resetpass'] = "Error Updating Password";
    }
}

if (isset($_POST['sendmsg'])) {
    $email = $mysqli->escape_string($_POST['email']);
    $concern = $mysqli->escape_string($_POST['msg']);

    $contactus = "INSERT INTO support
                  (user_email, message)
                  VALUES
                  ('$email', '$concern')";
    $result = $mysqli->query($contactus);

    if ($result) {
        $success['msg_sent'] = "Message Sent.";
        header('Location: ../contact.php');
    }
}

if (isset($_POST['update-user'])) { //update this with more issets for additional inputs
    $custName = $mysqli->escape_string($_POST['custName']);
    $petsName = $mysqli->escape_string($_POST['petsName']);
    $teachersName = $mysqli->escape_string($_POST['teachersName']);
    $email = $mysqli->escape_string($_POST['email']);
    $newpass = $mysqli->escape_string($_POST['newpass']);
    $confirmpass = $mysqli->escape_string($_POST['confirmpass']);

    $get_user_data = $mysqli->query("SELECT * FROM user_data WHERE user_email = '{$_SESSION['email']}'");

    if ($get_user_data->num_rows >= 1) {
        $fetch_data = $get_user_data->fetch_assoc();

        if (empty($custName)) {
            $custName = $fetch_data['user_name'];
        }
        if (empty($email)) {
            $email = $fetch_data['user_email'];
        }
        if (empty($petsName)) {
            $petsName = $fetch_data['user_dog'];
        }
        if (empty($teachersName)) {
            $teachersName = $fetch_data['user_teacher'];
        }
        if (empty($confirmpass)) {
            $confirmpass = $fetch_data['user_password'];
        }

        $update_details = $mysqli->query("UPDATE user_data 
                                            SET 
                                            user_name = '$custName',
                                            user_dog = '$petsName',
                                            user_teacher = '$teachersName',
                                            user_email = '$email',
                                            user_password = '$confirmpass'
                                            WHERE user_email = '{$_SESSION['email']}'");
        $_SESSION['name'] = $custName;
        $_SESSION['dog'] = $petsName;
        $_SESSION['teacher'] = $teachersName;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;

        $success['update'] = "Details Updated.";
        if ($update_details) {
        } else {
            $errors['update'] = "Error Updating data.";
        }
    }
}

if (isset($_POST['addtocart'])) {
    $prod_id    = $mysqli->escape_string($_POST['prod_id']);
    $prod_name  = $mysqli->escape_string($_POST['prod_name']);
    $prod_price = $mysqli->escape_string($_POST['prod_price']);
    $prod_qty   = $mysqli->escape_string($_POST['prod_qty']);
    $prod_total = $mysqli->escape_string($_POST['prod_price'] * $_POST['prod_qty']);

    $cart_count = $mysqli->query("SELECT * FROM cart WHERE cust_email = '{$_SESSION['email']}'");

    if ($cart_count->num_rows < 10) {
        if (empty($_SESSION['email'])) {
            header('Location: ../account/login.php');
        } elseif (!empty($_SESSION['email'])) {
            $check_cart = $mysqli->query("SELECT * FROM cart WHERE cust_email = '{$_SESSION['email']}' AND prod_name = '$prod_name'");

            if ($check_cart->num_rows == 1) {
                $fetch_data = $check_cart->fetch_assoc();
                $get_prod_qty = $fetch_data['prod_qty'];
                $get_prod_price = $fetch_data['prod_price'];

                if ($get_prod_qty >= 1) {
                    $update_qty = $get_prod_qty + $prod_qty;
                    $update_total = $update_qty * $get_prod_price;
                    $update_cart = $mysqli->query("UPDATE cart SET prod_qty = '$update_qty', prod_total = '$update_total' WHERE cust_email = '{$_SESSION['email']}' AND prod_name = '$prod_name'");
                    if ($update_cart) {
                        $success['update_qty'] = "Item successfully updated to cart.";
                    } else {
                        $errors['no_update_qty'] = "Error updating cart.";
                    }
                } else {
                    $errors['no_update_qty'] = "Error updating cart.";
                }
            } elseif ($check_cart->num_rows == 0) {
                $addtocart = $mysqli->query("INSERT INTO cart (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                                             VALUES
                                           ('$prod_id', '$prod_name', '$prod_qty', '$prod_price', '$prod_total', '{$_SESSION['name']}', '{$_SESSION['email']}')");
                if ($addtocart) {
                    $success['update_qty'] = "Item successfully added to cart.";
                } else {
                    $errors['no_update_qty'] = "Error updating cart.";
                }
            } else {
                $errors['dberror'] = "ERROR";
            }
        } else {
            $errors['error'] = "unknown error.";
        }
    } else {
        $errors['orders'] = "brand x cannot handle bulk orders.";
    }
}

if (isset($_POST['buynow'])) {
    $prod_id    = $mysqli->escape_string($_POST['prod_id']);
    $prod_name  = $mysqli->escape_string($_POST['prod_name']);
    $prod_price = $mysqli->escape_string($_POST['prod_price']);
    $prod_qty   = $mysqli->escape_string($_POST['prod_qty']);
    $prod_total = $mysqli->escape_string($_POST['prod_price'] * $_POST['prod_qty']);

    $addtocart = "INSERT INTO checkout 
                  (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                  VALUES
                  ('$prod_id', '$prod_name', '$prod_qty', '$prod_price', '$prod_total', '{$_SESSION['name']}', '{$_SESSION['email']}')";
    $result = $mysqli->query($addtocart);

    if ($result) {
        $success['update_qty'] = "Item successfully added to cart.";
        header('Location: ../order/checkout.php');
    } else {
        $error['no_update_qty'] = "Error updating cart.";
    }
}

if (isset($_POST['proceed-checkout'])) { //cart to checkout
    $cart_details = "SELECT * FROM cart WHERE cust_email = '{$_SESSION['email']}'";
    $result = $mysqli->query($cart_details);

    if ($result->num_rows >= 1) {
        $ver_checkout_table = $mysqli->query("SELECT * FROM checkout WHERE cust_email = '{$_SESSION['email']}'");

        if ($ver_checkout_table->num_rows === 0) {
            $proceed_checkout = "INSERT INTO checkout 
                                 (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                                 SELECT prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email 
                                 FROM cart
                                 WHERE cust_email = '{$_SESSION['email']}'";
            $result = $mysqli->query($proceed_checkout);

            if ($result) {
                header('Location: order/checkout.php');
            } else {
                $errors['proceedTocheckout'] = "Error in Proceeding to checkout.";
            }
        } else {
            $delete_existing_details = $mysqli->query("DELETE FROM checkout WHERE cust_email = '{$_SESSION['email']}'");

            if ($delete_existing_details) {
                $proceed_checkout = $mysqli->query("INSERT INTO checkout 
                                    (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                                    SELECT prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email 
                                    FROM cart
                                    WHERE cust_email = '{$_SESSION['email']}'");
                header('Location: order/checkout.php');
            }
        }
    } else {
        $errors['proceedTocheckout'] = "Cart is Empty!";
    }
}

if (isset($_POST['proceed_payment'])) { //checkout to payment
    $chkPhone = $mysqli->escape_string($_POST['chkPhone']);
    $chkAddress   = $mysqli->escape_string($_POST['chkAddress']);
    $chkCity    = $mysqli->escape_string($_POST['chkCity']);
    $chkProv  = $mysqli->escape_string($_POST['chkProv']);
    $chkZip = $mysqli->escape_string($_POST['chkZip']);

    if (empty($chkPhone)) {
        $errors['phoneField'] = "Phone number not entered.";
    } elseif (empty($chkAddress)) {
        $errors['addressField'] = "Address not entered.";
    } elseif (empty($chkCity)) {
        $errors['cityField'] = "City not entered.";
    } elseif (empty($chkProv)) {
        $errors['provinceField'] = "Province not entered.";
    } elseif (empty($chkZip)) {
        $errors['zipField'] = "Zip code not entered.";
    } else {
        $checkout_details = $mysqli->query("SELECT * FROM checkout WHERE cust_email = '{$_SESSION['email']}'");
        if ($checkout_details->num_rows >= 1) {
            $ver_payment_table = $mysqli->query("SELECT * FROM payment 
                                                 WHERE cust_email = '{$_SESSION['email']}'");
            if ($ver_payment_table->num_rows === 0) {
                $proceed_payment = $mysqli->query("INSERT INTO orders 
                               (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                               SELECT prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email 
                               FROM checkout
                               WHERE cust_email = '{$_SESSION['email']}'");
                $datetime = date("m/d/y h:i");
                $_SESSION['time'] = $datetime;

                if ($proceed_payment->num_rows > 0) {
                    $proceed_payment2 = $mysqli->query("UPDATE orders
                               SET 
                               order_time = '{$_SESSION['time']}',
                               cust_phone = '$chkPhone',
                               cust_address = '$chkAddress',
                               cust_city = '$chkCity',
                               cust_province = '$chkProv',
                               cust_zip = '$chkZip'
                               WHERE 
                               cust_email = '{$_SESSION['email']}'");
                }
                if ($proceed_payment2) {
                    header('Location: ../order/payment.php');
                } else {
                    $errors['proceedTopayment'] = "Error in Proceeding to Payment.";
                }
            } else {
                $delete_existing_details = $mysqli->query("DELETE FROM orders WHERE cust_email = '{$_SESSION['email']}'");

                if ($delete_existing_details) {
                    $proceed_payment = $mysqli->query("INSERT INTO orders 
                               (prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email)
                               SELECT prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email 
                               FROM checkout
                               WHERE cust_email = '{$_SESSION['email']}'");
                    $datetime = date("m/d/y h:i");
                    $_SESSION['time'] = $datetime;

                    $proceed_payment2 = $mysqli->query("UPDATE orders
                               SET 
                               order_time = '{$_SESSION['time']}',
                               cust_phone = '$chkPhone',
                               cust_address = '$chkAddress',
                               cust_city = '$chkCity',
                               cust_province = '$chkProv',
                               cust_zip = '$chkZip'
                               WHERE 
                               cust_email = '{$_SESSION['email']}'");
                    if ($proceed_payment2) {
                        header('Location: ../order/payment.php');
                    } else {
                        $errors['proceedTopayment'] = "Error in Proceeding to Payment.";
                    }
                } else {
                    $errors['proceedTopayment'] = "Error in Deleting Previous data.";
                }
            }
        } else {
            $errors['proceedTocheckout'] = "Checkout is Empty!";
        }
    }
}

if (isset($_POST['place-order'])) { //payment to receipt
    $cc_type = $mysqli->escape_string($_POST['paymentMethod']);

    $chkdtls_details = $mysqli->query("SELECT * FROM checkout WHERE cust_email = '{$_SESSION['email']}'");

    if ($chkdtls_details->num_rows >= 1) {
        $ver_order_table = $mysqli->query("SELECT * FROM orders WHERE cust_email = '{$_SESSION['email']}'");

        if ($ver_order_table->num_rows === 0) {
            $payment = "INSERT INTO transactions 
                       (order_time, prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email,
                        cust_phone, cust_address, cust_city, cust_province, cust_zip)
                       SELECT order_time, prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email,
                       cust_phone, cust_address, cust_city, cust_province, cust_zip
                       FROM orders
                       WHERE cust_email = '{$_SESSION['email']}'";
            $result = $mysqli->query($payment);

            $order_num = rand(00000, time());

            if ($result) {
                $payment2 = "UPDATE transactions SET order_num = '$order_num', cc_type = '$cc_type' 
                             WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'";
                $result2 = $mysqli->query($payment2);

                if ($result2) {
                    header('Location: ../order/receipt.php');
                    $delete_cart = $mysqli->query("DELETE FROM cart WHERE cust_email = '{$_SESSION['email']}'");
                    $delete_checkout = $mysqli->query("DELETE FROM checkout WHERE cust_email = '{$_SESSION['email']}'");
                    $delete_order = $mysqli->query("DELETE FROM order WHERE cust_email = '{$_SESSION['email']}'");
                } else {
                    $errors['proceedupdate'] = "Error in updating data.";
                }
            } else {
                $errors['proceedTopayment'] = "Error in placing orders.";
            }
        } else {
            $delete_transactions = $mysqli->query("DELETE FROM transactions WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'");

            if ($delete_transactions) {
                $payment = "INSERT INTO transactions 
                            (order_time, prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email,
                             cust_phone, cust_address, cust_city, cust_province, cust_zip)
                            SELECT order_time, prod_id, prod_name, prod_qty, prod_price, prod_total, cust_name, cust_email,
                            cust_phone, cust_address, cust_city, cust_province, cust_zip
                            FROM orders
                            WHERE cust_email = '{$_SESSION['email']}'";
                $result = $mysqli->query($payment);

                $order_num = rand(00000, time());

                if ($result) {
                    $payment2 = "UPDATE transactions SET order_num = '$order_num', cc_type = '$cc_type' 
                                 WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'";
                    $result2 = $mysqli->query($payment2);

                    if ($result2) {
                        header('Location: ../order/receipt.php');
                        $delete_cart = $mysqli->query("DELETE FROM cart WHERE cust_email = '{$_SESSION['email']}'");
                        $delete_checkout = $mysqli->query("DELETE FROM checkout WHERE cust_email = '{$_SESSION['email']}'");
                        $delete_order = $mysqli->query("DELETE FROM order WHERE cust_email = '{$_SESSION['email']}'");
                    } else {
                        $errors['proceedupdate'] = "Error in updating data.";
                    }
                } else {
                    $errors['proceedTopayment'] = "Error in placing orders.";
                }
            }
        }
    }
}
