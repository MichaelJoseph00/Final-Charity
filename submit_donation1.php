<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

// Establish a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// validation function
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate and sanitize POST input
$amount = isset($_POST['amount']) ? validate_input($_POST['amount']) : null;

// Check if the input is not empty, is a valid number, and greater than zero
if (empty($amount) || !is_numeric($amount) || $amount <= 0) {
    die("Please enter a valid donation amount.");
}

// Prepare an SQL statement to prevent SQL injection
$stmt = mysqli_prepare($connection, "INSERT INTO donations (amount) VALUES (?)");
mysqli_stmt_bind_param($stmt, "d", $amount);

// Execute the statement and check for errors
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>