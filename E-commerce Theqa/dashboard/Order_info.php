<?php

include 'des_include/header.php';
include 'des_include/nav.php';
include 'des_include/sidebar.php';
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Order Info</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Order Info</h1>
        </div>

        <table class="table">
  
<?php
$id_info = $_GET['id_info'];

$query="SELECT `id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info` FROM `orders`
WHERE id = $id_info";

$select_query=$connection->query($query);

$count = 1;
$total_price = 0 ;
foreach ($select_query as $KEY) {
    $id = $KEY['id'];
    $name = $KEY['name'];
    $email = $KEY['email'];
    $address = $KEY['address'];
    $tel = $KEY['tel'];
    $add_info = $KEY['add_info'];
?>
    <form action="#" method="post">
      <label for="#">Name</label>
			<input type="text" name="password" value="<?php echo $name;  ?>" disabled class="form-control">
      
      <label for="#">Email</label>
			<input type="text" name="password" value="<?php echo $email;  ?>" disabled class="form-control">

      <label for="#">Address</label>
			<input type="text" name="password" value="<?php echo $address;  ?>" disabled class="form-control">

      <label for="#">Tel</label>
			<input type="text" name="password" value="<?php echo $tel;  ?>" disabled class="form-control">

      <label for="#">Additional info</label>
			<input type="text" name="password" value="<?php echo $add_info;  ?>" disabled class="form-control">
    </form>
<?php }?>

</div>