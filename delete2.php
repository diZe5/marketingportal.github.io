<?php

$conn = mysqli_connect("localhost","root","snores","login");

        if(isset($_POST['save']))
{
   
    
    $slno = $_POST['slno'];
    $sql2 = "DELETE FROM annex WHERE slno='$slno'";
        if(mysqli_query($conn,$sql2))
        {
            echo 'deleted ';
        }
        else
        {
            echo 'unable to delete';
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
        
        <form action="delete2.php" method="post" id="upload" and enctype="multipart/form-data">


    
    <label for="slno"><b>Sl.No</b></label><br>
    <input type="text" placeholder="Enter Sl.No" name="slno" required><br>
    
        <button type="submit" name="save">Delete</button>
        </form>
        
        <br>
        <form  action="annex2.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        
    </body>
</html>