<?php

require_once('process.php');

$order_data = array();

$get_userdata = $mysqli->query("SELECT * FROM transactions WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'");

$user_data = $get_userdata->fetch_assoc();

$get_itemdata = "SELECT * FROM transactions WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'";
$item_result = $mysqli->query($get_itemdata);

while ($fetch_data = $item_result->fetch_array(MYSQLI_ASSOC)) {
    $order_data[] = $fetch_data;
}

$get_sum = "SELECT SUM(prod_total) AS total FROM transactions WHERE cust_email = '{$_SESSION['email']}' AND order_time = '{$_SESSION['time']}'";
$sum_result = $mysqli->query($get_sum);

$fetch = $sum_result->fetch_assoc();

$total_sum = $fetch['total'];
