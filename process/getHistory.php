<?php

require_once('process.php');

$history_data = array();

$get_orderHistory = "SELECT * FROM transactions WHERE cust_email = '{$_SESSION['email']}'";
$order_result = $mysqli->query($get_orderHistory);

while ($fetch_data = $order_result->fetch_array(MYSQLI_ASSOC)) {
    $history_data[] = $fetch_data;
}

