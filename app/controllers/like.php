<?php
require_once "loggedInUser.php";
require_once "/home/elicom/Desktop/web2/php/vanillaphp/blog/app/models/userModel.php";
require_once "../utils/pic.php";
require_once "../utils/info.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$has_liked = false;
if(isset($_GET["id"])){
    $post_id = $_GET["id"];
    $sql = "UPDATE posts SET likes = COALESCE(likes, 0) + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    if($stmt->execute()){
        header("Location:../views/pages/posts.php");
        exit();
    }
}

// $sql = $conn->query"SELECT likes FROM posts WHERE id = ? "