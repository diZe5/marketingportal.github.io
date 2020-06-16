<?php

$conn = mysqli_connect("sql12.freesqldatabase.com","sql12348806"," jPZ9eeVJkb","sql12348806");



        if(isset($_POST['save']))
{
   
    $filename = $_FILES['myfile']['name'];
    $destination= 'uploads/'.$filename;
    $file  = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $mktgrp = $_POST['marketinggroup'];
    $hpvpno = $_POST['hpvpenqno'];
    $cname = $_POST['consultantname'];
    $cenq = $_POST['consultantenqno'];
    $duedate = $_POST['duedate'];
    $phno = $_POST['phno'];
    $description = $_POST['description'];
    $offerref = $_POST['hpvpofferref'];
    $delivery = $_POST['delivery'];
    $remarks = $_POST['remarks'];
    $sql = "SELECT * FROM upload WHERE id='$filename'";
    $query_run = mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO upload(id,marketinggroup,hpvpenqno,consultantname,consultantenqno,duedate,phno,description,hpvpofferref,delivery,remarks,file)"
                    . " VALUES('$filename','$mktgrp','$hpvpno','$cname','$cenq','$duedate','$phno','$description','$offerref','$delivery','$remarks','$filename')";

        if(move_uploaded_file($file, $destination))
        {     
             echo'uploaded in folder';
        }
        
        if(mysqli_query($conn,$sql2))
        {
            echo 'uploaded in db';
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
        <link rel="stylesheet" type="text/css" href="stylefunc.css">
    </head>
    <body>
        <div id="body">
        <form action="upload.php" method="post" id="upload" and enctype="multipart/form-data">
	<input type="file" name="myfile"><br>


    <label for="marketinggroup"><b>Marketing Group</b></label><br>
    <input type="text" placeholder="Enter Msrketing Group" name="marketinggroup" required><br>
    
    <label for="hpvpenqno"><b>HPVPENQ.NO</b></label><br>
    <input type="text" placeholder="Enter HPVPENQ.NO" name="hpvpenqno" required><br>
    
    <label for="consultantname"><b>Consultant/Customer name</b></label><br>
    <input type="text" placeholder="Enter Consultant/Customer name" name="consultantname" required><br>
    
    <label for="consultantenqno"><b>Consultant/CustomerEnq</b></label><br>
    <input type="text" placeholder="Enter Consultant/CustomerEnq" name="consultantenqno" required><br>
    
    <label for="duedate"><b>DueDate</b></label><br>
    <input type="text" placeholder="Enter DueDate" name="duedate" required><br>
    
    <label for="phno"><b>PhNo</b></label><br>
    <input type="text" placeholder="Enter PhNo" name="phno" required><br>
    
    <label for="description"><b>Description</b></label><br>
    <input type="text" placeholder="Enter Description" name="description" required><br>
    
    <label for="hpvpofferref"><b>HPVP offerRef</b></label><br>
    <input type="text" placeholder="Enter HPPVP OfferRef" name="hpvpofferref" required><br>
    
    <label for="delivery"><b>Delivery</b></label><br>
    <input type="text" placeholder="Enter Delivery" name="delivery" required><br>
    
    <label for="remarks"><b>Remarks</b></label><br>
    <input type="text" placeholder="Enter Remarks" name="remarks" required><br>
        <button type="submit" name="save">Upload</button>
        </form>
        
        <form  action="homeforadmin.php">
        <input class="editbtn" type="submit" value="back" />
        </form>
      </div>  
    </body>
</html>
