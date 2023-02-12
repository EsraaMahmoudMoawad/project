<?php
if(isset($_GET['id'])) {
    include 'connection.php';
    $id = $_GET['id'];
    $userId = $_GET['userId'];

    $Product="SELECT `id`, `p_name`, `discount` , `price`, `stock` 
    FROM `products` WHERE id = $id";

    $Select_product=$connection->query($Product);

    foreach ($Select_product as $KEY) {
        $name = $KEY['p_name'];
        $p_name = $KEY['p_name'];
        $discount=$KEY['discount'];
        $price=$KEY['discount'];
        $stock=$KEY['stock'];
    }
    
    $select_cart = "INSERT INTO `cart`(`id`, `user_id`, `product Name`, `discount`, `price`, `quantity`) 
    VALUES ('','$userId','$p_name','$discount','$price','')";

    $result = $connection->query($select_cart);

    header("location:../Categories.php");
}
?>