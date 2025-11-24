<?php include '../partials/header.php'; ?>

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
        // Example user data (replace with DB query later)
        $user = [
            "username" => "john_doe",
            "fullname" => "John Doe",
            "email" => "john@example.com",
            "bio" => "PHP enthusiast, coffee lover, and open-source contributor.",
            "totalposts" => "5 Posts",
            "avatar" => "https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg"
        ];
        ?>

        <div class="profile-avatar">
            <img src="<?php echo $user['avatar']; ?>" alt="<?php echo $user['fullname']; ?>">
        </div>

        <div class="profile-info">
            <h1><?php echo $user['fullname']; ?></h1>
            <p class="username">@<?php echo $user['username']; ?></p>
            <p class="email"><?php echo $user['email']; ?></p>
            <p class="bio"><?php echo $user['bio']; ?></p>
            <p class="posts"><?php echo $user['totalposts']; ?></p>
        </div>

        <div class="profile-actions">
            <a href="/edit-profile.php" class="btn">Edit Profile</a>
            <a href="/logout.php" class="btn btn-secondary">Logout</a>
        </div>
    </section>
</main>


    <div class="">
        <a href="./postblog.php">here</a>

    </div>
  </div>
</body>
</html>

<?php include '../partials/footer.php'; ?>
