<!-- Start Nav Bar -->
<nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="images/logo3.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./About us.php">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Categories.php">CATEGORIES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Contact Us.php">CONTACT US</a>
                  </li>
                </ul>
                
                <form action="./function/Search.php" method="post" class="d-flex">
                  <input class="form-control me-2" name="search" type="search" placeholder="Search in Category">
                  <button type="submit" name="submit" class="btn btn-light Search">
                   Search
                  </button>
                </form>

                <!-- <form action="" method="post"></form> -->
              </div>
            </div>
        </nav>
<!-- End Nav Bar -->