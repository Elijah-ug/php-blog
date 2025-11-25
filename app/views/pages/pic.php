<?php
$target_dir = "../../public/uploads/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
            // check if image
            $checkIfImage = getimagesize($_FILES["profile_picture"]["tmp_name"]);
            if($checkIfImage === false){
                die("Fake image");
                 $uploadOk = 1;
            }
            if($_FILES["profile_picture"]["size"] > 500000){
                die("Huge image");
                $uploadOk = 0;
            }
            // allow specific types
            if($fileType !== "jpg" && $fileType !== "jpeg" && $fileType !== "png" && $fileType !== "gif"){
                die("This file type: {$fileType} is not allowed");
                $uploadOk = 0;
            }
            if($uploadOk === 0){
                die("There was an error");
            }else{
                if(move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)){
                    $image_path = $target_file;

                     $query = $conn->prepare("INSERT INTO user (name, username, email, password, bio, pic ) VALUES (?, ?, ?, ?, ?, ?) ");
      $query->bind_param("ssssss", $name, $user_name, $email, $hashedpwd, $user_bio, $image_path);

    //   execute
    if($query->execute()){
        header("Location:../../index.php?message=You've registered successfully");
        exit();
    }else{
        echo "error in adding user {$query->error}";
    }
                }
        }
      }