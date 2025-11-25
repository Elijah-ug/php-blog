


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
        <form action="../../controllers/user.php" method="post" enctype="multipart/form-data" class=""> 

            <div class="signup-sect">

            <div class="form-group">
                <label for="username">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

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
                <input type="password" id="confirm-password" name="confirm_password" required>
            </div>

            <!-- <div class="form-group">
                <label for="email">Profile Pic(Optional):</label>
                 <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
            </div> -->

             <div class="form-group bio">
                <label for="email">Bio:</label>
                <textarea name="bio" id="bio"></textarea>
            </div>

            </div>
            <button type="submit" name="submit" class="submit-button">Sign Up</button>
        </form>
    </div>
     </div>
</body>
</html>