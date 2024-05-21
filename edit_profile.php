<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
  }
  
  
  
  
  include("conn.php");
  
  $id = $_SESSION["id"];


$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];



$user_sql = "UPDATE members SET firstName='$firstName',lastName='$lastName',email='$e,mail' WHERE id = '".$id."' ";

print_r($user_sql);

if(mysqli_query($conn,$user_sql)){
    header("Location: user.php");
}

