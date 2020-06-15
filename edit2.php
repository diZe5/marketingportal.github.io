<?php

$conn = mysqli_connect("localhost","root","snores","login");

        if(isset($_POST['save']))
{

    $slno= $_POST['slno'];
    $docname= $_POST['docname'];
    $dateofupload= $_POST['dateofupload'];
    $fname= $_POST['filename'];

    

        if(isset($_POST['docname']))
        {
            $query1 = "UPDATE annex SET docname='$docname' where slno='$slno' ";
            $result1 = mysqli_query($conn,$query1);
        }
        if(isset($_POST['dateofupload']))
        {
            $query2 = "UPDATE annex SET dateofupload='$dateofupload' where slno='$slno' ";
            $result2 = mysqli_query($conn,$query2);
        }
        if(isset($_POST['filename']))
        {
            $query3 = "UPDATE annex SET filename='$fname' where slno='$slno' ";
            $result3 = mysqli_query($conn,$query3);
        }
 
        
            if($result1 || $result2 || $result3 )
            {
                echo'edited';
            }
            else
            {
                echo 'failed to edit';
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
        
        <form action="edit2.php" method="post" id="addrow" and enctype="multipart/form-data">



            <label for="slno"><b>Sl.No</b></label><br>
    <input type="text" placeholder="Enter slno" name="slno" ><br>
    
    <label for="docname"><b>DocName</b></label><br>
    <input type="text" placeholder="Enter docname" name="docname" ><br>
    
    <label for="dateofupload"><b>Date of Upload</b></label><br>
    <input type="text" placeholder="Enter dateofupload" name="dateofupload" ><br>
    
    <label for="filename"><b>File Name</b></label><br>
    <input type="text" placeholder="Enter filename" name="filename" ><br>
    

        <button type="submit" name="save">Edit</button>
        </form>
        
        <form  action="annex2.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
        
    </body>
</html>