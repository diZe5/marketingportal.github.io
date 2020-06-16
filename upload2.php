<?php

$conn = mysqli_connect("sql12.freesqldatabase.com","sql12348806"," jPZ9eeVJkb","sql12348806");



        if(isset($_POST['save']))
{
   
    $filename = $_FILES['myfile']['name'];
    $destination= 'annexure/'.$filename;
    $file  = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $slno= $_POST['slno'];
    $docname= $_POST['docname'];
    $dateofupload= $_POST['dateofupload'];
    $fname= $_POST['filename'];

    $sql = "INSERT INTO annex(id,slno,docname,dateofupload,filename) VALUES('$filename','$slno','$docname','$dateofupload','$fname')";
     
            if(move_uploaded_file($file, $destination))
            {
             echo'uploaded';
            
            }
            
            if(mysqli_query($conn,$sql))
            {
                echo 'db upload complete';
            }
            else
            {
                echo 'failed to upload in db';
            }

            
        
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="upload2.php" method="post" id="upload" and enctype="multipart/form-data">
	<input type="file" name="myfile"><br>


    <label for="slno"><b>Sl.NO</b></label><br>
    <input type="text" placeholder="Enter Sl.no" name="slno" required><br>
    
    <label for="docname"><b>DocName</b></label><br>
    <input type="text" placeholder="Enter docname" name="docname" required><br>
    
    <label for="dateofupload"><b>Date of Upload</b></label><br>
    <input type="text" placeholder="Enter date" name="dateofupload" required><br>
    
    <label for="filename"><b>filename</b></label><br>
    <input type="text" placeholder="Enter filename" name="filename" required><br>
    

        <button type="submit" name="save">Upload</button>
        </form>
        
        <form  action="annex2.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        
    </body>
</html>
