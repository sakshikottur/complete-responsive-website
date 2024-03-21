<?php

$connection = mysqli_connect('localhost', 'root', '', 'user');

if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];




    $request = " insert into book_form(username, password, usertype ) values
        ('$username','$password','$usertype')";

    mysqli_query($connection, $request);

    header('location:user.php');
} else {
    echo 'something went wrong. Try again!';
}
