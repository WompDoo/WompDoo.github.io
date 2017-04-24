<?php

    $total = count($_FILES['file']['name']);
    var_dump($_FILES['file']['name']);
    $filepath = './uploads/9.jpg';
    for ($i = 0; $i < $total; $i++) {
        echo ".";
        if (file_exists('uploads/'.$_FILES['file']['name'])) {
            echo "<script type='text/javascript'>console.log('Olemas juba, tobu!');</script>";
            echo "araablane";
        } else {
            echo "araablane2";
            move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
            echo "<script type='text/javascript'>console.log('Olemas juba, tobu!');</script>";
        }
    }


/*function uploadImg()
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["filesToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["filesToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["filesToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["filesToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["filesToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}*/