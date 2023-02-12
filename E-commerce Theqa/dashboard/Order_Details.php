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
            <li class="active">Order Details</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Order Details</h1>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>


<?php
$id_open = $_GET['id_edit'];

$query="SELECT `id`, `order_info`, `pro_name`, `price` 
FROM `order_pro` WHERE  order_info = $id_open";

$select_query=$connection->query($query);

$count = 1;
$total_price = 0 ;
foreach ($select_query as $KEY) {
    $id = $KEY['id'];
    $name = $KEY['pro_name'];
    $price = $KEY['price'];
    $total_price = $total_price + $price;
?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $name ?></td>
      <td><?php echo $price ?></td>
    </tr>
<?php 
$count++;
}?>
<tr style=" 
background-color: #c5c7cc;
font-weight: bold;
font-size: 1.1em;
">
      <td>.</td> 
      <td>Total Price</td>
      <td><?php echo $total_price ?></td>
    </tr>
  </tbody>
</table>

    </div>