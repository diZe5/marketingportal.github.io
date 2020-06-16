<?php


$conn = mysqli_connect("sql12.freesqldatabase.com","sql12348806"," jPZ9eeVJkb","sql12348806");





if(isset($_POST['save']))
{

   
    $filename = $_FILES['myfile']['name'];
    $destination= 'uploads/'.$filename;
    $file  = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $hpvpenqno = $_POST['hpvpenqno'];
    $sql = "UPDATE upload SET id='$filename'  WHERE hpvpenqno ='$hpvpenqno'";
    $sql2 = "UPDATE upload SET file='$filename'  WHERE hpvpenqno ='$hpvpenqno'";
    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql2))
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
    </head>
    <body>
        
        
        <form action="uploadfileonly.php" method="post" id="upload" and enctype="multipart/form-data">
                <input type="file" name="myfile"><br>
                
                
    <label for="hpvpenqno"><b>HPVP Enq.No</b></label><br>
    <input type="text" placeholder="Enter HPVP Enq.No" name="hpvpenqno" required><br>
    
                <button type="submit" name="save">Upload</button>
                
        </form>

        
          <form  action="homeforadmin.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        

    </body>
</html>
