<?php
     session_start();
     require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Site title</title>
    <!--Link JS file-->
    <script src="/scripts/scrip.js"></script>
    <!-- Link CSS file -->
    <link rel="stylesheet" href="./css/homepage.css" />
    <link rel="stylesheet" href="./css/loginRegister.css" />

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />

    <!-- Add google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,300&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav>
        <div class="container">
            <img src="./images/logo.jpeg">

            <div class="menu">
                <a href="display.php">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="register.php" class="is-active">Sign In </a> <a href="register.php"> Sign Up</a>
            </div>

            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
    <div class="contetnt-body">
        <div class="box-content">
            <div class="body-data-container">
                <div class="container-comp">
                    <img src="./images/logo.jpeg">

                    <div class="menu">
                        <a href="index.php" class="is-active">Login</a>
                        <a href="register.php">Sign Up</a>
                    </div>
                </div>

                <div class="login-header">
                    <span>SIGN IN</span>
                    <br>
                    <span>Sign in to continue to over app </span>
                </div>

                <form class="flex-c" method="POST" action="index.php">
                   
                    <div class="input-box">
                        <span class="label">Email</span>
                        <div class=" flex-r input">
                            <input type="text" name="email" id="email" placeholder="Email" required/>
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>

                    <div class="input-box">
                        <span class="label">Password</span>
                        <div class="flex-r input">
                            <input type="password" name="password" id="password" placeholder="Password" required/>
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="check">
                        <a href="">
                            <span>Forgot password?</span>
                        </a>
                    </div>
                   
                    <input class="btn" type="submit" value="Sign In" name="login"  />
                </form>
<?php
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="select * from user where email='$email' AND password='$password'";

        $query_run = mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            $_SESSION['email']=$email;
            header('location: home.php');

        }else
        {
            echo '<script type="text/javascript" > alert("Invalid credentials") </script>';
        }
    }
?>
</div>

<div class="login-image">
                <img src="./images/img1.jpeg">
            </div>
        </div>
    </div>
    <footer>
        <div class="sosial-icons">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
        </div>
        <div class="inrto-ftr">
            <span>Copyright@2022 Footer</span>
            <br>
            <span>All rights reserved</span>

        </div>
    </footer>
     

</body>



</html>