<?php

$con = new mysqli('localhost', 'root', '', 'concert_management');

if (!$con) {
    die(mysqli_error($con));
}
