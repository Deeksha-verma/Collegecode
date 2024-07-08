<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: home.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college code</title>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="./css/style.css">

    
</head>
<body>
    <header class="header">
        <class="logo"><i class="fas fa-lightbulb"></i>CollegeCode</a>
        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="service.html">Services</a>
            <a href="contact.html">Contact</a>
        </nav>
        <div class="icons">
            <div id="account-btn" class="fas fa-user"></div>
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
        <form class="login-form active" action="">
            <h3>Login now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="#">forgot password?</a>
            </div>
            <input type="submit" value="login now" class="btn">
        </form>

        <form class="register-form" action="">
            <h3>Register now</h3>
            <input type="name" placeholder="enter your name" class="box">
            
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            
            <input type="submit" value="register now" class="btn">
        </form>
    </div>
<!--home section starts-->
<section class="home">
    <div class=" swiper home-slider">
        <div class="swiper-wrapper">
            <section class=" swiper-slide slide" style="background: url(./images/f1.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">Get Started</a>
                </div>

            </section>

            <section class=" swiper-slide slide" style="background: url(./images/back.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">Get Started</a>
                </div>

            </section>

            <section class=" swiper-slide slide" style="background: url(./images/f3.jpg) no-repeat;">
                <div class="content">
                    <h3>Enhance Your career with CollegeCode!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">Get Started</a>
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
            <img src="images/notebook.png" alt="">
            <h3>Hand Written Notes</h3>
            <p>Grab these best handwritten notes.</p>
            
        </div>

        <div class="box">
            <img src="images/confidence.png" alt="">
            <h3>PDP Course</h3>
            <p>Groom your personality with this PDP Course.</p>
        </div>

        <div class="box">
            <img src="images/aptitude.png" alt="">
            <h3>Aptitude Practice</h3>
            <p>Pass your Aptitude Round these Practice Material.</p>
        </div>

        <div class="box">
            <img src="images/test.png" alt="">
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
                <img src="images/3426526.jpg" alt="">
                <h3>Website Developement</h3>
            </div>
            <div class="content">
                <h3>Website Developement</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="images/5449686.jpg" alt="">
                <h3>Translation Work</h3>
            </div>
            <div class="content">
                <h3>Translation Work</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="images/4562.jpg" alt="">
                <h3>Excel Work</h3>
            </div>
            <div class="content">
                <h3>Excel Work</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class=" swiper-slide slide">
            <div class="image">
                <img src="images/8767132.jpg" alt="">
                <h3>Content Writing</h3>
            </div>
            <div class="content">
                <h3>Content Writing</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn">Read More</a>
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
            <a href="home.html" class="link">Home</a>
            <a href="about.html" class="link">About Us</a>
            <a href="service.html" class="link">Services</a>
            <a href="contact.html" class="link">Contact Us</a>
        </div>
        <div class="box">
            <h3>Useful Links</h3>
            <a href="#" class="link">Privacy Policy</a>
            <a href="#" class="link">Ask Questions</a>
            <a href="#" class="link">Hire Freelancer</a>
            <a href="#" class="link">Terms OF Use</a>
            <a href="#" class="link">Send Feedback</a>
        </div>
        <div class="box">
            <h3>NewsLetter</h3>
            <p>Subscribe For Latest Updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>
    </div>

    <div class="credit">Created By <span>Admin</span> | all rights reserved!</div>
</section>


    <!-- // ==userlogin== -->
    <?php 
                if (isset($_POST['user_login_submit'])) {
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];

                    $sql = "SELECT * FROM signup WHERE Email = '$Email' AND Password = BINARY'$Password'";
                    $result = mysqli_query($con, $sql);

                    if ($result->num_rows > 0) {
                        $_SESSION['usermail']=$Email;
                        $Email = "";
                        $Password = "";
                        header("Location: home.php");
                    } else {
                        echo "<script>swal({
                            title: 'Something went wrong',
                            icon: 'error',
                        });
                        </script>";
                    }
                }
                ?>
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input typuser_logine="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <button type="submit" name="user_login_submit" class="auth_btn">Log in</button>

                    <div class="footer_line">
                        <h6>Don't have an account? <span class="page_move_btn" onclick="signuppage()">sign up</span></h6>
                    </div>
                </form>
                            <!--============ signup =============-->
            <?php       
                if (isset($_POST['user_signup_submit'])) {
                    $name = $_POST['name'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                }


                    if($name == "" || $Email == "" || $Password == ""){
                        echo "<script>swal({
                            title: 'Fill the proper details',
                            icon: 'error',
                        });
                        </script>";
                    
                    
    
                            if ($result->num_rows > 0) {
                                echo "<script>swal({
                                    title: 'Email already exits',
                                    icon: 'error',
                                });
                                </script>";
                            } else {
                                $sql = "INSERT INTO signup (name,Email,Password) VALUES ('$name', '$Email', '$Password')";
                                $result = mysqli_query($con, $sql);
    
                                if ($result) {
                                    $_SESSION['usermail']=$Email;
                                    $name = "";
                                    $Email = "";
                                    $Password = "";
                                   
                                    header("Location: home.php");
                                } else {
                                    echo "<script>swal({
                                        title: 'Something went wrong',
                                        icon: 'error',
                                    });
                                    </script>";
                                }
                            }
                        } 
                    
                    
                
            ?>
            <div id="sign_up">
                <h2>Sign Up</h2>

                <form class="user_signup" id="usersignup" action="functions/authcode.php" method="POST">
                    <div class="register-form" >
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    

                    <button type="submit" name="user_signup_submit" class="auth_btn">Sign up</button>

                    <div class="footer_line">
                        <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span></h6>
                    </div>
                </form>
            </div>
    </section>
</body>

<script src="./javascript/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>