<?php
$host = 'localhost';
$username = 'root'; // Default XAMPP username
$password = '';     // Default XAMPP password
$database = 'crud_app';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>