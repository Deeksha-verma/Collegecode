<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="./css/style.css">

    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-lightbulb"></i>CollegeCode</a>
        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="service.php">Services</a>
            <a href="contact.php">Contact</a>
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
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <input type="password" placeholder="confirm your password" class="box">
            
            <input type="submit" value="register now" class="btn">
        </form>
    </div>

<section class="heading-link">
    <h3>Contact Us</h3>
    <p><a href="home.php">Home</a> / contact </p>
</section>

<section class="contact">
    <h1 class="heading">Get In Touch</h1>
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-clock"></i>
            <h3>Opening Hours :</h3>
            <p>00:07am to 00:06pm</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>Phone :</h3>
            <p>+91xxxxxxxx</p>
            <p>+91xxxxxxxx</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>Email :</h3>
            <p>karaXXXXX@gmail.com</p>
            <p>deeksXXX@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map"></i>
            <h3>Address :</h3>
            <p>Agra, India - 282005</p>
        </div>
    </div>
    <div class="row">
        <div class="image">
            <img src="./image/contact.jpg" alt="">
        </div>

        <form action="config2.php" method="POST">
            <h3>Send Us A  Message</h3>
            <label for="name"></label>
            <input type="text" placeholder="Name" class="box" id="name" name="name">
        
            <label for="email"></label>
            <input type="text" placeholder="Email" class="box" id="email" name="email">

            <label for="phone"></label>
            <input type="text" placeholder="Phone" class="box" id="phone" name="phone">

            <label for="message"></label>
            <textarea type="text" class="box" placeholder="Message" id="message" cols="30" rows="10" name="message"></textarea>
            <input type="submit" value="Send Message" class="btn">

        </form>
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
            <a href="service,php" class="link">Hire Freelancer</a>
            <a href="termsuse.php" class="link">Terms OF Use</a>
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






<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
<script src="./javascript/script.js"></script>
</body>
</html>