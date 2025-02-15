<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Default is empty, change if needed
$dbname = "cce104";

$conn = new mysqli($servername, $username, $password, $cce104);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
