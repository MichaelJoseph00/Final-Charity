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
    <h1>Donate to Support Our Cause</h1>
</header>

<nav>
    <a href="login.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="donate.php">Donate</a>
    <a href="volunteer.php">Volunteer</a>
    <a href="events.php">Events</a>
    <a href="contact.php">Contact Us</a>
</nav>

<section>
    <h2>Make a Donation</h2>
    <p>Your contribution helps us continue our work and make a difference in the lives of those in need. Thank you for your generosity!</p>
    
</section>
<form action="submit_donation.php" method="post">
    <table>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="product_name"></td>
        </tr>
        <tr>
            <td>Quality:</td>
            <td><input type="text" name="quality"></td>
        </tr>
        <tr>
            <td>Quantity:</td>
            <td><input type="number" name="quantity"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

 <form action="submit_donation1.php" method="post">
    <table>
        <tr>
            <td>Amount:</td>
            <td><input type="text" name="amount"></td>
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
