<?php
require_once 'ConcreteContact.php';
require_once 'LogDecorator.php';
require_once 'EmailDecorator.php';

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$contact = new ConcreteContact($name, $email, $message);
$contact = new LogDecorator($contact);
$contact = new EmailDecorator($contact);

$contact->process();

$query = "INSERT INTO contacts (name, email, message) 
          VALUES ('$name', '$email', '$message')";

if (mysqli_query($connection, $query)) {
    echo "New contact form submission saved successfully";
    header("Location: contact.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
