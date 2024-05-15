
<?php
// Database Connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $date_created = $_POST["date_created"];
    $description = $_POST["description"];
        $schedule = $_POST["schedule"];
        $img_path = $_POST["img_path"];


    
    // Update entry in the database
    $sql = "UPDATE events SET title='$title', date_created='$date_created', description = '$description' , schedule = '$schedule', img_path='$img_path'  WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve entry to be edited
$id = $_GET["id"];
$sql = "SELECT * FROM events WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Entry</title>
</head>
<body>
    <h2>Edit Entry</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        Title: <input type="text" name="amount" value="<?php echo $row["title"]; ?>"><br>
        Date Created: <input type="text" name="date_created" value="<?php echo $row["date_created"]; ?>"><br>
               Description: <input type="text" name="amount" value="<?php echo $row["description"]; ?>"><br>
               Schedule: <input type="text" name="amount" value="<?php echo $row["schedule"]; ?>"><br>
               IMG PATH: <input type="text" name="amount" value="<?php echo $row["img_path"]; ?>"><br>


        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
} else {
    echo "Entry not found";
}
$conn->close();
?>

<button onclick="window.location.href='success.php'">Return to Table</button>