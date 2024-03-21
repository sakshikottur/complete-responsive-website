<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">




    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--header section starts-->

    <section class="header">

        <a href="home.php" class="logo">BEATBOX</a>

        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="displayConcert1.php">CONCERTS</a>
            <a href="book.php">BOOK</a>
            <a href="logout.php">LOGOUT</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>

    <!--header ends here-->

    <div class="heading" style="background: url(images/header-bg-3.png) no-repeat; background-size:cover; background-position:center">
        <h1>about us</h1>

    </div>

    <!--about us section starts here-->

    <section class="about">
        <div class="image">
            <img src="images\about image.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us</h3>
            <p>Choose us for your concert needs and unlock a world of seamless experiences and unparalleled expertise. With a passion for curating unforgettable events, we blend creativity with meticulous planning to bring your vision to life</p>
            <p>Our team's dedication ensures every detail, from artist selection to venue logistics, is executed flawlessly, allowing you to focus on what truly matters – creating magical moments for our audience. </p>
            <div class="icons-container">
                <i class="fas fa-hand-holding-usd">
                    <span>affordable price</span>
                </i>
            </div>
            <div class="icons">
                <i class="fas fa-headset">
                    <span>24/7 guide service</span>
                </i>
            </div>
        </div>
    </section>

    <!--about us section ends here-->

    <!--review section starts here-->

    <section class="reviews">

        <div class="reviews-slider">

            <div class="w">

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p> I've worked with numerous concert management companies, but none have matched the professionalism and attention to detail of BEATBOX. Their team made the entire process seamless</p>
                    <h3>John deo</h3>
                    <span>Traveller</span>
                    <img src="images\pic-1.png" alt="">
                </div>

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"I've been attending concerts for years, and I have to say, the ones managed by BEATBOX stand out. The lineup is always top-notch, and the atmosphere they create is electric. Can't wait for the next one!"</p>
                    <h3>David Smith</h3>
                    <span>Artist</span>
                    <img src="images\pic-2.png" alt="">
                </div>

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I really enjoyed a lot. wonderfull experiences with BEATBOX production..</p>
                    <h3>Emily Brown</h3>
                    <span>Student</span>
                    <img src="images\pic-3.png" alt="">
                </div>

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p> "The venue was perfect, the sound quality impeccable, and the overall vibe was fantastic. Kudos to the team for putting together such a memorable event!"</p>
                    <h3>Jessica Wilson</h3>
                    <span>Fashion designer</span>
                    <img src="images\pic-4.png" alt="">
                </div>

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"I recently attended a concert organized by them and it was an unforgettable experience"</p>
                    <h3>Travis</h3>
                    <span>Student</span>
                    <img src="images\pic-5.png" alt="">
                </div>

                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <p>"I've been attending concerts for years, and I have to say, the ones managed by BEATBOX stand out. The lineup is always top-notch, and the atmosphere they create is electric. Can't wait for the next one!" HIGHLY RECOMANDED..</p>
                    <h3>Peter</h3>
                    <span>Software Engineer</span>
                    <img src="images\pic-6.png" alt="">
                </div>




            </div>

        </div>

    </section>


    <!--review section ends here-->
















    <!-- footer section starts -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>QUICK LINKS</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> HOME</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> ABOUT</a>
                <a href="services.php"> <i class="fas fa-angle-right"></i> SERVICES</a>
                <a href="gallary.php"> <i class="fas fa-angle-right"></i> GALLARY</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> BOOK</a>
            </div>

            <div class="box">
                <h3>EXTRA LINKS</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ASK QUESTIONS</a>
                <a href="#"> <i class="fas fa-angle-right"></i> ABOUT US</a>
                <a href="#"> <i class="fas fa-angle-right"></i> PRIVACY POLICY</a>
                <a href="#"> <i class="fas fa-angle-right"></i> TERMS OF USE</a>

            </div>

            <div class="box">
                <h3>CONTACT INFO</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> harshitha@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> sakshi@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> BALLARI, KARNATAKA - 583104</a>


            </div>

            <div class="box">
                <h3>FOLLOW US</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>

            </div>

        </div>

        <div class="credit"> created by <span>B.H.HARSHITHA AND SAKSHI.K</span> | all rights reserved! </div>

    </section>


    <!-- footer section ends -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="js/script.js">

    </script>

</body>

</html>