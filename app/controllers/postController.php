<?php

require_once "loggedInUser.php";
require_once "../models/userModel.php";
require_once "../utils/pic.php";
require_once "../utils/info.php";

$target_dir = "../../public/img/";
error_reporting(E_ALL);
ini_set('display_errors', 1);


if($_SESSION["loggedin_user_id"]){
   $id = $_SESSION["loggedin_user_id"];
 }
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["publish_post"])){
        // sanitize user input
        $title = sanitizeInput($_POST["title"]);
        $category = sanitizeInput($_POST["category"]);
        $content = sanitizeInput($_POST["content"]);
        // validate user input
        $errors = validateInput($title, $category, $content);
        
        // image
    if(isset($_FILES["img_file"]) && $_FILES["img_file"]["error"] === UPLOAD_ERR_OK){
        $err = validateProfilePic($_FILES["img_file"]);
        if($err){
            error_log("Debug: post inserted successfully for user $id");
        }else{
            $target_file = $target_dir . basename($_FILES["img_file"]["name"]);
            if(!move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file)){
               error_log("Debug: post inserted successfully for user $id");
            }
            if(empty($errors)){
            // db insertion
            $stmt = $conn->prepare("INSERT INTO posts (title, description, pic, category, user_id ) VALUES (?, ?, ?, ?, ?)");
           if ($stmt === false) {
              die("Prepare failed: " . $conn->error);
              }
            $stmt->bind_param("ssssi", $title, $content, $target_file, $category, $id);
            if($stmt->execute()){
                var_dump("send me".$id);
                header("Location:../views/pages/posts.php?message=Post published successfully!");
                exit();
            }else{
                die("Errors here==>:");
            }
        }else{
        foreach($errors as $error){
            echo "<p style='color:red;'>$error</p>";
            var_dump("The errors are" . $errors);
        }
        
    }
        }
    }else{
        echo "Some big error from IMG";
    }
        
    }
}