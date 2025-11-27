<?php
require_once "/home/elicom/Desktop/web2/php/vanillaphp/blog/app/models/userModel.php";
$posts = [];
$sql = ("SELECT * FROM posts ORDER BY created_at DESC");
$result = $conn->query($sql);
if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc())
        // pushing each post to array
    $posts[] = $row;
}
