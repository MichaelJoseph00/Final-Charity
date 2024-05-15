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
$sql = "SELECT * FROM volunteer";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1'>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Telephone</th>
        <th>Email</th>
    <th>Address</th>

    <th>Edit</th>
    <th>Delete</th>
    </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["telephone"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td><a href='editV.php?id=".$row["id"]."'>Edit</a></td>";
        echo "<td><a href='deleteV.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
    <form action="submit_volunteer.php" method="post" onkeydown="return /[a-zA-Z]/i.test(event.key)">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Telephone Number:</td>
            <td><input type="text" name="telephone"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Our Charity. All rights reserved.</p>
</footer>

</body>
</html>
