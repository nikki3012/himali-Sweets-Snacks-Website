<?php 


if(!isset($_SESSION)){
    session_start();
}

include("conn.php");
if($_GET){
    if($_GET["prod_id"] ){
        $prodid = $_GET["prod_id"];
        $userid = $_SESSION["id"];
        $quantity = $_GET["quantity"];
        $amount = $_GET["amount"];
    
        $total = $quantity * $amount;

        $sql = "INSERT INTO cart(flag,prod_id,user_id,cart_quantity,total) VALUES ('1','".$prodid."','".$userid."','".$quantity."','".$total."')";
            
        if(mysqli_query($conn,$sql)){

            header('Location: ' . $_SERVER['HTTP_REFERER']);

        }
    }
}

?>