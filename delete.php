<?php

$conn = mysqli_connect("localhost","root","snores","login");

        if(isset($_POST['save']))
{
   
    
    $hpvpno = $_POST['hpvpenqno'];
    $sql2 = "DELETE FROM upload WHERE hpvpenqno='$hpvpno'";
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
        
        <form action="delete.php" method="post" id="upload" and enctype="multipart/form-data">
	<input type="file" name="myfile"><br>


    
    <label for="hpvpenqno"><b>HPVPENQ.NO</b></label><br>
    <input type="text" placeholder="Enter HPVPENQ.NO" name="hpvpenqno" required><br>
    
        <button type="submit" name="save">Delete</button>
        </form>
        
        <br>
        <form  action="homeforadmin.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        
    </body>
</html>