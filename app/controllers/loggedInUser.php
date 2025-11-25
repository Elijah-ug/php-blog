<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "/home/elicom/Desktop/web2/php/vanillaphp/blog/app/models/userModel.php";


if(!$conn){
    die("DB not connected");
}
if(!isset($_SESSION["loggedin_user_id"])){
    die("No session found");
}
$id = $_SESSION["loggedin_user_id"];
// get loggedin user
$stmt = $conn->prepare("SELECT * FROM user WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$user  = $result->fetch_assoc();

if(!$user){
    die("Id: {$id} not found"); 
}