<?php
require_once "../models/userModel.php";

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    var_dump($conn);
}

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(strlen($_POST["bio"]) > 100){
        die("Long bio");
    }else{
        $user_bio = trim($_POST["bio"]);
    }
    if(empty($_POST["name"])){
    die ("Your Name is required");
     }else{
       $name = trim($_POST["name"]);
      }

      if(empty($_POST["username"])){
    die ("User Name is required");
     }else{
       $user_name = trim($_POST["username"]);
      }

      if(empty($_POST["email"])){
        die("E-mail is require");
      }else{
        $email = $_POST["email"];
      }

      if(empty($_POST["password"])){
        die("Password is require");
      }else{
        if($_POST["password"] !== $_POST["confirm_password"]){
            die("Password did not match!");
        }
        $password = $_POST["password"];
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
      }

   $query = $conn->prepare("INSERT INTO `user` (name, username, email, password, bio ) VALUES (?, ?, ?, ?, ?) ");
      $query->bind_param("sssss", $name, $user_name, $email, $hashedpwd, $user_bio);

      //   execute
    if($query->execute()){
        header("Location:../../index.php?message=You've registered successfully");
        exit();
    }else{
        echo "error in adding user {$query->error}";
    }
  
     
}
