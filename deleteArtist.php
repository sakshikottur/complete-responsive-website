<?php
include 'connectArtist.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `artist` where artist_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Deleted successfully";
        header("location:displayArtist.php");
    } else {
        die(mysqli_error($con));
    }
}
