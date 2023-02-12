<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Categories.css">
    <title>Categories</title>
</head>
<body>
<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <aside>
          <div class="side-h5">
            <h5>
              Categories
            </h5>
          </div>
        <div class="side-box">


<?php
include "function/connection.php";

$cat="SELECT `id`, `cat_name` FROM `categories`";
$Select_cat =$connection->query($cat);

foreach ($Select_cat as $KEY) {
  $cat_id = $KEY['id'];
  $cat_name = $KEY['cat_name'];

?>

          <div class="dropdown">
            <button class="btn button-side dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="B1">
              <?php echo $cat_name ?> 
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Men</a></li>
              <li><a class="dropdown-item" href="#">Womens</a></li>
              <li><a class="dropdown-item" href="#">Children</a></li>
            </ul>
          </div>
          <hr>
<?php }?>

        </div>
        <img src="images/tamanna-rumee-mIqyYpSNq3o-unsplash.jpg" alt="Error">
        <div class="side-h5">
          <h5>
            Featured Products
          </h5>
        </div>
        <div class="side-box">
        <?php
include "function/connection.php";

$Product="SELECT `id`, `p_name`, `description`, `price`, `image`, `discount`, `stock`, `id_category` FROM `products` ORDER BY id DESC LIMIT 5";
$Select_product=$connection->query($Product);


$count = 0;
foreach ($Select_product as $KEY) {
  $id = $KEY['id'];
  $name = $KEY['p_name'];
  $photo = $KEY['image'];
  $price=$KEY['price'];
  $discount=$KEY['discount'];
  $count = $count +1;


?>
          <div class="Featured">
            <div>
              <img src="images/Clothes/<?php echo $photo ?>" alt="Error">
            </div>
            <div>
              <h5>
              <?php echo $name ?>
              </h5>
              <p>
              <?php echo $price ?>
              </p>
            </div>
          </div> <hr>

          
<?php }?>

         
        </div>
        </aside>
        <!--  End aside -->
        <section  >
        <!-- Start Section-1 -->

          <div class="section-1">
<?php
include "function/connection.php";

$Product="SELECT `id`, `p_name`, `description`, `price`, `image`, `discount`, `stock`, `id_category` FROM `products`";
$Select_product=$connection->query($Product);



foreach ($Select_product as $KEY) {
  $id = $KEY['id'];
  $id_category = $KEY['id_category'];
  $name = $KEY['p_name'];
  $photo = $KEY['image'];
  $price=$KEY['price'];
  $discount=$KEY['discount'];

?>
          <div class="Categories" >
                    <img src="images/Clothes/<?php echo $photo ?>" alt="Error">
<?php

$cat="SELECT * FROM `categories` WHERE id = $id_category";
$Select_cat=$connection->query($cat);

foreach ($Select_cat as $KEY) {
  $cat_name = $KEY['cat_name'];
?>
                    <p><?php echo $cat_name; ?>,Category</p>  
                    <h5><?php echo $name ?></h5>
                    <h6>
                      <del>
                          <?php echo $price ?>
                      </del>
                      <span>
                         <?php echo $discount ?>
                      </span>
                    </h6>
                    <a href="function/edit cart.php?id=<?= $id ?>&userId= <?= $_SESSION['userId']?>"
                    class="btn btn-light addCart" >
                    ADD TO CART
                    </a>
          </div>
<?php } }?>
          </div>
          </section>
        <!--  End Section-1 -->
          
<?php
include 'project_des/footer.php';
?>
        
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/Categories.js"></script>
</body> 
</html>