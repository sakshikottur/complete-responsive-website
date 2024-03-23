<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <!--  <span class="material-icons-outlined">search</span>-->
                <a href="admin.php" style=" font-size: 2rem; color: black;">BEATBOX</a>
            </div>
            <div class="header-right">
                <!--  <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
                <a href="logout.php"><span class="material-icons-outlined">logout</span></a> -->
                <a href="logout.php" style="color: black;">LOGOUT</a>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">inventory</span> BEATBOX
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="admin.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="displayBook.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Booking Details
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="displayConcert.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Concerts
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="displayVenue.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Venue
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="displayArtist.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Artists
                    </a>
                </li>

            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <!-- <div class="main-title">
                <p class="font-weight-bold">DASHBOARD</p>
            </div> -->

            <div class="container">
                <h1>DASHBOARD</h1>

                <div class="flex-container">
                    <a href="displayBook.php">
                        <div class="flex-box">
                            Booking Details
                        </div>
                    </a>
                    <a href="displayConcert.php">
                        <div class="flex-box">
                            Concerts
                        </div>
                    </a>
                    <a href="displayVenue.php">
                        <div class="flex-box">
                            Venue
                        </div>
                    </a>
                    <a href="displayArtist.php">
                        <div class="flex-box">
                            Artists
                        </div>
                    </a>

                </div>

            </div>



























        </main>
        <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
</body>

</html>