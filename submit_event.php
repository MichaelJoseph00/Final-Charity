<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$title = $_POST['title'];
$description = $_POST['description'];
$schedule = $_POST['schedule'];
$img_path = $_POST['img_path'];
$date_created = $_POST['date_created'];

$query = "INSERT INTO events (title, description, schedule, img_path, date_created) 
          VALUES ('$title', '$description', '$schedule', '$img_path', '$date_created')";

if (mysqli_query($connection, $query)) {
    echo "New record created successfully";
        header("Location: eventsA.php");

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
