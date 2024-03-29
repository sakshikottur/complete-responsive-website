<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>

<?php
include 'connectConcert.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

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

    <div class="heading" style="background: url(images/header-bg-book1.jpg) no-repeat; background-size:cover; height: 500px ;background-position:center">
        <h1>Book Now!!</h1>

    </div>

    <!--book section starts-->

    <section class="booking">
        <h1 class="heading-title">Grab your Tickets</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="book_name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="book_email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="book_phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="book_address">
                </div>
                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="number of guests" name="book_guests">
                </div>

                <div class="inputBox">
                    <span>which concert :</span>
                    <div style="position: relative;">
                        <!--   <input type="text" placeholder="which concert" name="book_location"> -->
                        <select name="book_concert" style="width: 100%; padding: 1.2rem 1.4rem; font-size: 1.6rem; color: var(--light-black); text-transform: none; margin-top: 1.5rem; border: var(--border);">
                            <!--  <select name="book_concert" style="position: absolute; top: 0; right: 0; width: 100%; height:50px; font-size:1.5rem; border: 1px solid black;"> -->
                            <option value="">Select Concert</option>
                            <?php
                            // SQL query to select concert data from the concert table
                            $concert_query = "SELECT * FROM concert";
                            $concert_result = mysqli_query($con, $concert_query);

                            // Check if query was successful
                            if ($concert_result && mysqli_num_rows($concert_result) > 0) {
                                // Loop through each concert and populate dropdown options
                                while ($concert_row = mysqli_fetch_assoc($concert_result)) {
                                    $concert_id = $concert_row['concert_id'];
                                    $concert_name = $concert_row['concert_name'];
                                    // Populate dropdown option with concert name
                                    echo "<option value='$concert_id'>$concert_name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
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