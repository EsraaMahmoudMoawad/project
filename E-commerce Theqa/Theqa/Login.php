<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Login.CSS">
    <title>LOGIN</title>
</head>
<body>

        
        <section>
            <div>
                <h3>
                    LOGIN
                </h3>
                <form action="function/check_login.php" method="post">
                    <input type="email" name="email" placeholder="email"> <br>
                    <input type="password" name="password" placeholder="Password"> <br>
                    <p>
                        don't have account 
                        <a href="Register.php">Sign Up</a>
                    </p>
                    <input type="submit" name="submit">
                </form>
            </div>
        </section>

    
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body> 
</html>