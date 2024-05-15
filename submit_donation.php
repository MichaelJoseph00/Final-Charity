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

// Function to validate and sanitize user input
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validation
$product_name = isset($_POST['product_name']) ? validate_input($_POST['product_name']) : null;
$quality = isset($_POST['quality']) ? validate_input($_POST['quality']) : null;
$quantity = isset($_POST['quantity']) ? validate_input($_POST['quantity']) : null;

// Checking if required inputs aren't empty
if (empty($product_name) || empty($quality) || empty($quantity)) {
    die("All fields are required.");
}

// Prepare an SQL statement to prevent SQL injection
$stmt = mysqli_prepare($connection, "INSERT INTO donations_items (product_name, quality, quantity) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssi", $product_name, $quality, $quantity);

// Execute the statement and check for errors
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>
