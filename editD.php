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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $amount = $_POST["amount"];
    $date_created = $_POST["date_created"];
   
    
    
    $sql = "UPDATE donations SET amount='$amount', date_created='$date_created' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$id = $_GET["id"];
$sql = "SELECT * FROM donations WHERE id=$id";
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
        Amount: <input type="text" name="amount" value="<?php echo $row["amount"]; ?>"><br>
        Date Created: <input type="text" name="date_created" value="<?php echo $row["date_created"]; ?>"><br>
       

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