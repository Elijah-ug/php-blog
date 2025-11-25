<?php
$db_user = "root";
$db_server = "localhost";
$db_password = "";
$db_name = "blogpost";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

