<?php
require_once 'DatabaseContext.php';
require_once 'InsertDonation.php';

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$amount = $_POST['amount'];

$context = new DatabaseContext();
$context->setStrategy(new InsertDonation($amount));

if ($context->executeStrategy($connection)) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>