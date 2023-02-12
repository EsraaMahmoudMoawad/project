<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Contact Us.css">
    <title>CONTACT US</title>
</head>
<body>

<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <!-- Start section-1 -->
        <section class="section-1">
          <div class="Sec-1-boxes" id="box-1">
            <h3>
              Address
            </h3>
            <p>
              203 Street,Madint nasser, <br>
              cario, Convertment <br>
              3 Zamalek, cario
            </p>
            <div class="line"></div>
          </div>
          <div class="Sec-1-boxes" id="box-2">
            <h3>
              Phones
            </h3>
            <p>
              +20 012 345 6789 - Office <br>
              +20 012 345 6789
            </p>
            <div class="line line-2"></div>
          </div>
          <div class="Sec-1-boxes" id="box-3">
            <h3>
              Email
            </h3>
            <p id="p-act">
              support@sitename.com <br>
              info@sitename.com <br>
            </p>
            <div class="line line-3"></div>
          </div>
          <div class="Sec-1-boxes" id="box-4">
            <h3>
              Follow Us
            </h3>
            <p>
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-square-twitter"></i>
              <i class="fa-brands fa-square-tumblr"></i> 
              <i class="fa-brands fa-linkedin"></i> 
              <i class="fa-brands fa-square-google-plus"></i>
            </p>
            <div class="line line-4"></div>
          </div>
        </section>
        <!--  End section-1 -->

        <!-- Start section-2 -->
        <section class="section-2">
          <h2>
            Get In Touch
          </h2>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, odit explicabo? <br>
            Recusandae deserunt aliquam earum aspernatur molestiae, <br>
            beatae nobis ipsum corporis fugiat.
          </p>
          <div class="sec-2-line"></div>
          <form action="function/handel_message.php" method="post">
            <input type="text" name="Full_Name"  placeholder="Full Name">
            <input type="email" name="email" placeholder="Email Address"> <br>
            <input type="text" name="text" placeholder="Type Here Message" id="massage"> <br>
            <input type="submit" name="submit" value="SEND MASSAGE" id="submit">
          </form>
          
        </section>
        <!--  End section-2 -->

        <!-- Start section-3 -->
        <section class="section-3">
          <div>
           <h2>
            The <span>Best</span> Solution for your Shopping
           </h2>
           <p>
             Browse for more ..
           </p>
          </div>
          <div>
           <a class="btn btn-secondary Sn-u" href="Categories.php">Make Order</a>
          </div>
         </section>
        <!-- End section-3 -->

<?php
include 'project_des/footer.php';
?>  
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/Contact Us.js"></script>
</body> 
</html>