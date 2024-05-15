<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // In a real scenario, you would typically verify the username and password against a database
        // Here, we'll just check if the username is "admin" and the password is "password"
        if ($username === "admin" && $password === "password") {
            // Redirect to a success page or perform additional actions (e.g., set session variables)
            header("Location: success.php");
            exit();
        } else {
            // Redirect back to the login page with an error message
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Redirect back to the login page with an error message if username or password is missing
        header("Location: login.php?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to the login page if the form is not submitted
    header("Location: login.php");
    exit();
}
?>
