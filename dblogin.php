<?php
// Replace these values with your actual database connection credentials
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

// Login functionality
if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password for comparison
  $hashed_password = hash('sha256', $password); // Example hashing method (not recommended for production)

  // Prepare a SQL statement to retrieve user data
  $stmt = $conn->prepare("SELECT * FROM loginsignup WHERE email=? AND hashed_password=?");
  $stmt->bind_param("ss", $email, $hashed_password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // User found, redirect to the next page
   header("Location: indexs.php");
    exit(); // Ensure that no further output is sent
  } else {
    // User not found or incorrect credentials
    echo "Invalid email or password.";
  }
}

// Signup functionality
if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password before storing it
  $hashed_password = hash('sha256', $password); // Example hashing method (not recommended for production)

  // Check if email already exists
  $check_email_sql = "SELECT * FROM loginsignup WHERE email='$email'";
  $check_email_result = $conn->query($check_email_sql);

  if ($check_email_result->num_rows > 0) {
    echo "Email already exists. Please choose a different one.";
  } else {
    // Insert new user data into the database
    $insert_sql = "INSERT INTO loginsignup (name, email, hashed_password) VALUES ('$name', '$email', '$hashed_password')";
    if ($conn->query($insert_sql) === TRUE) {
      echo "New record created successfully!";
    } else {
      echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
  }
}

// Close database connection
$conn->close();
 




 
 
 