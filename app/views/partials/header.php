
<?php
$home = "/vanillaphp/blog/";
$about = "/vanillaphp/blog/app/views/pages/about.php";
$profile = "/vanillaphp/blog/app/views/pages/profile.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog project</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <a href="/">PHPBlog</a>
            </div>
            <ul class="nav-links">
                <li><a href="/vanillaphp/blog/">Home</a></li>
                <li><a href="/vanillaphp/blog/app/views/pages/posts.php">Posts</a></li>
                 <li><a href="/vanillaphp/blog/app/views/pages/about.php">About</a></li>
                  <!-- <li><a href="/vanillaphp/blog/app/views/pages/postblog.php">Add post</a></li> -->
                <li><a href="/vanillaphp/blog/app/views/pages/profile.php">Profile</a></li>
            </ul>
            <form class="nav-search" action="/search.php" method="get">
                <input type="text" name="q" placeholder="Search...">
                <button type="submit">🔍</button>
            </form>
        </nav>
    </header>
