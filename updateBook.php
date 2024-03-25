<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<?php
include 'connectBook.php';
$id = $_GET['updateid'];
$sql = "select * from `book` where book_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['book_name'];
$email = $row['book_email'];
$phone = $row['book_phone'];
$address = $row['book_address'];
$location = $row['book_concert'];
$guests = $row['book_guests'];

if (isset($_POST['submit'])) {
    $name = $_POST['book_name'];
    $email = $_POST['book_email'];
    $phone = $_POST['book_phone'];
    $address = $_POST['book_address'];
    $location = $_POST['book_concert'];
    $guests = $_POST['book_guests'];

    $sql = "update `book` set book_id=$id, book_name='$name', book_email='$email', book_phone='$phone', book_address='$address', book_concert='$location', book_guests='$guests' where book_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
        header('location:displayBook.php');
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

    <title>Update book</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="book_name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="book_email" autocomplete="off" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="book_phone" autocomplete="off" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group">
                <label>address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="book_address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label>Guests</label>
                <input type="text" class="form-control" placeholder="Enter number of guests" name="book_guests" value="<?php echo $guests; ?>">
            </div>
            <div class="inputBox">
                <span>which concert :</span>
                <div style="position: relative;">
                    <!--   <input type="text" placeholder="which concert" name="book_location"> -->
                    <select name="book_concert" class="form-control">
                        <!--  <select name="book_concert" style="position: absolute; top: 0; right: 0; width: 100%; height:50px; font-size:1.5rem; border: 1px solid black;"> -->
                        <option value="">Select Concert</option>
                        <?php
                        // SQL query to select concert data from the concert table
                        $concert_query = "SELECT * FROM concert";
                        $concert_result = mysqli_query($con, $concert_query);

                        // Check if query was successful
                        if ($concert_result && mysqli_num_rows($concert_result) > 0) {
                            // Loop through each concert and populate dropdown options
                            while ($concert_row = mysqli_fetch_assoc($concert_result)) {
                                $concert_id = $concert_row['concert_id'];
                                $concert_name = $concert_row['concert_name'];
                                // Populate dropdown option with concert name
                                echo "<option value='$concert_id'>$concert_name</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>


            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Back</a></button>
        </form>
    </div>

</body>

</html>