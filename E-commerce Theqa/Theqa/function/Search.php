
<!-- if(isset($_POST['submit'])){
	include 'connection.php';
	$search = $_POST['search'];
    
    echo $search;

	$select_query = "SELECT `id`, `p_name`, `description`, `price`, `image`, `discount`, `stock`, `id_category` FROM `products` 
    WHERE p_name = $search";

	$result = $connection->query($select_query);

    $id = 0;
    foreach ($select_query as $KEY) {
        $id = $KEY['id'];
        $name = $KEY['p_name'];
        $price = $KEY['price'];
        $discount=$KEY['discount'];
    }
    if ($id == 0) {
        header("location:../Not found.php");
    }
    else {
        header("location:../Search.php?id=$id");
    }
} -->


<?php
if (isset($_POST['submit'])) {
        include 'connection.php';
		$search = $_POST['search'];
		$select = "SELECT id FROM `products` WHERE `p_name` = '$search' ";
        $SELECT_search = $connection->query($select);
    
        $id = 0;
        foreach ($SELECT_search as $KEY) {
            $id = $KEY['id'];
        }
        if ($id == 0) {
            header("location:../Not found.php");
        }
        else {
            header("location:../print search.php?id=$id");
        }
    }

?>
