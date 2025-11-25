<?php
session_start();
require_once "../../controllers/loggedInUser.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET["id"]) && (int)$_GET["id"] === (int)$_SESSION["loggedin_user_id"]){
    echo "Ready to update user with id {$_GET["id"]}";
    $id = $_SESSION["loggedin_user_id"];
    foreach($user as $key => $value){

    }
    // var_dump($user);
}  else{
    die("You're not logged in!");
}

?>




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
        <form action="../../controllers/updateProfile.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class=""> 

            <div class="signup-sect">

            <div class="form-group">
                <label for="username">Full Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user["name"]); ?>" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user["username"]); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user["email"]); ?>" required>
            </div>


            <div class="form-group">
                <label for="password">Old Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter old password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">New Password:</label>
                <input type="password" id="confirm-new-password" name="confirm_new_password" required>
            </div>

            <div class="form-group">
                <label for="email">Profile Pic(Optional):</label>
                 <input type="file" id="profile_picture" name="profile_picture" accept="image/*" value="<?php echo htmlspecialchars($user["name"]); ?>">
            </div>

             <div class="form-group bio">
                <label for="email">Bio:</label>
                <textarea name="bio" id="bio"><?php echo htmlspecialchars($user["bio"]); ?></textarea>
            </div>

            </div>
            <button type="submit" name="update" class="submit-button">Update Profile</button>
        </form>
    </div>
     </div>
</body>
</html>