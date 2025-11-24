<?php include '../partials/header.php'; ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../public/css/login.css">
        <link rel="stylesheet" href="../../../public/css/style.css">
    <title>Signup</title>
</head>
<body>
     <div class="main">
        <div class="signup-container">
        <h2>Create Account</h2>
        <form action="/submit-signup" method="POST"> <!-- Replace with your actual backend endpoint -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="submit-button">Sign Up</button>
        </form>
    </div>
     </div>
</body>
</html>