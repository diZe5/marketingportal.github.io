<?php


$conn = mysqli_connect("sql12.freesqldatabase.com","sql12348806"," jPZ9eeVJkb","sql12348806");






if(isset($_POST['save']))
{

   
    $filename = $_FILES['myfile']['name'];
    $destination= 'annexure/'.$filename;
    $file  = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $slno = $_POST['slno'];
    $sql = "UPDATE annex SET id='$filename' WHERE slno='$slno'";
    
    if(mysqli_query($conn,$sql))
    {   
        echo 'edited in db';
    }
        
            if(move_uploaded_file($file, $destination))
        {
  
             echo'uploaded in  folder';
        }
       
}



?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylefunc.css">
    </head>
    <body>
        
        <div id="body">
        <form action="uploadfileonly2.php" method="post" id="upload" and enctype="multipart/form-data">
                <input type="file" name="myfile"><br>
                
                
    <label for="slno"><b>Sl.NO</b></label><br>
    <input type="text" placeholder="Enter Sl.no" name="slno" required><br>
    
                <button type="submit" name="save">Upload</button>
                
        </form>

        
          <form  action="annex2.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        
        </div>
    </body>
</html>
