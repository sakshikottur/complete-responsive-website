<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectArtist.php';
if (isset($_POST['submit'])) {
    $name = $_POST['artist_name'];
    $email = $_POST['artist_email'];
    $mobile = $_POST['artist_mobile'];
    $genre = $_POST['genre'];

    $sql = "insert into `artist` (artist_name, artist_email, artist_mobile, genre) 
    values ('$name', '$email', '$mobile', '$genre')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location:displayArtist.php');
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
                <label>Artist name</label>
                <input type="text" class="form-control" placeholder="Enter the Artist's name" name="artist_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Artist mail</label>
                <input type="email" class="form-control" placeholder="Enter the Artist's email" name="artist_email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Artist's mobile</label>
                <input type="text" class="form-control" placeholder="Enter the Artist's mobile number" name="artist_mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" class="form-control" placeholder="Enter the genre" name="genre" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>