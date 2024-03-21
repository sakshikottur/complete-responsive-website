<?php
include 'connectArtist.php';
$id = $_GET['updateid'];
$sql = "select * from `artist` where artist_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['artist_name'];
$email = $row['artist_email'];
$mobile = $row['artist_mobile'];
$genre = $row['genre'];

if (isset($_POST['submit'])) {
    $name = $_POST['artist_name'];
    $email = $_POST['artist_email'];
    $mobile = $_POST['artist_mobile'];
    $genre = $_POST['genre'];

    $sql = "update `artist` set artist_id=$id, artist_name='$name', artist_email='$email', artist_mobile='$mobile', genre='$genre' where artist_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
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

    <title>Update artist</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Artist Name</label>
                <input type="text" class="form-control" placeholder="Enter the artist's name" name="artist_name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Artist Email</label>
                <input type="email" class="form-control" placeholder="Enter the artist's email" name="artist_email" autocomplete="off" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Artist Mobile</label>
                <input type="text" class="form-control" placeholder="Enter the artist's mobile number" name="artist_mobile" autocomplete="off" value="<?php echo $mobile; ?>">
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" class="form-control" placeholder="Enter the genre" name="genre" value="<?php echo $genre; ?>">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>