<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectConcert.php';
if (isset($_POST['submit'])) {
    $name = $_POST['concert_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $artist = $_POST['artist_performing'];
    $ticket = $_POST['ticket_price'];

    $sql = "insert into `concert` (concert_name, date, time, artist_performing, ticket_price) 
    values ('$name', '$date', '$time', '$artist', '$ticket')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:displayConcert.php');
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

    <title>Create concert</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Concert Name</label>
                <input type="text" class="form-control" placeholder="Enter concert name" name="concert_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" placeholder="Enter the time" name="time" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Artist Performing</label>
                <input type="text" class="form-control" placeholder="Enter the artist performing" name="artist_performing" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Ticket Price</label>
                <input type="text" class="form-control" placeholder="Enter the ticket price" name="ticket_price" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>