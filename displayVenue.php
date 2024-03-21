<?php
include 'connectVenue.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display venue</title>
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
        <h1>VENUE</h1>
        <button class="btn btn-primary"><a href="createVenue.php" class="text-light">Add Venue</a></button>
        <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Venue Name</th>
                    <th scope="col">Venue Location</th>
                    <th scope="col">Seating Capacity</th>
                    <th scope="col">Contact Information</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>



                <?php

                $sql = "select * from `venue`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['venue_id'];
                        $name = $row['venue_name'];
                        $location = $row['venue_location'];
                        $seats = $row['seating_capacity'];
                        $contact = $row['contact_info'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $location . '</td>
                        <td>' . $seats . '</td>
                        <td>' . $contact . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateVenue.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="deleteVenue.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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