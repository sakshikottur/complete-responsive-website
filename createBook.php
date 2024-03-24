<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>

<?php
include 'connectBook.php';
if (isset($_POST['submit'])) {
    $name = $_POST['book_name'];
    $email = $_POST['book_email'];
    $phone = $_POST['book_phone'];
    $address = $_POST['book_address'];
    $location = $_POST['book_location'];
    $guests = $_POST['book_guests'];

    $sql = "insert into `book` (book_name, book_email, book_phone, book_address, book_location, book_guests) 
    values ('$name', '$email', '$phone', '$address', '$location', '$guests')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
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

    <title>Create artist</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="book_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="book_email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="book_phone" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="book_address" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Concert</label>
                <input type="text" class="form-control" placeholder="Enter which concert you want to attend" name="book_location" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Guests</label>
                <input type="number" class="form-control" placeholder="Enter number of guests" name="book_guests" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>