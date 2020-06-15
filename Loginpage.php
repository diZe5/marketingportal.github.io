
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">       
        <title></title>            
 <link rel="stylesheet" type="text/css" href="styles2.css">       
    </head>
  <style>
#p3 {
  background-image: url('p3background.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  position: absolute;
  top: 0%;
  left: 0%;
  height: 72px;
  width: 100%;
}
</style>
    <body>
        <p id="leftcolums"></p>
        <p id="rightspace"></p>
        <p id="border"></p>
        <p id="matter">hiwvrv efnvervwr erorfoermfr rfwrfwf,wf wefmwfwef,wefmwelmfwewf wwefw efwef f adadsa d da sdas </p>
    <center><p id="thought">Thought of the Day</p></center>
 
        <div id="p3" style="background-image: url('p3background.jpeg');">POWER SECTOR-MARKETING</div>
        <p id="h3">Welcome to Login Page </p>
        

        <a href="index.php" id="log">Home</a>
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
                         
            <center><div id="main-wrapper">
		
        <form class="myform" action="Loginpage.php" method="post">
		<label>Staff.No:</label>
		<input name="staffno" type="text" class="input"  required/><br>
		<label>Password:</label>
                
		<input name="password" type="password" class="input"  required/><br><br>
		<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
                <p id="vr"></p>
                <a href="passwordrecovery2.php" id="fog">Forgot password</a>
                <a href="google.com" id="help">Help</a>
		</form>
		<?php
		if(isset($_POST['login']))
		{	
                      $servername='localhost';
                      $user='root';
                      $pass='snores';
                      $db='login';
                      
                    
                        $conn = mysqli_connect($servername, $user, $pass,$db);
                        if (!$conn) 
                        {
                        die("Connection failed: " . mysqli_connect_error());
                        }
			$staffno=$_POST['staffno'];
			$password=$_POST['password'];                      
			$query="select adminpassword from bhelstaff WHERE staffno='$staffno' AND password='$password'";
                        
			$query_run = mysqli_query($conn,$query);
                        $result = mysqli_fetch_assoc($query_run);
                        $resultstring = $result['adminpassword'];


                       
			if($resultstring==yess)
			{
				$_SESSION['staffno']=$staffno;
				$_SESSION['password']=$password;
				header('location:homeforadmin.php');
				
			}
                        elseif ($resultstring==noo) 
                        {
                            	$_SESSION['staffno']=$staffno;
				$_SESSION['password']=$password;
				header('location:homeforuser.php');
                        }
			else
			{
				echo'<script type="text/javascript"> alert("Invalid credentials")</script>';
			}
		}
		?>

           
                </div></center>
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
        
     
       
    </div> 
        
        <img id="leftlogo" src="bhel.jpeg"/>
        <img id="rightlogo" src="gandhi.jpeg"/>
      
    </body>
</html>
     