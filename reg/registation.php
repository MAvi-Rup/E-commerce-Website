<?php
include("../database/db.php");
include('../function/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affirmative</title>
<link rel="stylesheet" href="../style/style.css" media="all" />


</head>


<body>
		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
		<div class="header_wraper"> 
       <img src="../photos/LOGO.png" width="172" height="85" style="float:left; padding-left:30px;" >
       <div id="search">
        
        	<form method="get" action="../results.php"enctype="multipart/form-data">
      	  <input type="text" name= "user_query" placeholder="SEARCH ENTIRE SHOP"/>
      	  <input type="submit" name="search" value="search"/>       
      	 </form>
      	 </div> 
</div>
        
        
        
        <!--navigation bar-->
        <div class="dropdown">
 			<a href="../index.php"><button  class="dropbtn" >Home</button></a>
 			 <div class="dropdown-content"></div>
		</div>
 
 			<div class="dropdown">
 			 <button class="dropbtn">Categories</button>
  			<div class="dropdown-content">
            
		  </div>
		</div>
	 <div class="dropdown">
  		<button class="dropbtn">login/Register</button>
  		<div class="dropdown-content">
    		
    		<a href="login.php">Login</a>
            <a href="registation.php">Register</a>
  			</div>
		</div>
 		<div class="dropdown">
 		 <button class="dropbtn">Terms & condition</button>
  			<div class="dropdown-content">
   				 <a href="#">Link 1</a>
   			 <a href="#">Link 2</a>
    			<a href="#">Link 3</a>
  			</div>
		</div>
        <div class="dropdown">
        <button class="dropbtn">About</button>
        <div class="dropdown-content">
   				 <a href="../admin/supervisor.php">Supervisor</a>
    			<a href="../admin/cofounder.php">Co-founders</a>
  			</div>
            </div>
          <!--part 7-->
        
<!--poaster raper-->
         
        <div class="poster_wraper">
        <img src="../photos/poster main.jpg" height="450" width="1347" />
        
        
        </div>
        
        <!--contain wraper-->
        
        
<div class="content_wraper">
<div id="headline">Register Now</div>
<div id="headline2"></div>

		 <div id="login_form">
  
      
     
      <form name= "user_reg_form"action="../new folder/registration.php"   method="post">
      <label>
         <tr>
                <td>User Name:</td>
                <td><input type="text" name="txt_user_UserName"></td>
            </tr>
            <tr>
                <td>User Password :</td>
              <td><input type="text" name="txt_user_UserPassword"></td>
            </tr>
                    <tr>
                <td>User Email :</td>
                <td><input type="text" name="txt_user_UserEmail"></td>
            </tr>
            
               
                <td><div align="center"><input type="submit"  value="SUBMIT"/></div></td>
				<br>
              
	
             
            <a href="login.php"><input type="button" class="login_btn" value="Back to Login" /></a>
         
      </p>
  <form/>
  </div>
      
        <!--footer wraper-->
<div class="footer">
	<h1 style="color:#FFF;
	 text-align:left;
	font-size:12px;"> 2017-All copyright&copy; reserve by Himel </h1></div>
   </div> 
</body>
</html>