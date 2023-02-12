<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/About Us.css">
    <title>About us</title>
</head>
<body>
<?php
include 'project_des/Header.php';
include 'project_des/Nav.php'; 
?>
        <!-- Start section-1 -->
        <section class="section-1 text-center">
          <h1>
           <span>C</span>reative Digital Agency
          </h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, <br>
            earum, fuga blanditiis placeat aperiam dicta sit error rem <br>
            pariatur corrupti voluptatum!.
          </p>
          <div class="line"></div>
        </section>
        <!-- End section-1 -->

        <!-- Start section-2 -->
        <section class="section-2">
          <div class="img">
            <img src="images/Agency.jpg" alt="Error">
          </div>
          <div>
            <h3>
              Saqah Agency
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
              Minima quaerat sed amet esse mollitia a quo qui, <br>
              iste possimus fugit. <br>
            </p>
            <p>
              <button class="btn btn-light button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
               See more
              </button>
            </p>
            <div style="min-height: 120px;">
              <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body" style="width: 300px;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci harum fugit voluptatibus, <br>
                  officia a brexercitationem error commodi animi incidunt perspiciatis ipsam impedit <br>
                  nostrum sunt at, ullam eum iusto expedita provident!
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End section-2 -->
        

        <!-- Start section-3 -->
        <section class="section-3">
          <div>
            <h3>
              Why Choose Us
            </h3>
            <div class="lin"></div>
            <p class="p1">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.  <br>
              Amet eum, ipsum deserunt aliquam totam  <br>
              doloribus nisi sed pariatur <br>
              similique enim, <br>
            </p>
            <p class="p2">
              <i class="fa-solid fa-check active icon"></i> dolor sit amet consectetur adipisicing <br>
              <i class="fa-solid fa-check active icon"></i> ipsum deserunt aliquam totam doloribus <br>
              <i class="fa-solid fa-check active icon"></i> pariatur similique enim, dignissimos <br>
              <i class="fa-solid fa-check active icon"></i> Dolore error similique libero numquam <br>
              <i class="fa-solid fa-check active icon"></i> sed pariatur similique enim, dignissimos
            </p>
          </div>
          <div>
            <h3>
              Our Services
            </h3>
            <div class="lin"></div>
            <button type="button" class="btn btn-light bu">
              Our Technology
            </button> <br>
            <button type="button" class="btn btn-light bu">
              Our Mission
            </button>
          </div>
        </section>
        <!-- End section-2 -->

        <!-- Start section-4 -->
        <section class="section-4">
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