<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectArtist.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display artist</title>
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
        <h1>Artists</h1>
        <button class="btn btn-primary"><a href="createArtist.php" class="text-light">Add user</a></button>
        <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Artist Name</th>
                    <th scope="col">Artist Email</th>
                    <th scope="col">Artist Mobile</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>



                <?php

                $sql = "select * from `artist`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['artist_id'];
                        $name = $row['artist_name'];
                        $email = $row['artist_email'];
                        $mobile = $row['artist_mobile'];
                        $genre = $row['genre'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $genre . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateArtist.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="deleteArtist.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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