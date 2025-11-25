<?php include '../partials/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../public/css/login.css">
        <link rel="stylesheet" href="../../../public/css/style.css">

    <title>Login Form</title>
    
</head>
<body>
    <div class="main">
        <div class="login-container">
        <h2>Login</h2>
        <form action="../../controllers/loginController.php" method="post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login" class="submit-button">Login</button>
        </form>
    </div>
    </div>
</body>
</html>