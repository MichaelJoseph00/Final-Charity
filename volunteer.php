<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration</title>
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
    <h1>Volunteer Registration</h1>
</header>

<nav>
    <a href="login.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="donate.php">Donate</a>
    <a href="volunteer.php">Volunteer</a>
    <a href="contact.php">Contact Us</a>
</nav>
<section>
 <form action="submit_volunteer.php" method="post" onkeydown="return /[a-zA-Z]/i.test(event.key)" onkeydown="return /[a-zA-Z]/i.test(event.key)">
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

</section>

</body>
</html>
