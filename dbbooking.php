<?php
// Database connection parameters
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

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $full_name = $_POST["full-name"];
    $gender = $_POST["gender"];
    $doctor_name = $_POST["doctor-name"];
    $age = $_POST["age"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $appointment_date = $_POST["appointment-date"];

    // SQL statement to insert booking information into the database
    $sql = "INSERT INTO booking (full_name, gender, doctor_name, age, city, state, appointment_date)
            VALUES ('$full_name', '$gender', '$doctor_name', '$age', '$city', '$state', '$appointment_date')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the next page
        header("Location: Payment.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
 
