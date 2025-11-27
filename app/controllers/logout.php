<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET["id"]) && (int)$_GET["id"] === (int)$_SESSION["loggedin_user_id"]){
    unset($_SESSION["loggedin_user_id"]);
    header("Location:../../index.php?message=you're not logged in!");
    exit();
}  else{
    die("You're not logged in!");
}
