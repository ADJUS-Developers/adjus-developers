<?php
// Hardcoded credentials
$valid_email = "admin@gmail.com";
$valid_password = "admin"; // In a real application, use hashed passwords

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if credentials match
    if ($email === $valid_email && $password === $valid_password) {
        // Redirect to another page on successful login
        header("Location: dashboard.html"); // Replace with your desired redirect page
        exit(); // Make sure to exit to avoid further script execution
    } else {
        echo "<h3>Invalid credentials, please try again.</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST" class="login-form">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>
