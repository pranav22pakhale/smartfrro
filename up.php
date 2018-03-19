<?php
    require_once 'dbconn.php';  

    if(isset($_POST["uname"]))
    {
        $username = $_POST["uname"];
    }

    /*if(isset($_POST["submit_btn"])) 
    {
        $target_dir = "uploads/";
        $t=time();
        $target_file = $target_dir .$t. basename($_FILES["fileToUpload"]["name"]);
        //echo $target_file;
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

           

            // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($FileType != "pdf" ){
            echo "Sorry, only pdf files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded successfully.";
                $message = "wrong answer";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }*/

    if(isset($_POST["submit"])) 
    {
        $target_dir = "uploads/";
         $t=time();
        $target_file = $target_dir .$t. basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    $sql = "insert into upload(id,location) values ('$username','$target_file')";
    $result = mysqli_query($con,$sql);

    $sql = "select location from upload";

    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($result)) {
                echo "<img src='".$row['location']."'/>";
            }
?>