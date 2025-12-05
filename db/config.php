<?php
$servername = "localhost";
$username = "accessplus_user";
$password = "access@123";
$dbname = "accessplus_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
