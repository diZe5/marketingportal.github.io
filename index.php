<?php

$conn = mysqli_connect("localhost","root","snores","login");


$sql = "SELECT * FROM upload";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);



if(isset($_GET['file_id']))
{
    $id = $_GET['file_id'];
    $sql3 = "SELECT * FROM upload WHERE id='$id'";
    $result = mysqli_query($conn, $sql3);
    $file3 = mysqli_fetch_assoc($result);
    $filepath = 'uploads/'.$file3['id'];
    
        if(file_exists($filepath))
    {
        
             	header('Content-Type: application/octet-stream');
     		header('Content-description: File Transfer');
     		header('Content-disposition: attachment; filename='.basename($filepath));
     		header('Expires:0');
     		header('Cache-Control: must-revalidate');
     		header('Pragma: public');
     		header('Content-Length:'.filesize('uploads/'.$file3['id']));
     		readfile('uploads'.$file3['id']);

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
        <title>homeforadmin</title>
        <link rel="stylesheet" type="text/css" href="stylehomeforadmin.css">
        
    </head>
    <body>
        
        
        <div id="p3">POWER SECTOR-MARKETING</div>
        <h3>Welcome to default page</h3>
        <a href="changepass.php" id="chpas">Change Password</a>
        <a href="updateprof.php" id="upprof">Update Profile</a>
        <a href="Loginpage.php" id="log">Login</a>
        <div class="ScrollStyle">

        <div id="top">
                <input name="HOME" type="submit" class="home" value="HOME"/>	
                <input name="ABOUT US" type="submit" class="home"  value="ABOUT US"/>	
                <input name="OUR CUSTOMERS" type="submit" class="home" value="OUR CUSTOMERS"/>	
                <input name="BUSINESS ENVIRONMENT" type="submit" class="home" value="BUSINESS ENVIRONMENT"/>	
                <input name="ONLINE SYSTEM" type="submit" class="home"  value="ONLINE SYSTEM"/>	
                <input name="TENDERS" type="submit" class="home"  value="TENDERS"/>	
        	<input name="CONTRACTS" type="submit" class="home"  value="CONTRACTS"/>	
               	<input name="EMPLOYEE CORNER" type="submit" class="home"  value="EMPLOYEE CORNER"/>
	 
        
        </div>
        
       <hr>
       <hr id="scr">
       <div id="p1">Current Tenders</div>
       <div  id="p2">All Tenders</div>
       <p id="right"></p>
       <p id="left"></p>

        
         
       <table border='1'  width='100%' cellpadding='5' id='bor'>
          
   
           <thead id="hd">
            
            <th>Marketing Group</th>
            <th>HPVPENQ.NO</th>
            <th>Consultant/Customer name</th>
            <th>Consultant/CustomerEnq</th>
            <th>DueDate</th>
            <th>PhNo</th>
            <th>Description</th>
            <th>HPVP OfferRef</th>
            <th>Delivery</th>
            <th>Remarks</th>
            <th>Actions</th>            
            </thead>
        <tbody>           
            <?php foreach($files as $file): ?>
            <tr>
                
                <td><?php echo $file['marketinggroup'];?></td>
                <td><?php echo $file['hpvpenqno'];?></td>
                <td><?php echo $file['consultantname'];?></td>
                <td><?php echo $file['consultantenqno'];?></td>
                <td><?php echo $file['duedate'];?></td>
                <td><?php echo $file['phno'];?></td>
                <td><?php echo $file['description'];?></td>
                <td><?php echo $file['hpvpofferref'];?></td>
                <td><?php echo $file['delivery'];?></td>
                <td><?php echo $file['remarks'];?></td>               
                <td>
                    <a href="homeforadmin.php?file_id=<?php echo $file['id'];?>">Download</a>                   
                </td>
            </tr>           
            <?php endforeach ; ?>
            
        </tbody>
       </table>
    </div>   
            <img id="leftlogo" src="bhel.jpeg"/>
        <img id="rightlogo" src="gandhi.jpeg"/>   

    
    </body>
</html>
