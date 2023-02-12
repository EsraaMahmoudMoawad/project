<?php 
    include 'connection.php';
    $delete_id = $_GET['id'];
    $userId = $_GET['userId'];

    $delete="DELETE FROM `cart` WHERE user_id = $userId and id = $delete_id";
    $delete_cart =$connection->query($delete);

    header("location:../My Cart.php");
?>