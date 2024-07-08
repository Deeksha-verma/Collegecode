<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Code</title>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="./css/style.css">

    <!--alertify js -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-lightbulb"></i>CollegeCode</a>
        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="#firstsection">Home</a>
            <a href="about.php">About Us</a>
            <a href="service.php">Services</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="icons">
            <?php 
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
              {
                echo "<div class='user'> hello $_SESSION[username] <a href=logout.php >logout</a></div>";
              }
              else{
                echo "<div id='account-btn' class='fas fa-user'></div>";
              }
            ?>

            
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    
    


    <!--account form section starts-->
    <div class="account-form">
        <div id="close-form" class="fas fa-times"></div>
        <div class="buttons">
            <span class="btn active login-btn">Login</span>
            <span class="btn register-btn">Register</span>
        </div>
        <form class="login-form active" id="login-popup" action="config.php" method="POST">
            <h3>Login now</h3>
            
            <label for="email"></label>
            <input type="text" placeholder="enter email or username" class="box" id="email" name="email">
            
            
            <label for="password"></label>
            <input type="password" placeholder="enter your password" class="box" id="password" name="password">
            
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="forgotpass.php">forgot password?</a>
            </div>
            <input type="submit" value="login now" name="login" class="btn">
        </form>

        <!-- // ==signup== -->
        
        
       
        <form class="register-form" action="config.php" method="POST">
            <h3>Register now</h3>
            
            <label for="name"></label>
            <input type="text" placeholder="enter your full name" class="box" id="name" name="name">

            <label for="username"></label>
            <input type="text" placeholder="enter your user name" class="box" id="username" name="username">
            
            
            <label for="email"></label>
            <input type="text" placeholder="enter your email" class="box" id="email" name="email">
            
            
            <label for="password"></label>
            <input type="password" placeholder="enter your password" class="box" id="password" name="password">
           
            
            <input type="submit" value="register now" name="register" class="btn">
        </form>
    </div>

    
<!--home section starts-->
<section class="home">
    <div class=" swiper home-slider">
        <div class="swiper-wrapper">
            <section class=" swiper-slide slide" style="background: url(./image/f1.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>learn more achieve more</p>
                    
                    <a href="home.php" class="btn">Get Started</a>
                </div>

            </section>

            <section class=" swiper-slide slide" style="background: url(./image/back.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="home.php" class="btn">Get Started</a>
                </div>

            </section>

            <section class=" swiper-slide slide" style="background: url(./image/f3.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="home.php" class="btn">Get Started</a>
                </div>

            </section>
        </div>

        <div class="swiper-pagination"></div>
        
    </div>
</section>




<!--subject section starts-->
<section class="subjects"> 
    <h1 class="heading">Awesome Features</h1>
    <div class="box-container"> 
        <div class="box">
            <img src="./image/notebook.png" alt="">
            <h3>Hand Written Notes</h3>
            <p>Grab these best handwritten notes.</p>
            <a href="download.php" class="btn">Get notes</a>
        </div>

        <div class="box">
            <img src="./image/confidence.png" alt="">
            <h3>PDP Course</h3>
            <p>Groom your personality with this PDP Course.</p>
        </div>

        <div class="box">
            <img src="./image/aptitude.png" alt="">
            <h3>Aptitude Practice</h3>
            <p>Pass your Aptitude Round these Practice Material.</p>
        </div>

        <div class="box">
            <img src="./image/test.png" alt="">
            <h3>PYQs</h3>
            <p>get hint about the questions that comes in your Exams.</p>
        </div>

    </div>
</section>

<!--home courses slider section starts-->
<section class="home-courses">
    <h1 class="heading"> Our Freelance Services </h1>
   <div class=" swiper home-courses-slider">

    <div class="swiper-wrapper">

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="./image/3426526.jpg" alt="">
                <h3>Website Developement</h3>
            </div>
            <div class="content">
                <h3>Website Developement</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="service.php" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="./image/5449686.jpg" alt="">
                <h3>Translation Work</h3>
            </div>
            <div class="content">
                <h3>Translation Work</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="service.php" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="./image/4562.jpg" alt="">
                <h3>Excel Work</h3>
            </div>
            <div class="content">
                <h3>Excel Work</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="service.php" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="./image/8767132.jpg" alt="">
                <h3>Content Writing</h3>
            </div>
            <div class="content">
                <h3>Content Writing</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="service.php" class="btn">Read More</a>
            </div>
        </div>
    </div>
   </div> 
</section>
     
<!--footer section-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3><i class="fas fa-lightbulb"></i> CollegeCode </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ab dicta illum iste dignissimos commodi et optio suscipit voluptatem.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php" class="link">Home</a>
            <a href="about.php" class="link">About Us</a>
            <a href="service.php" class="link">Services</a>
            <a href="contact.php" class="link">Contact Us</a>
        </div>
        <div class="box">
            <h3>Useful Links</h3>
            <a href="privacy.php" class="link">Privacy Policy</a>
            <a href="contact.php" class="link">Ask Questions</a>
            <a href="service.php" class="link">Hire Freelancer</a>
            <a href="termsuse.php" class="link">Terms OF Use</a>
            <a href="#" class="link">Send Feedback</a>
        </div>
        <div class="box">
            <h3>NewsLetter</h3>
            <p>Subscribe For Latest Updates</p>
            <form action="config1.php" method="POST">
                <label for="email"></label>
                <input type="text" placeholder="enter your email" class="email" id="email" name="email">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>
    </div>

    <div class="credit">Created By <span>Admin</span> | all rights reserved!</div>
</section>







<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
<script src="./javascript/script.js"></script>
</body>
</html>