<?php include '../partials/header.php'; ?>
<?php
require_once "../../controllers/loggedInUser.php";

// if($_SESSION["loggedin_user_id"]){
//    echo  "LoggedIn user is $id ";
//  }

?>
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
        <form action="../../controllers/postController.php" method="POST" enctype="multipart/form-data">
            <div class="">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="">
                <label for="category">Category:</label>
              <select id="category" name="category">
                <option value="tech">Tech</option>
                <option value="education">Education</option>
                <option value="social">Social</option>
                <option value="sports">Sports</option>
                <option value="politics">Politics</option>
              </select>
            </div>

            <div class="">
                <label for="content">Post Content:</label>
                <textarea id="content" name="content" required></textarea>
            </div>

             <div class="form-group img">
                <label for="email">Add Image Pic(Optional):</label>
                 <input type="file" id="img_file" name="img_file" accept="image/*">
            </div>

            <button name="publish_post" type="submit">Publish Post</button>
        </form>
    </div>
   </div>
</body>
</html>