<?php include '../partials/header.php'; ?>
<?php
session_start();


if(!$_SESSION["loggedin_user_id"]){
 require 'login.php';
exit();
 }
 require_once "../../controllers/loggedInUser.php";
 $id = $_SESSION["loggedin_user_id"];
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
            <a href="/vanillaphp/blog/app/views/pages/updateUser.php?id=<?php echo $id; ?>" class="btn">Edit Profile</a>
            <a href="/vanillaphp/blog/app/controllers/logout.php?id=<?php echo $id; ?>" class="btn btn-secondary">Logout</a>
        </div>
    </section>
</main>


   
        <?php
        if(!$user){
            ?>
         <div class="">
              <span>Login</span>
              <a href="login.php">here</a>
              <span>Or Signup</span>
               <a href="signup.php">here</a>
           </div>
            <?php
        }
         ?>
        
    
  </div>
</body>
</html>

<?php include '../partials/footer.php'; ?>
