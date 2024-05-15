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
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1'>
    <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Schedule</th>
        <th>IMG_PATH</th>
    <th>Date Created</th>

    <th>Edit</th>
    <th>Delete</th>
    </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["schedule"] . "</td>";
        echo "<td>" . $row["img_path"] . "</td>";
        echo "<td>" . $row["date_created"] . "</td>";
        echo "<td><a href='editEA.php?id=".$row["id"]."'>Edit</a></td>";
        echo "<td><a href='deleteEA.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
    <form action="submit_event.php" method="post">
    <table>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>Schedule:</td>
            <td><input type="text" name="schedule"></td>
        </tr>
        <tr>
            <td>Img_path:</td>
            <td><input type="text" name="img_path"></td>
        </tr>
        <tr>
            <td>Date_created:</td>
            <td><input type="date" name="date_created"></td>
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
