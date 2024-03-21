<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

session_start();

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from login where username = '" . $username . "' AND password = '" . $password . "'  ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "user") {
        $_SESSION["username"] = $username;
        header("location:home.php");
    } else if ($row["usertype"] == "admin") {
        $_SESSION["username"] = $username;
        header("location:adminhome.php");
    } else {
        echo "username or password incorrect";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        div {
            text-align: center;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

    <div>
        <h2>LOGIN FORM</h2><br><br><br><br>
        <div style="background-color:lavender; width:500px;">
            <br><br>
            <form action="#" method="POST">

                <div>
                    <label>username</label>
                    <input type="text" name="username" required>
                </div>
                <br><br>

                <div>
                    <label>password</label>
                    <input type="password" name="password" required>
                </div>
                <br><br>

                <div>
                    <input type="submit" value="Login">
                </div>
                <br><br>

            </form>
        </div>
    </div>

</body>

</html>