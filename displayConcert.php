<?php
include 'connectConcert.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display concert</title>
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
        <h1>CONCERTS</h1>
        <button class="btn btn-primary"><a href="createConcert.php" class="text-light">Add Concert</a></button>
        <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Concert Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Artist Performing</th>
                    <th scope="col">Ticket Price</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>



                <?php

                $sql = "select * from `concert`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['concert_id'];
                        $name = $row['concert_name'];
                        $date = $row['date'];
                        $time = $row['time'];
                        $artist = $row['artist_performing'];
                        $ticket = $row['ticket_price'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $date . '</td>
                        <td>' . $time . '</td>
                        <td>' . $artist . '</td>
                        <td>' . $ticket . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateConcert.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="deleteConcert.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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