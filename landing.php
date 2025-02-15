<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] != "user") {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome to the Landing Page, " . $_SESSION["username"] . "!</h1>";
?>
<a href="logout.php">Logout</a>
