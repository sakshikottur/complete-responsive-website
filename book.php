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
            <a href="services.php">SERVICES</a>
            <a href="gallary.php">GALLARY</a>
            <a href="book.php">BOOK</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>

    <!--header ends here-->

    <div class="heading" style="background: url(images/header-bg-1.png) no-repeat; background-size:cover; background-position:center">
        <h1>Book Now!!</h1>

    </div>

    <!--book section starts-->

    <section class="booking">
        <h1 class="heading-title">Grab your Tickets</h1>

        <form action="book_form.php" methot="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">


        </form>




    </section>




    <!--book section ends-->















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