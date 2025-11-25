<?php
session_start();
require_once "../models/userModel.php";

if(!$conn){
    die("No connection");
}else{
    echo "DB connected here";
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["login"])){
        if(empty($_POST["email"]) || empty($_POST["password"])){
            die("Did not match!");
        }else{
            $email = $_POST["email"];
            $password = $_POST["password"];
            // check if user exists
            // prepare statement
            $stmt = $conn->prepare("SELECT * from `user` where `email` = ? ");
            // bind aram
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            // compare passwords
            $verify = password_verify($password, $user["password"]);
            if($user && $verify){
                 $_SESSION["loggedin_user_id"] = $user["id"];
               
                $id = $_SESSION["loggedin_user_id"];
                session_regenerate_id(true);
                header("Location:../../index.php?id=$id");
                exit();
            }else{
                echo "Invalid credentials";
            }
            
        }
    }
}else{
    die("Action Denied!");
}