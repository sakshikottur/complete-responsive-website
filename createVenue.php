<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectVenue.php';
if (isset($_POST['submit'])) {
    $name = $_POST['venue_name'];
    $location = $_POST['venue_location'];
    $seats = $_POST['seating_capacity'];
    $contact = $_POST['contact_info'];

    $sql = "insert into `venue` (venue_name, venue_location, seating_capacity, contact_info) 
    values ('$name', '$location', '$seats', '$contact')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location:displayVenue.php');
    } else {
        die(mysqli_error($con));
    }
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Create venue</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Venue Name</label>
                <input type="text" class="form-control" placeholder="Enter venue name" name="venue_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Venue Location</label>
                <input type="text" class="form-control" placeholder="Enter venue location" name="venue_location" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Seating Capacity</label>
                <input type="text" class="form-control" placeholder="Enter number of seats" name="seating_capacity" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Contact Information</label>
                <input type="text" class="form-control" placeholder="Enter contact information" name="contact_info" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>