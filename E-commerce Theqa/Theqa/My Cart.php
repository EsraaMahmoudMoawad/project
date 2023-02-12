<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/My Cart.css">
    <title>MY CART</title>
</head>
<body>

<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <section class="section-1">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>

              </tr>
            </thead>
            <tbody>



<?php
include "function/connection.php";
$user_id = $_SESSION['userId'];

$cart ="SELECT `id`, `user_id`, `product Name`, `discount`, `price`, `quantity` 
FROM `cart` WHERE user_id = $user_id";
$Select_cart=$connection->query($cart);



$total_cart = 0;
$total_price = 0;
$id = 0;
foreach ($Select_cart as $KEY) {
  $id = $KEY['id'];
  $name = $KEY['product Name'];
  $discount = $KEY['discount'];
  $price=$KEY['price'];
  $quantity=$KEY['quantity'];
  
  $total_cart = $price + $total_cart;

?>
              <tr>
                <td>
                  <a href="function/delete_cart.php?id=<?= $id?>&userId= <?= $_SESSION['userId']?>">
                    <i class="fa-solid fa-delete-left Delete"></i>
                  </a>
                </td>
                <th scope="row"><?php echo $name?></th>
                <td><?php echo $price ?>$</td>
                <td><?php echo $discount ?>$</td>
              </tr>
<?php } 
if ($id == 0) 
{
?>
  <tr> 
    <td></td>
    <td></td>
    <td style="
    color: red !important;
    font-weight: bold;
    opacity: 0.8;
    ">Your Cart is Empty</td>
     <td></td>
     <td></td>
  </tr>
<?php }?>

            </tbody>
          </table>

          <div class="sec-1-box-1">
            <a href="Checkout.php">
              <button type="button" class="btn btn-success but ">PROCEED TO CHECKOUT</button>
            </a>
            <a href="Categories.php">
            <button type="button" class="btn btn-secondary but color_1">UPDATA CART</button>
            </a>
          </div>
        </section>
        <!--  End section-1 -->
       
        <!-- Start section-2 -->
        <section class="section-2">
          <div class="sec-2-box-1">
            <h4>
              CALCULATE SHIPPING 
            </h4>
            <form action="" method="post">
              <select name="country" value="5">
                <option>COUNTRY</option>
                <option>Egypt</option>
                <option>Iraq</option>
                <option>Jordan</option>
                <option>Kuwait</option>
                <option>Australia</option>

              </select> <br>
              <input type="text" placeholder="State/Country">
              <input type="text" placeholder="Postcode/ZIP"> <br>
              <button type="submit" class="btn btn-light color_1 updata">UPDATA TOTAL</button> 
            </form>
          </div>
          <div class="sec-2-box-2">
            <h4>
              CART TOTALS 
            </h4>
            <div class="box">
              <h5>
                Cart Subtotal
                <span>
                  <?php echo  $total_cart?> $
                </span>
              </h5>
            </div>
            <div class="box">
              <h5>
                Shipping and Handling
                <span class="free">
                  Free Shipping
                </span>
              </h5>
            </div>
            <div class="box">
              <h5>
                Order Total
                <span class="total">
                <?php echo  $total_cart?> $
                </span>
              </h5>
              
            </div>
          </div>
        </section>
        <!--  End section-2 -->

        <!-- Start section-3 -->
        <section class="section-3">
          <div class="line"></div>
          <h2>
            YOU MAY BE INTERESTED IN 
          </h2>
          <P>
            Lorem ipsum dolor sit amet consectetur
          </P>
          <div class="line"></div> 
        </section>
        <!--  End section-3 -->

        <!-- Start section-4 -->
        <section class="section-4">
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
          <div class="Categories">
            <img src="images/Clothes/<?php echo $photo?>" alt="Error">
            <p>Men,Category</p>  
            <h5><?php echo $name?></h5>
            <h6>
              <del><?php echo $price?></del>
              <span>
              <?php echo $discount?>
              </span>
            </h6>
          </div>
          <?php }?>

 
        </section>
        <!-- End section-4 -->
<?php
include 'project_des/footer.php';
?>        
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body> 
</html>