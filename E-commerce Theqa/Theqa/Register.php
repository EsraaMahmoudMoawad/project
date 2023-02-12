<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Register.CSS">
    <title>SIGN UP</title>
</head>
<body>     
       <!-- Start section - 1 signup --> 
        <section class="Sign-up">
          <h3>
              Sign Up 
          </h3>
          <form action="function/Register.php" method="post">
              <input type="text" name="user_name" placeholder="Username"> <br>
              <input type="tel" name="phone" placeholder="Phone Number"> <br>
              <input type="email" name="email" placeholder="Email Address"> <br>
              <input type="password" name="password" placeholder="Password"> <br>
              <input type="password" name="password" placeholder=" Confirm Password"> <br>
              <input type="File" name="file" placeholder="your photo"> <br>
              <button  type="submit" name="submit">Register</button> 
          </form>

        </section>
      <!-- End section - 1 signup --> 
</body> 
</html>