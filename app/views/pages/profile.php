<?php include '../partials/header.php'; ?>
<?php
session_start();
// $user = require '../../controllers/loggedInUser.php';
require_once "../../controllers/loggedInUser.php";
if($_SESSION["loggedin_user_id"]){

$id = $_SESSION["loggedin_user_id"];

 }else{
    echo "ERROR";
 }

  $avatar = "https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/profile.css">
    <title>Document</title>
</head>
<body>
  <div class="">

<main class="profile-container">
    <section class="profile-card">
        <?php
        
foreach($user as $key => $value){

}
        
        ?>

        <div class="profile-avatar">
            <img src="<?php  echo  $avatar; ?>" alt="N/A">
        </div>

        <div class="profile-info">
            <h1><?php echo $user['name']; ?></h1>
            <p class="username">@<?php echo $user['username']; ?></p>
            <p class="email"><?php echo $user['email']; ?></p>
            <p class="bio"><?php echo $user['bio']; ?></p>
        </div>

        <div class="profile-actions">
            <a href="/edit-profile.php" class="btn">Edit Profile</a>
            <a href="/logout.php" class="btn btn-secondary">Logout</a>
        </div>
    </section>
</main>


    <div class="">
        <span>Signup</span>
        <a href="signup.php">here</a>
    </div>
  </div>
</body>
</html>

<?php include '../partials/footer.php'; ?>
