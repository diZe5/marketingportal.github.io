
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
        <link rel="stylesheet" type="text/css" href="stylespasswordrecovery2.css">  
        
        
 
    </head>
    <body>
        <p id="leftcolums"></p>
        <p id="rightspace">
            
         <p id="heading">Password Recovery Form</p>  
         <hr id="afterheading" >
         <div id="workfront">
             <form class="mysecondform" action="passwordrecovery2.php" method="post">
             <label>Staff No</label>&emsp;&emsp;&emsp;&emsp;
             <input name="staffno" type="text" class="workfronttstaffno" required/><br><br><br>
             <input name="recover" type="submit" id="recover_btn" value="Send password on my email id"/><br><br>
                        <?php
           
           if(isset($_POST['recover']))
           { 
    $chars="0123456789QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm <br>";
    $newpassword='';
    for($i=0;$i<7;$i++)
        $newpassword .= $chars[mt_rand(0,61)];
    $servername='sql12.freesqldatabase.com';
     $user='sql12348806';
     $pass=' jPZ9eeVJkb';
     $db='sql12348806';
     // Create connection
     $conn = mysqli_connect($servername, $user, $pass,$db);

     // Check connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     $a=$_POST['staffno'];
     $sql="SELECT email FROM bhelstaff where staffno='$a'";
     $query=mysqli_query($conn,$sql);
     $result=mysqli_fetch_assoc($query);
     $resultstring=$result['email'];
       
       $to= $resultstring;
         $sub="password ";
         $msg="Your new password is".' '.$newpassword;
         $head="From:dummydumber369@gmail.com";
         
         if(mail($to,$sub,$msg,$head))
         { 
             echo'<script type="text/javascript"> alert("Mail sent")</script>'; 
             $query2="UPDATE bhelstaff SET password='$newpassword' WHERE staffno='$a'";
             mysqli_query($conn,$query2);
         }
         else 
         {     echo'<script type="text/javascript"> alert("Mail not sent")</script>'; }
           } 
       
           ?>
             
             
             
             
         </form>
         </div>
        </p>
        <p id="border">Enter your Staff No to receive your password</p>
       
        

        <div id="p3" style="background-image: url('p3background.jpeg');">POWER SECTOR-MARKETING</div>
        <h3>Welcome : </h3>
        <h4>Guest</h4>

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
            <center><p id="login">Login</p></center>
                
            

            <center><p id="quick">Quick Links</p></center><br>
            <div id="sec">
                
                
                <ul>
                    <li><a>Old Website</a></li><br>
                    <li><a>Customer Directory</a></li><br>
                <li><a>Client Certificate</a></li><br>
                <li><a>Knowledge Management</a></li><br>
                <li><a>Telephone Directory</a></li><br>
                <li><a>Debtor Management System(DMS)</a></li><br>
                <li><a>WebMail</a></li><br>
                </ul>
                
                
            </div>
            
                        <center><div id="main-wrapper">
	
	
	
          
	
	<form class="myform" action="login.php" method="post">
		<label>Staff.No:</label>
		<input name="username" type="text" class="input" placeholder="Type ur username" required/><br>
		<label>Password:</label>
		<input name="password" type="password" class="input" placeholder="Type ur password" required/><br><br>
		<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
                <p id="vr"></p>
                
                <a href="google.com" id="help">Help</a>
	</form>

           
                </div></center>
        
     
       
    </div>    
       <img id="leftlogo" src="bhel.jpeg"/>
        <img id="rightlogo" src="gandhi.jpeg"/>
    </body>
</html>
     