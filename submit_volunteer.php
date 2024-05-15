<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "INSERT INTO volunteer (first_name, last_name, telephone, email, address) 
          VALUES ('$first_name', '$last_name', '$telephone', '$email', '$address')";

if (mysqli_query($connection, $query)) {
    echo "New record created successfully";
        header("Location: index.php");

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
