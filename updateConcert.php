<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectConcert.php';
$id = $_GET['updateid'];
$sql = "select * from `concert` where concert_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['concert_name'];
$date = $row['date'];
$time = $row['time'];
$artist = $row['artist_performing'];
$ticket = $row['ticket_price'];

if (isset($_POST['submit'])) {
    $name = $_POST['concert_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $artist = $_POST['artist_performing'];
    $ticket = $_POST['ticket_price'];

    $sql = "update `concert` set concert_id=$id, concert_name='$name', date='$date', time='$time', artist_performing='$artist', ticket_price='$ticket' where concert_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
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

    <title>Update concert</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Concert Name</label>
                <input type="text" class="form-control" placeholder="Enter the concert name" name="concert_name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date" autocomplete="off" value="<?php echo $date; ?>">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" placeholder="Enter the time" name="time" autocomplete="off" value="<?php echo $time; ?>">
            </div>
            <div class="form-group">
                <label>Artist Performing</label>
                <input type="text" class="form-control" placeholder="Enter the artist performing" name="artist_performing" value="<?php echo $artist; ?>">
            </div>
            <div class="form-group">
                <label>Ticket Price</label>
                <input type="text" class="form-control" placeholder="Enter the ticket price" name="ticket_price" value="<?php echo $ticket; ?>">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>