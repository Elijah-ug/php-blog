<?php

function sanitizeInput($data){
$data = trim($data);
$data = stripslashes($data);
// convert special chars to html
$data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");
return $data;
}

function validateInput($title, $category, $content){
    $error = [];
    if(empty($title)){
        $error[] = "Title is required!";
    }elseif(strlen($title) > 50){
         $error[] = "Title too long!";
    }

    if(empty($category)){
        $error[] = "Category is required!";
    }elseif(strlen($category) > 50){
        $error[] = "Category too long!";
    }

    if(empty($content)){
        $error[] = "Category is required!";
    }elseif(strlen($content) > 500){
        $error[] = "Content too long!";
    }
    return null;

}