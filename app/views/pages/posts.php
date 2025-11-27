<?php include '../partials/header.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//  session_start();
 
  require_once "../../controllers/loggedInUser.php";
  require_once "../../controllers/getPostsController.php";
  if($_SESSION["loggedin_user_id"]){
 foreach($user as $key => $value){
}
 }
//  loop through posts


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../../../public/css/style.css">
        <link rel="stylesheet" href="../../../public/css/posts.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <main class="blog-container">
    <section class="blog-hero">
        <h1>Our Blog</h1>
        <p>Insights, tutorials, and stories from our team.</p>
        <div class="">
            <?php
            if($user){
          ?>
          <div class="">
            <span>Hey <?php echo $user["username"]; ?>! </span>
            <a href="postblog.php">Create a post</a>
        </div>
    <?php
            }else{
                ?>
                <div class="">
                 <span>You're not logged in! </span>
                 <a href="postblog.php">Login here</a>
              </div>
                <?php
            }
            ?>
            
        </div>
    </section>

    <div class="posts-grid">
        <section class="blog-posts">
       
         <!-- Example static posts (replace with DB query later) -->
        
   <?php foreach($posts as $post): ?>
            <article class="blog-post">
                <h2><a href="#"><?php echo htmlspecialchars($post['title']); ?></a></h2>
                <span class="post-date"><?php echo htmlspecialchars($post['created_at']); ?></span>
                <p><?php echo htmlspecialchars($post['category']); ?></p>
                <?php if (!empty($post['pic'])):
                     ?>
                <img src="<?php  echo "../" . htmlspecialchars($post["pic"]); ?>" alt="<?php echo $post["pic"] ?>" 
                class="post-image">
               <?php endif; ?>

                <div><?php echo htmlspecialchars($post['description']); ?></div>
                <a class="read-more" href="#">Read more →</a>
                <div class="highlight">
                    <div class="likes">
                    <span><?php echo $post["likes"] !== null ? htmlspecialchars($post["likes"]). " likes" : "0 likes" ?></span>
                    <a href="../../controllers/like.php?id=<?php echo $post["id"]  ?>" class="like">💙 </a>
                </div>
                </div>
            </article>
            <?php endforeach; ?>
    </section>
    </div>
</main>
</body>
</html>

<?php include '../partials/footer.php'; ?>
