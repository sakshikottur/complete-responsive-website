<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectVenue.php';
$id = $_GET['updateid'];
$sql = "select * from `venue` where venue_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['venue_name'];
$location = $row['venue_location'];
$seats = $row['seating_capacity'];
$contact = $row['contact_info'];

if (isset($_POST['submit'])) {
    $name = $_POST['venue_name'];
    $location = $_POST['venue_location'];
    $seats = $_POST['seating_capacity'];
    $contact = $_POST['contact_info'];

    $sql = "update `venue` set venue_id=$id, venue_name='$name', venue_location='$location', seating_capacity='$seats', contact_info='$contact' where venue_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
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

    <title>Update venue</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Venue Name</label>
                <input type="text" class="form-control" placeholder="Enter the venue name" name="venue_name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Venue Location</label>
                <input type="text" class="form-control" placeholder="Enter the venue location" name="venue_location" autocomplete="off" value="<?php echo $location; ?>">
            </div>
            <div class="form-group">
                <label>Seating Capacity</label>
                <input type="text" class="form-control" placeholder="Enter the seating capacity" name="seating_capacity" autocomplete="off" value="<?php echo $seats; ?>">
            </div>
            <div class="form-group">
                <label>Contact Information</label>
                <input type="text" class="form-control" placeholder="Enter the contact info" name="contact_info" value="<?php echo $contact; ?>">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>