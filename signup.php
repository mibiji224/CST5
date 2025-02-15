<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact_number = $_POST["contact_number"];
    $id_number = $_POST["id_number"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = "user"; // Default role

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, contact_number, id_number, username, password, role) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $contact_number, $id_number, $username, $password, $role);
    
    if ($stmt->execute()) {
        header("Location: login.html"); // Redirect to login
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }
    

    $stmt->close();
}

$conn->close();
?>

