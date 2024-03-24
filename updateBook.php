<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectBook.php';
$id = $_GET['updateid'];
$sql = "select * from `book` where book_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['book_name'];
$email = $row['book_email'];
$phone = $row['book_phone'];
$address = $row['book_address'];
$location = $row['book_location'];
$guests = $row['book_guests'];

if (isset($_POST['submit'])) {
    $name = $_POST['book_name'];
    $email = $_POST['book_email'];
    $phone = $_POST['book_phone'];
    $address = $_POST['book_address'];
    $location = $_POST['book_location'];
    $guests = $_POST['book_guests'];

    $sql = "update `book` set book_id=$id, book_name='$name', book_email='$email', book_phone='$phone', book_address='$address', book_location='$location', book_guests='$guests' where book_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
        header('location:displayBook.php');
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

    <title>Update book</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="book_name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="book_email" autocomplete="off" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="book_phone" autocomplete="off" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group">
                <label>address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="book_address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter your location" name="book_location" value="<?php echo $location; ?>">
            </div>
            <div class="form-group">
                <label>Guests</label>
                <input type="text" class="form-control" placeholder="Enter number of guests" name="book_guests" value="<?php echo $guests; ?>">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>