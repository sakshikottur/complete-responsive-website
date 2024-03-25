<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectBook.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container my-5">
        <h1>Booking Details</h1>
        <button class="btn btn-primary"><a href="book.php" class="text-light">Add user</a></button>
        <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>



                <?php

                $sql = "select * from `book`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['book_id'];
                        $name = $row['book_name'];
                        $email = $row['book_email'];
                        $phone = $row['book_phone'];
                        $address = $row['book_address'];
                        $location = $row['book_concert'];
                        $guests = $row['book_guests'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $address . '</td>
                        <td>' . $location . '</td>
                        <td>' . $guests . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateBook.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="deleteBook.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }


                ?>



            </tbody>
        </table>
    </div>
</body>

</html>