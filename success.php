<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Charity Website</title>
    <style>
        /* CSS styles for basic layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        nav {
            background-color: #555;
            color: #fff;
            padding: 10px 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        section {
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Item Donations</h1>
</header>

<nav>
    <a href="success.php">Item Donations</a>
    <a href="volunteers.php">Volunteers</a>
    <a href="donationsM.php">Donations</a>
    <a href="eventsA.php">Events</a>
    <a href="contact.php">Contact Us</a>
</nav>




<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission



?>

<?php 
$sql = "SELECT * FROM donations_items";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1'>
    <tr>
    <th>Product Name</th>
    <th>Quality</th>
    <th>Quantity</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . $row["quality"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td><a href='editDI.php?id=".$row["id"]."'>Edit</a></td>";
        echo "<td><a href='deleteDI.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Our Charity. All rights reserved.</p>
</footer>

</body>
</html>
