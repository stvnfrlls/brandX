<?php

require_once('process.php');

$get_cart_data = $mysqli->query("SELECT * FROM cart WHERE cust_email = '{$_SESSION['email']}'");

if (isset($_GET["action"])) {
    $prodID = $_GET["id"];
    $prodQTY = $_POST["prod_qty"];
    $prodPRICE = $_POST["prod_price"];

    $prodTOTAL = $prodPRICE * $prodQTY;

    if ($_GET["action"] == "update") {
        if ($prodQTY >= 1) {
            $update_item = $mysqli->query("UPDATE cart SET prod_qty = '$prodQTY', prod_total = '$prodTOTAL' WHERE prod_id = '$prodID' AND cust_email = '{$_SESSION['email']}'");
            header('Location: ../cart.php');
        } elseif ($prodQTY < 1) {
            $delete_item = $mysqli->query("DELETE FROM cart WHERE prod_id = '$prodID' AND cust_email = '{$_SESSION['email']}'");
            header('Location: ../cart.php');
        }
    }
}

$sum = 0;
$get_sum = "SELECT SUM(prod_total) AS value_sum FROM cart WHERE cust_email = '{$_SESSION['email']}'";
$result = $mysqli->query($get_sum);

while ($row = $result->fetch_assoc()) {
    $sum += $row['value_sum'];
}
