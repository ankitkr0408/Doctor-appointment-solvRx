<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';

// Prepare SQL query (using prepared statement to prevent SQL injection)
$sql = "INSERT INTO feedback (name, email, subject) VALUES (?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $subject);

// Execute SQL query
if ($stmt->execute()) {
    echo "Your Feedback Sent Successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();




