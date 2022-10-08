<?php

require_once('process.php');

$checkout_data = array();

$get_orderdata = "SELECT * FROM checkout WHERE cust_email = '{$_SESSION['email']}'";
$result_get_orderdata = $mysqli->query($get_orderdata);

while ($fetch_data = $result_get_orderdata->fetch_array(MYSQLI_ASSOC)) {
    $checkout_data[] = $fetch_data;
}

$get_custdata = "SELECT * FROM checkout WHERE cust_email = '{$_SESSION['email']}'";
$result_get_custdata = $mysqli->query($get_custdata);

$cust_data = $result_get_custdata -> fetch_assoc();

$get_sum = "SELECT SUM(prod_total) AS total FROM checkout WHERE cust_email = '{$_SESSION['email']}'";
$sum_result = $mysqli -> query($get_sum);

$fetch = $sum_result -> fetch_assoc();

$total_sum = $fetch['total'];
