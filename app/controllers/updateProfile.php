<?php
// 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../models/userModel.php";
require_once "../utils/pic.php";
require_once "loggedInUser.php";

if(!$conn){
    die("DB not connected!");
}
if(!isset($_SESSION["loggedin_user_id"])){
    die("No session found");
}

if(isset($_GET["id"]) && (int)$_GET["id"] === (int)$_SESSION["loggedin_user_id"]){
    $id = $_SESSION["loggedin_user_id"];
    foreach($user as $key => $value){

    }
    // var_dump($user);
}  else{
    die("You're not logged in!");
}
$target_dir =  "../../public/uploads/";
echo $target_dir;

if($_SERVER["REQUEST_METHOD"] === "POST" && (int)$_SESSION["loggedin_user_id"] === (int)$_GET["id"]){
    if(!isset($_POST["update"])){
        die("Action denied!");
    }
    if(empty($_POST["name"]) && !empty($user["name"])){
        $name = $user["name"];
    }else if (empty($_POST["name"]) && empty($user["name"])){
        die("First enter your name!");
        exit();
    }else{
        $name = $_POST["name"];
    }

    if(empty($_POST["username"]) && !empty($user["username"])){
        $username = $user["username"];
    }else if(empty($_POST["username"]) && empty($user["username"])) {
        die("User name is empty!");
        exit();
    }else{
        $username = $_POST["username"];
    }

    if(empty($_POST["email"]) && !empty($user["email"])){
        $email = $user["email"];
    }else if(($_POST["email"]) && empty($user["email"])) {
        die("Email is empty");
        exit();
    }else{
        $email = $_POST["email"];
    }

    if(empty($_POST["bio"]) && !empty($user["bio"])){
        $bio = $user["bio"];
    }else if(empty($_POST["bio"]) && empty($user["bio"])) {
        die("Bio is empty");
        exit();
    }else{
        $bio = $_POST["bio"];
    }

    if(empty($_POST["password"]) && !empty($user["password"])){
        $password = $user["password"];
    }else if(empty($_POST["password"]) && empty($user["password"])){
        die("Password is empty");
        exit();
    }else {
        if(password_verify($_POST["password"], $user["password"])){
             $password = $_POST["password"];
        }else{
            die("Invalid Password!");
            exit();
        }
    }

     if(empty($_POST["confirm_new_password"]) && !empty($user["password"])){
        $hashedpwd = password_hash($user["password"], PASSWORD_DEFAULT);
    }else if(empty($_POST["confirm_new_password"]) && empty($user["password"])) {
        die("Password is empty");
        exit();
         
    }else{
        $hashedpwd = password_hash($_POST["confirm_new_password"], PASSWORD_DEFAULT);
    }
    // image
    if(isset($_FILES["img_file"]) && $_FILES["img_file"]["error"] === UPLOAD_ERR_OK){
        $err = validateProfilePic($_FILES["img_file"]);
        if($err){
            die("Error in upload $err");
            exit();
        }else{
            $target_file = $target_dir . basename($_FILES["img_file"]["name"]);
            move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file);
        }
    }

    $stmt = $conn->prepare("UPDATE user SET name=?, username=?, email=?, password=?, bio=?, pic=?  WHERE id=? ");
      $stmt->bind_param("ssssssi", $name, $username, $email, $hashedpwd, $bio, $image_path, $id);
      $stmt->execute();
      if($stmt->execute()){
        header("Location:../../index.php?message=You've updated your profile!");
        exit();
    }else{
        echo "error in adding user {$stmt->error}";
    }

}else{
    echo "sth breaking";
}