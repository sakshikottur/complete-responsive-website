<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


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
    <title>Display concert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">



    <link rel="stylesheet" href="css/style.css">

    <style>
        .table {
            width: 100%;
            font-size: 16px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle !important;
        }
    </style>

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

    <div class="heading" style="background: url(images/header-bg-book1.jpg) no-repeat; background-size:cover; height: 250px ;background-position:center">
        <h1>Book Now!!</h1>

    </div>

    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Concert Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Artist Performing</th>
                        <th scope="col">Ticket Price</th>

                    </tr>
                </thead>
                <tbody>



                    <?php

                    $sql = "select * from `concert`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['concert_id'];
                            $name = $row['concert_name'];
                            $date = $row['date'];
                            $time = $row['time'];
                            $artist = $row['artist_performing'];
                            $ticket = $row['ticket_price'];
                            echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $date . '</td>
                        <td>' . $time . '</td>
                        <td>' . $artist . '</td>
                        <td>' . $ticket . '</td>
                        <td>
                        </td>
                    </tr>';
                        }
                    }


                    ?>



                </tbody>
            </table>
        </div>
    </div>

    <!-- footer section starts 
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


    footer section ends -->

</body>

</html>