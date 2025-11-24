<?php include '../partials/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../../public/css/style.css">
            <link rel="stylesheet" href="../../../public/css/post.css">
    <title>Create New Post</title>
   
</head>
<body>
   <div class="main">
     <div class="container">
        <h1>Create New Post</h1>
        <form action="/submit-post" method="POST">
            <label for="postTitle">Title:</label>
            <input type="text" id="postTitle" name="postTitle" required>

            <label for="postContent">Post Content:</label>
            <textarea id="postContent" name="postContent" required></textarea>

            <button type="submit">Publish Post</button>
        </form>
    </div>
   </div>
</body>
</html>