<?php 
    global $mysqli;

    $mysqli = new mysqli("sql113.epizy.com", "epiz_31090157", "jQI5c5WZDyTnp3", "epiz_31090157_brandx");

    if ($mysqli -> connect_errno) {
        echo "Error Connecting: " .$mysqli -> connect_error;
        exit();
    }
?>