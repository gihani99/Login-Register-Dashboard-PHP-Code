<?php
   session_start();
  
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
    <link rel="stylesheet" href="./css/home.css"/>

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
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>

<body>
     <div class="b" > 
     <img src="./images/b.jpg" style="height: 873px;">
    
    <nav>

        <div class="container">
            <img src="./images/logo.jpeg">

            <div class="menu">
                <a href="./display.php" class="is-active">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="index.php">Sign In </a> <a href="register.php" > Sign Up</a>
            </div>
        </div>

            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
</div>
</div>
  <div class="containe">
     <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="images/1.jpg"><img src="images/3.jpg"><img src="images/4.jpg"></div>
    <div class="swiper-slide"><img src="images/5.jpg"><img src="images/4.jpg"><img src="images/3.jpg"></div>
     <div class="swiper-slide"><img src="images/1.jpg"><img src="images/5.jpg"><img src="images/3.jpg"></div>
     
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div><br>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>

</div>



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper', {

  loop: true,

  pagination: {
    el: '.swiper-pagination',
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',


  },
});
</script>


    
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

     </div>
</body>

</html>