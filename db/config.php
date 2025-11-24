<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS accessplus_db");

// Select DB
$conn->select_db("accessplus_db");

// Create table if not exists
$table_sql = "CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    usn VARCHAR(30),
    semester TINYINT,
    branch VARCHAR(50),
    email VARCHAR(100),
    volunteer VARCHAR(10),
    team_size TINYINT,
    event_name VARCHAR(150),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($table_sql);
?>
