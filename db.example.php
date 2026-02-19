<?php
/*
 | Example Database Configuration File
 | Rename this file to db.php and update credentials
 */

$host = "localhost";
$user = "your_db_user";
$password = "your_db_password";
$database = "restaurantdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
