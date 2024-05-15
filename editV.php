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
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $telephone = $_POST["telephone"];
    $email = $_POST['email'];
$address = $_POST['address'];
    
    // Update entry in the database
    $sql = "UPDATE volunteer SET first_name='$first_name', last_name='$last_name', telephone='$telephone', email='$email', address='$address' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve entry to be edited
$id = $_POST["id"];
$sql = "SELECT * FROM volunteer WHERE id=$id";
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
        First Name: <input type="text" name="first_name" value="<?php echo $row["first_name"]; ?>"><br>
        Last Name: <input type="text" name="last_name" value="<?php echo $row["last_name"]; ?>"><br>
        Telephone: <input type="text" name="telephone" value="<?php echo $row["telephone"]; ?>"><br>
        Email: <input type="text" name="email" value="<?php echo $row["email"]; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $row["address"]; ?>"><br>

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