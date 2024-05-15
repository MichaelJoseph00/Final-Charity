<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Charity Website</title>
    <style>
        /* CSS styles for basic layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        nav {
            background-color: #555;
            color: #fff;
            padding: 10px 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        section {
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Events</h1>
</header>

<nav>
    <a href="login.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="donate.php">Donate</a>
    <a href="volunteer.php">Volunteer</a>
    <a href="events.php">Events</a>
    <a href="contact.php">Contact Us</a>
</nav>




<?php
// Database Connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';


// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all rows from the events table
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output each event
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><strong>Schedule:</strong> " . $row["schedule"] . "</p>";
        echo "<p><strong>Date:</strong> " . $row["date_created"] . "</p>";
        // Display image if img_path is not empty
        if (!empty($row["img_path"])) {
            echo "<img src='" . $row["img_path"] . "' alt='Event Image'>";
        }
        echo "</div>";
    }
} else {
    echo "No events found";
}

// Close connection
$conn->close();
?>
