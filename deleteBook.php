<?php
include 'connectBook.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `book` where book_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Deleted successfully";
        header("location:displayBook.php");
    } else {
        die(mysqli_error($con));
    }
}
