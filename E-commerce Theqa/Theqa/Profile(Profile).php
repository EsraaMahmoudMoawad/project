<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Profile(Profile).css">
    <title>Profile(Profile)</title>
</head>
<body>
<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <!-- Start section-1 -->
        <section class="section-1 text-center">

<?php
include "function/connection.php";
$user_id = $_SESSION['userId'];

$us_er ="SELECT * FROM `user` WHERE  id = $user_id";
$Select_user=$connection->query($us_er);


foreach ($Select_user as $KEY) {
  $id = $KEY['id'];
  $name = $KEY['name'];
?>
            <h1>
              <?php echo $name; ?>
            </h1>
<?php } ?>
        </section>
        <!-- End section-1-->

        <!-- Start section-2 -->
        <section class="Profile">
          <div class="aside">
            <a href="Profile(Profile).php">Profile</a> <hr>
            <a href="Profile(Order).php">Orders</a> <hr>
            <a href="My Cart.php">Cart</a> 
          </div>
          <div>
            <form action="function/edit_user.php" method="post">
              <h2>
                Profile
                <button type="submit" name="submit" class="btn btn-success Save">Save Edit</button>
              </h2>
              <input type="text" name="user_name" placeholder="<?php echo $user[0][1] ?>"> <br>
              <input type="email" name="email" placeholder="<?php echo $user[0][2] ?>"> 
              <input type="password" name="password" placeholder="Password"> <br>
              <input type="tel" name="phone" placeholder="<?php echo $user[0][4] ?>"> <br>
              <input type="text" placeholder="Address"> <br>
            </form>
          </div>      
       </section>
       <!-- End section-2 -->
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