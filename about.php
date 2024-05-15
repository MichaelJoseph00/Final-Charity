<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Charity Website</title>
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
    <h1>About Our Charity</h1>
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
    <h2>Our Mission</h2>
    <p>We are a non-profit organization dedicated to making a positive impact on the lives of individuals and communities through various initiatives and projects.</p>
    <p>Learn more about our <a href="#">mission and values</a>.</p>
</section>

<section>
    <h2>Our Team</h2>
    <p>Our team consists of passionate individuals committed to serving others and creating positive change. Get to know <a href="#">our team members</a>.</p>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Our Charity. All rights reserved.</p>
</footer>

</body>
</html>
