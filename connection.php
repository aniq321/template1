<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "test";
$connection = mysqli_connect($host, $user, $pass, $database);
if (!$connection) {
    echo "Error: " . mysqli_connect_error();
    exit();
}