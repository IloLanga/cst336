<?php

 if (!empty($_FILES)) {

    // print_r($_FILES);
    
    
    
    if ($_FILES['myFile']['size'] > 1000000) {
        echo "Image size: " . $_FILES['myFile']['size'] . ", image must be less then 1MB";
    } else {
        echo "Image was succesfully uploaded";
        move_uploaded_file( $_FILES['myFile']['tmp_name'], "gallery/" . $_FILES['myFile']['name']);
    }
    
    

}


    function displayImagesUploaded() {

        $images = scandir("gallery"); //returns all file names within a folder
        
        //print_r($images);
        
        for ($i = 2; $i < count($images); $i++) {
            
            echo "<img src='gallery/$images[$i]' width='50' />";
            
        }//for
    
    }//function


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Lab 9: File Upload </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

        <style>
            
            img { padding: 10px; }
            
            img:hover { width: 250px; }
            
            footer, body {
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        
        
        <form  method="POST" enctype="multipart/form-data">
        
            <input type="file" name="myFile" class="btn btn-primary"/>
            <button class="btn btn-primary"> Upload File! </button>
            
        </form>

        <hr>
        <h3> Images uploaded: </h3>
        
        <?= displayImagesUploaded() ?>
        
        <footer>
        
        
            <hr>
            
            <img src="../../img/buddy_verified.png" alt="csumb logo" width="100px"/>
            <br><br/>
            Internet Programming. 2019 &copy; Poilliot <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious. <br />
            It is used for academic purpose only <br />
        
        </footer>
    </body>
</html>