<?php 
    include 'connection.php';
    $delete_id = $_GET['id'];
    

    $delete="DELETE FROM `order_pro` WHERE order_info = $delete_id";
    $delete_order =$connection->query($delete);


    $del="DELETE FROM `orders` WHERE id = $delete_id";
    $delete_ord =$connection->query($del);

    header("location:../Profile(Order).php");
?>