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
    		
    		<a href="../login/login.php">Login</a>
            <a href="../login/registation.php">Register</a>
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
   				 <a href="supervisor.php">Supervisor</a>
    			<a href="cofounder.php">Co-founders</a>
  			</div>
            </div>
          <!--part 7-->
        
<!--poaster raper-->
         
        <div class="poster_wraper">
       <img src="../photos/poster main.jpg" height="450" width="1347" />
        
        
    </div>
        
        <!--contain wraper-->
        
        
<div class="content_wraper">

		<div id="headline"><b> Superviser<b/></div>
    	<div id="headline2"></div>
    
	<div style="padding-top:20px; margin-top:30px"; id="admin_page">
  		<div id="products_box">
       <!--  <img src="file:///C:/xampp/htdocs/project/photos/ENspinnup_svo_930x600.gif" width="458" height="243"  id="cofounder_box"  style="float:left"/>
        <div  style="float:left"id="small_div"></div>
        
        <h1 style="float:none;color:#0C0;"><img src="../photos/6bebca8c6394c8817aec45a155ab7d94.png" width="60" height="266" />Fahmida Afrin</h1><br /><br />
        <div>
          <div align="left" style="color:#000;" > <strong>Designation        :Lecturer </strong></div>
        </div>
<p align="left" style="float:none; color:#000;"><strong>Department : Department of Computer Science and Engineering</strong></p>
        <p align="left" style="float:none; color:#000;"><strong>Faculty : Faculty of Science and Information Technology</strong></p>
        <p align="left" style="float:none; color:#000;"><strong>Email : fahmida.cse@diu.edu.bd</strong></p>
        <p align="left" style="float:none; color:#000;"><strong>Cell-Phone : 01706068157</strong></p>-->
        <a href="../index.php" ><input type="button" style="margin-top:80px; margin-right:10px; background:#F90" class="register_btn" value="Back To Home"/></a>
      </div>

    
  
      </div>
      </div>
      
        <!--footer wraper-->
<div class="footer">
	<h1 style="color:#FFF;
	 text-align:left;
	font-size:12px;"> 2017-All copyright&copy; reserve by Himel </h1></div>
   </div> 
</body>
</html>