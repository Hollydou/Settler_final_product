<?php
$msg = "";

    // if upload button is pressed
    if(isset($_POST['upload'])){
        // the path to store the upload image
        $target = "images/".basename($_FILES['image']['name']);
        
        // connect to the database
        $db = mysql_connect("localhost","root", "", "photos");
        
        // Get all the submitted data from the from
        $image = $_FILES['image']['name'];

        $sql = "INSERT INTO images(image) VALUES ('$image')";

        mysqli_query($db,$sql); //stores the submitted data into the database table: images
        
        // move the uploaded image into the folder: images
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "Image uploaded successfully";
        }else{
            $msg = "There was a problem uploading image";
        }

    }


?>