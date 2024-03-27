<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact"; // Replace 'your_database_name' with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $cardName = $_POST["cardName"];
    $cardNum = $_POST["cardNum"];
    $expMonth = $_POST["expMonth"];
    $expYear = $_POST["expYear"];
    $cvv = $_POST["cvv"];

    // SQL statement to insert payment information into the database
    $sql = "INSERT INTO payments (full_name, email, address, city, state, zip, card_name, card_number, exp_month, exp_year, cvv, payment_time)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())"; // NOW() will insert the current timestamp

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $name, $email, $address, $city, $state, $zip, $cardName, $cardNum, $expMonth, $expYear, $cvv);

    // Execute SQL query
    if ($stmt->execute()) {
        // Redirect to the next page
        header("Location: Cart.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();

