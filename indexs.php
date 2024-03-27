<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SolvRX</title>
    <link rel="stylesheet" href="./index.css" />
</head>
<body>
<body>
    <div class="topnav">
        <div class="welcome"> <!-- Corrected class name -->
            <?php
            // Start the session
            session_start();
            
            // Check if the user is logged in
            if(isset($_POST['signup'])) {
                echo '<p>Welcome, ' . $name['name'] . '!</p>';
            }
            ?>
        </div>
        <a class="active split" href="./index.html">Home</a>
        <a href="./Login1.html">Login / Sign Up</a>
        <a href="./Appointment.html">Book an Appointment</a>
        <a href="./Contact.php">Feedback</a>
        <a href="./about.html">About</a>
    </div>

    <div>
      <h1 class="header">&nbsp;&nbsp;&nbsp;SolvRX</h1>
      <hr />
    </div>

    <br /><br />
    <h1 class="one">Welcome TO SolvRx</h1>
    <br /><br />

    <div class="hi">
      <p>
        Experience the ease of scheduling appointments at your convenience,
        eliminating the hassle of waiting rooms and long wait times.
      </p>
    </div>

    <div id="video-container">
      <video autoplay loop muted>
        <source src="./Images/Untitled design.mp4" type="video/mp4" />
        Your browser does not support the video tag.</video
      ><br /><br />
    </div>

    <div class="m">
      <hr />
      <h1><br /><br />Consult top doctors online for any health concern</h1>
    </div>

    <div class="gallery-container">
      <div class="gallery">
        <div class="image-container">
          <img src="./Images/sp-dentist@2x.jpg" alt="Image 1" />
          <div class="description">Dentist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-gynecologist@2x.jpg" alt="Image 2" />
          <div class="description">Gynecologist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-dietitian@2x.jpg" alt="Image 3" />
          <div class="description">Dietitian</div>
        </div>

        <div class="image-container">
          <img src="./Images/sp-general-doctor@2x.jpg" alt="Image 5" />
          <div class="description">General-doctor</div>
        </div>

        <div class="image-container">
          <img src="./Images/sp-orthopedist@2x.jpg" alt="Image 6" />
          <div class="description">Orthopedist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-physiotherapist@2x.jpg" alt="Image 7" />
          <div class="description">Physiotherapist</div>
        </div>
        <!-- Add more images and descriptions here -->
      </div>
    </div>
