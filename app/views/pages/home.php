    <?php include '../partials/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
        <link rel="stylesheet" href="../../../public/css/home.css">
    <title>Home</title>
</head>
<body>

<main class="intro-container">
    <section class="intro-hero">
        <h1>Welcome to My Second PHP Project</h1>
        <p>This project is built from scratch with <strong>PHP</strong> and <strong>MySQLi (row queries)</strong>.</p>
    </section>

    <div >
        <section class="intro-details">
        <h2>Core Functionality</h2>
        <div class="intros">
            <div class="intros-child">
                <strong>Registered user posts:</strong>
                 <span>Users can create and post blog posts.</span>
                 <span>They specify the date and time for publication.</span>
                </div>

            <div class="intros-child">
                <strong>Notifications:</strong> 
                <span>Other users get notified when new posts are published.</span>
                <span>They can also opt to mark notifications as read or stop them entirely</span>
                </div>

            <div class="intros-child">
                <strong>Comments:</strong>
                <span> Registered users can comment on posts.</span>
                </div>

            <div class="intros-child">
                <strong>Likes:</strong>
                <span>Users can like posts to show appreciation.</span>
                 </div>
        </div>
    </section>

    <section class="intro-stack">
        <h2>Tech Stack</h2>
        <p>
            <strong>PHP</strong> for server-side logic<br>
            <strong>MySQLi</strong> for database queries (row-based)<br>
            <strong>No external libraries</strong> — just pure vanilla code
        </p>
    </section>
    </div>
</main>
</body>
</html>
<?php include '../partials/footer.php'; ?>