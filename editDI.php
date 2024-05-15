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
    $product_name = $_POST["product_name"];
    $quality = $_POST["quality"];
    $quantity = $_POST["quantity"];
    
    // Update entry in the database
    $sql = "UPDATE donations_items SET product_name='$product_name', quality='$quality', quantity='$quantity' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve entry to be edited
$id = $_GET["id"];
$sql = "SELECT * FROM donations_items WHERE id=$id";
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
        Product Name: <input type="text" name="product_name" value="<?php echo $row["product_name"]; ?>"><br>
        Quality: <input type="text" name="quality" value="<?php echo $row["quality"]; ?>"><br>
        Quantity: <input type="text" name="quantity" value="<?php echo $row["quantity"]; ?>"><br>
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