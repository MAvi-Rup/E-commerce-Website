<?php
session_start();
include("database/db.php");
include('function/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<link rel="stylesheet" href="style/style.css" media="all" />


</head>


<body>

		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
		<div class="header_wraper"> 
       
        <img src="photos/LOGO.png" width="172" height="85" style="float:left; padding-left:30px;" >
   
         
     
</div>
        
        
        
        
        
        <!--contain wraper-->
        <div class="content_wraper">
		<div id="headline">Login As Admin</div>
    	<div id="headline2"></div>
    
	<div id="del_page">
  		<div id="product_box">
        <div id="login_form">
      
      
     
      <form action="admin/Admin_Area.php"method="POST">
      <div align="center"> </div><br/>
        <br /><br/>
			<div align="left"> User Email :    <input type="text" class="inputvalues"  placeholder="Type Your Email" name="name"/>    </div><br/>
			<div align="left"> Password :    <input type="password" class="inputvalues"  placeholder="Type Your Password"name="password"/>   </div><br/>
            
            
			<div align="center"> <input type="submit" class="login_btn" name="signin" value="Login"/>
         
      </p>
      <form/></div>
        

 
	 
        </div>
    
  
    </div>
      </div>
      
        <!--footer wraper-->
<div class="footer">
	<h1 style="color:#CCC;
	 text-align:left;
	font-size:12px;"> 2017-All copyright&copy; reserve by Puja </h1>
    <a href ="../index.php"><h2 style=" font-size:12px; margin-right:20px; margin-top:5 px; color:
    #CCC; float:right">Top</h2></a>
    </div>
    
   </div> 
</body>
</html>