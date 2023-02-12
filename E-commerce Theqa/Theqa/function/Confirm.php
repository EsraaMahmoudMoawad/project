<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
    $userid = $_GET['userid'];

	$name = $_POST['name'];
	$Address = $_POST['Address'];
	$info = $_POST['info'];
	$phone = $_POST['Number'];
	$Email = $_POST['Email'];

	$select_query = "INSERT INTO `orders`(`id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info`) 
    VALUES ('','$userid','$name','$Email','$Address','$phone','$info')";
	$result = $connection->query($select_query);

    $select_qu = "SELECT `id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info` 
    FROM `orders` WHERE user_id = $userid";
	$resul = $connection->query($select_qu);

    foreach ($resul as $KEY) {
        $info_user_id = $KEY['id'];
    }
    
// select products from cart
    $select_cart = "SELECT `id`, `user_id`, `product Name`, `discount`, `price`, `quantity` FROM `cart` 
    WHERE user_id = $userid";
	$resulT_cart = $connection->query($select_cart);

    foreach ($resulT_cart as $KEY) {
        $id = $KEY['id'];
        $name = $KEY['product Name'];
        $discount = $KEY['discount'];


        // insert from cart to order product to confrim
        $order_pro = "INSERT INTO `order_pro`(`id`, `order_info`, `pro_name`, `price`) 
        VALUES ('','$info_user_id','$name','$discount')";
        $resulT_order_pro = $connection->query($order_pro);
    }

    // delete from cart 
    $cart = "DELETE FROM `cart` WHERE user_id = $userid";
	$delete_cart = $connection->query($cart);




	header("location:../Profile(Order).php?info=$info_user_id");

}
?>
