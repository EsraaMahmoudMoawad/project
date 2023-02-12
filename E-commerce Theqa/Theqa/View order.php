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
    <title>View order</title>
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
                <th scope="col">#No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <!-- <th scope="col">Quantity</th> -->
              </tr>
            </thead>
            <tbody>
<?php
include "function/connection.php";
$order_id = $_GET['id'];

$order ="SELECT `id`, `order_info`, `pro_name`, `price` FROM `order_pro` 
WHERE  order_info = $order_id";
$Select_order=$connection->query($order);

$total_price = 0; 
$num = 0 ;
foreach ($Select_order as $KEY) {
  $id = $KEY['id'];
  $name = $KEY['pro_name'];
  $price=$KEY['price'];

  $num = $num + 1;
  $total_price = $price + $total_price;

?>
              <tr>
                  <td><?php echo $num?> </td>
                  <td><?php echo $name ?> </td>
                  <td><?php echo $price ?> </td>
              </tr>
<?php } ?>
              <tr style = "
                background-color: #ebe8e8;
              ">
                <td style="
                font-size:1.2em;
                font-weight: bold;
                color:green;
                ">
                  Total price
                </td>
                <td></td>
                <td style="
                font-size:1.2em;
                font-weight: bold;
                color:green;
                ">
                  <?php echo $total_price ?>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
        <!--  End section-1 -->
       
       
<?php
include 'project_des/footer.php';
?>        
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body> 
</html>