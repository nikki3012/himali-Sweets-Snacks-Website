<?php

include("./conn.php");

$id = $_GET["id"];


$sql = "DELETE FROM CART WHERE id = '$id'";

if(mysqli_query($conn,$sql)){
    header('Location: cart.php');
}