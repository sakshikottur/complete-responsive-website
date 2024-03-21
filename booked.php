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
    <title>Services</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--header section starts-->

    <section class="header">

        <a href="home.php" class="logo">BEATBOX</a>

        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="booked.php">BOOKED</a>
            <a href="book.php">BOOK</a>
            <a href="logout.php">LOGOUT</a>


        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>

    <!--header ends here-->

    <div class="heading" style="background: url(images/header-bg-2.png) no-repeat; background-size:cover; background-position:center">
        <h1>DETAILS OF BOOKING</h1>

    </div>
    <div class="container my-5">
        <h2>List of CLients</h2>
        <a class="btn btn-primary" href="book.php" role="button">New Client</a>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Which concert</th>
                        <th>how many</th>


                    </tr>
                </thead>
                <tbody style="size: 50px;">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "book_db";

                    //create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    //check connection
                    if ($connection->connect_error) {
                        die("connection failed: " . $connection->connect_error);
                    }

                    //read all rows from database table
                    $sql = "SELECT * FROM book_form";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[location]</td>
                    <td>$row[guests]</td>
                    
    
                    
                </tr>
                    ";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>















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