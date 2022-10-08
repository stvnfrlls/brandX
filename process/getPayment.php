<?php

require_once('process.php');

$payment_data = array();

$get_data = "SELECT * FROM orders WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'";
$result = $mysqli->query($get_data);

while ($fetch_data = $result->fetch_array(MYSQLI_ASSOC)) {
    $payment_data[] = $fetch_data;
}