<?php
session_start();


include("conn.php");

$id = $_SESSION["id"];

$sql_delete_cart = "DELETE FROM cart WHERE user_id = '$id'";
if(mysqli_query($conn,$sql_delete_cart)){
    session_unset();
    session_destroy();
    $_SESSION['logged_in'] = false;
    echo 'You have been logged out.';
    header('location: index.php');
    exit;
}







?>