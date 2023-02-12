<?php
include 'function/connection.php';
if(isset($_GET['id'])){
    $product_name = $_GET['product Name'];
    $discount = $_GET['discount'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];	
    $query = "SELECT * FROM products WHERE `id` = $id";
    $result = mysqli_query($connection, $query);
    $product = mysqli_fetch_assoc($result);
   
    $query = "INSERT INTO `cart`(`id`, `product Name`,`discount`, `price` ,`quantity`) VALUES ( '','$product_name','$discount','$price', '$quantity')";
    $result = mysqli_query($connection, $query);
    header("location:My Cart.php");
}
?>