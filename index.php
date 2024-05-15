<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Website</title>
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
    <h1>Welcome to Our Charity</h1>
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
    <h2>About Our Charity</h2>
    <p>We are a non-profit organization dedicated to helping those in need. Our mission is to make a positive impact on the lives of individuals and communities through various initiatives and projects.</p>
    <p>Learn more about <a href="about.php">our mission</a>.</p>
</section>

<section>
    <h2>Ways to Help</h2>
    <p>There are many ways you can contribute to our cause:</p>
    <ul>
        <li>Make a donation</li>
        <li>Volunteer your time</li>
        <li>Spread the word</li>
    </ul>
    <p>Visit our <a href="donate.php">donation page</a> to learn more.</p>
</section>

<section>
    <h2>Latest News</h2>
    <p>Stay up-to-date with our latest activities and events.</p>
    <!-- You can fetch and display news dynamically from a database or API -->
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Our Charity. All rights reserved.</p>
</footer>

</body>
</html>
