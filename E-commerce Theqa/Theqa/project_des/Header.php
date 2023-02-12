<?php
session_start();
include("function/connection.php");
if (!isset($_SESSION['userId'])) {
  
  header("location:login.php");
} else {
  $query = "SELECT * FROM user WHERE id = $_SESSION[userId]";
  $result = mysqli_query($connection, $query);
  $user = mysqli_fetch_all($result);
}
?>
<!-- Start Header -->
 <header class="Header">
            <div class="container">
                <div class="row">
                  <div class="col">
                  <i class="fa-solid fa-user" style="
                  font-size: 1.2em;
                  margin-right: 0.2em;
                  "></i>
                   <a href="./Profile(Profile).php"><?php echo $user[0][1] ?></a> 
                  </div>
                  <div class="col">
                    <i class="fa-solid fa-mobile-screen icon"></i>
                    <span>
                        +20 010123456789
                    </span>
                  </div>
                  <div class="col">
                    <i class="fa-brands fa-telegram icon"></i>
                    info@Saqah.com
                  </div>

<?php
include "function/connection.php";
$us_id = $_SESSION['userId'];
$cart="SELECT * FROM `cart` WHERE user_id = $us_id";
$Select_product =$connection->query($cart);


$count = 0;
foreach ($Select_product as $KEY) {
 
  $count = $count + 1;
}
?>
                  <div class="col">
                    <a href="./My Cart.php">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    your cart: <?php  echo $count ?> items
                  </div>
    
                  <div class="col">
        <a href="function/destroy_user.php">
          <i class="fa-solid fa-arrow-right-from-bracket" style="margin-left:2em;"></i>
          logout
      </div>
      </a>
    </div>
        </header>
<!-- End Header -->