<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'concert_management');

if (isset($_POST['send'])) {
    $name = $_POST['book_name'];
    $email = $_POST['book_email'];
    $phone = $_POST['book_phone'];
    $address = $_POST['book_address'];
    $location = $_POST['book_location'];
    $guests = $_POST['book_guests'];



    $sql = " insert into book(book_name, book_email, book_phone, book_address, book_location, book_guests ) values
        ('$name','$email','$phone','$address','$location','$guests')";

    mysqli_query($con, $sql);

    header('location:book.php');
} else {
    echo 'something went wrong. Try again!';
}
