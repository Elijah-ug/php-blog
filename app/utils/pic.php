<?php
       function validateProfilePic($file){
        
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
         if(isset($_POST["submit"])){
            // check if image
            $checkIfImage = getimagesize($_FILES["img_file"]["tmp_name"]);
            if($checkIfImage === false){
                 $uploadOk = 0;
                 return "Fake file";
            }
            if($_FILES["img_file"]["size"] > 500000){
                $uploadOk = 0;
                return "Huge image";
            }
            // allow specific types
            if($fileType !== "jpg" && $fileType !== "jpeg" && $fileType !== "png" && $fileType !== "gif"){
                $uploadOk = 0;
                return "This file type: {$fileType} is not allowed";
            }
            if($uploadOk === 0){
                return "There was an error";
            }
        }
        return null;

      }