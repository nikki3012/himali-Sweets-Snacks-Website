<?php 


include("conn.php");
    

$pid = $_GET["pid"];
$status = $_POST["status"];
$reason = $_POST["reason"];



$sql = "UPDATE checkout SET status ='$status',reason ='$reason' WHERE pid = '$pid' ";

print_r($sql);


if(mysqli_query($conn,$sql)){
    header("Location: foodordermanage.php");
}