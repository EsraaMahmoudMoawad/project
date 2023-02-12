<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Checkout.css">
    <title>Checkout</title>
</head>
<body>

<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <!-- Start section-2 -->
        <section class="Checkout">
            <form action="function/Confirm.php?userid=<?= $_SESSION['userId']?>" method="post">
              <h2>
                Checkout
              </h2>
              <input type="text" placeholder="Name" name="name"> <br>
              <input type="text" placeholder="Address" name="Address"> <br>
              <input type="text" placeholder="Addtional info" name="info"> <br>
              <input type="tel" placeholder="Mobile Number" name="Number"> <br>
              <input type="email" placeholder="Email" name="Email"> <br>
              <button type="submit" name="submit" class="btn btn-success Confrim">
                Confrim Order
              </button>
            </form>
       </section>
       <!-- End section-2 -->
        
       <!--  Start Footer -->
<?php
include 'project_des/footer.php';
?> 
      <!--  End Footer -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/index.js"></script>
</body> 
</html>