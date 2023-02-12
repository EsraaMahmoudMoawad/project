<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Profile(Order).css">
    <title>Profile(Order)</title>
</head>
<body>

<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <!-- Start section-1 -->
        <section class="section-1 text-center">
            <h1>
              Fairouz Abu Hmela
            </h1>
            <p>
              Cario,Egypt
            </p>
        </section>
        <!-- End section-1-->



        <!-- Start section-2 -->
        <section class="orders">
          <div class="aside">
            <a href="Profile(Profile).php">Profile</a> <hr>
            <a href="Profile(Order).php">Orders</a> <hr>
            <a href="My Cart.php">Cart</a> 
          </div>
          <div class="ord">
            <h2>
              Orders
            </h2>
<?php
include "function/connection.php";
$user_id = $_SESSION['userId'];

$order ="SELECT `id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info` FROM `orders` 
WHERE user_id = $user_id";

$Select_order=$connection->query($order);

$total = 0;
foreach ($Select_order as $KEY) {
  $total = $total + 1 ;
}
?>
            <p>
              <?php echo $total ?> items
            </p>

<?php
$ord ="SELECT `id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info` FROM `orders` 
WHERE user_id = $user_id";

$Select_ord=$connection->query($ord);

$num = 0;
$id=0;
foreach ($Select_ord as $KEY) {
  $id = $KEY['id'];
  $num = $num + 1;
?>
            <div class="order-box">
              <h4>
                Order <span><?php echo $num ?></span>
              </h4>
              <a href="View order.php?id=<?= $id ?>" class="view">view order</a> 
              <a href="function/delete_order.php?id=<?= $id ?>" class="btn btn-success cancel">Cancel order</a>
            </div>
<?php } 
if ($id == 0) 
{
?>
  <div class="order-box">
              <h4 style= "

              ">
               No Order found
              </h4>
              <a href="Categories.php" class="btn btn-success cancel">Make Order</a>
            </div>
<?php }?>


          </div>
        </section>
        <!-- End section-1-->

<?php
include 'project_des/footer.php';
?>    
        
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/index.js"></script>
</body> 
</html>