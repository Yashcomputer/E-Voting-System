<?php
// Start session
session_start();

// Database connection settings
$servername = "localhost";  // Update if needed
$db_username = "root";  // Update if needed
$db_password = "";  // Update if needed
$dbname = "voting_db";  // Update if needed

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password for security

    // Insert the new user into the database
    $sql = "INSERT INTO users (username, password, type) VALUES ('$username', '$password', 2)";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful signup
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
