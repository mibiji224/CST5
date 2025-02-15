<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] != "admin") {
    header("Location: login.php");
    exit();
}
echo "<h1>Admin Dashboard</h1>";
echo "<p>Welcome, " . $_SESSION["username"] . "!</p>";
?>
<a href="logout.php">Logout</a>
