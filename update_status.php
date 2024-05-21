<?php 


include("./conn.php");

$order_id = $_GET["id"];
$status = $_GET["status"];

$sql = "UPDATE checkout SET status = '$status' WHERE id = '$order_id'";

if(mysqli_query($conn,$sql)){

    header('Location: ' . $_GET['reffer']);

}