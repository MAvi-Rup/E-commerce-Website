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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affirmative</title>
<link rel="stylesheet" href="../style/style.css" media="all" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Affirmative</title>

<link rel="stylesheet" href="../style/style.css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Affirmative</title>
<link rel="stylesheet" href="style/style.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: 'Alegreya Sans';font-size: 18px;
}
</style>
<style>
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a.active {
    background-color: #FB3A3E;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 190px;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 2px solid #888888;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #222327;
	width: 480px;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>






</head>


<body style="background: #FFFFFF">
		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
            <div class="top">
            
				<div style="width: 70%;float: left;">
				
				<a style="color:#B8B2B2;font-size: 14px; float: left;margin-left: 250px; margin-top: 10px"><b>mail@shahrear.me</b></a><img src="../photos/mail.png" width="40"  style="height:30px;margin-left: 10px;  width:30px; float:left; margin-top: 5px">
              	
           
        	<form method="get" action="results.php"enctype="multipart/form-data">
      	 <input type="text"  style="color: #FFFFFF; margin-top: 5px; margin-left: 60px;"name="user_query" placeholder="Search.." >
         <style> 
input[type=text] {
    width: 180px;
    box-sizing: border-box;
   border: hidden;
    border-radius: 4px;
    font-size: 16px;
    background-color:#2e2f30;
    background-image:url(photos/search.png);
    background-position: 1px 1px; 
    background-repeat: no-repeat;
    padding: 8px 16px 8px 36px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}


</style>
      	        
      	 </form>
					
					
				</div>
             
				<div style="width: 30%;float: right">
				 
					<a style="color: #FFFFFF"><b>Account  </b></a><img src="../photos/ac.png"   style="height:20px;width=30px; margin-top: 10px; margin-right:100px">
              	  <button  style="background:#FB3A3E; height: 40px;width: 150px;color: #F7F0F0;  border:hidden;margin-top: 3px"><b><h3>Cart</h3></b></button>
				</div>
              
              	
      	 
         
         
        </div>
         
         
          
           
           
           
           	
           
           
           
		<div class="header_wraper"> 
       
                
        <img src="../photos/LOGO.png" width="172" height="85" style="float:left; padding-left:180px;padding-top: 30px" >
       
      
       
</div>
       <div class="navbar">
		
       <div class="dropdown">
		  <a href="../index.php">
		  <button  class="dropbtn" ><b>Shop</b></button></a>
 			 <div class="dropdown-content"></div>
	  </div>
 
 			<div class="dropdown">
 			 <button class="dropbtn"><b>Categories</b></button>
  			<div class="dropdown-content">
            
		  </div>
		</div>
	 <div class="dropdown">
	   <button class="dropbtn"><b>login/Register</b></button>
  		<div class="dropdown-content">
    		
    		<a href="../login/login.php"><b>Login</b></a>
            <a href="../login/registation.php"><b>Register</b></a>
            
	   </div>
	  </div>
 		
  			<div class="dropdown-content">
   				 <a href="#">Link 1</a>
   			 <a href="#">Link 2</a>
    			<a href="#">Link 3</a>
  			</div>
	  </div>
        
</div>
         
        
        
        
        <!--navigation bar-->
       
        
        <!--contain wraper-->
        
        
<div class="content_wraper">

		<div id="headline"><b>About<b/></div>
    	<div id="headline2"></div>
    
	<div id="admin_page">
 		
 		<div id="products_box">
       <div id="headline"><b>About owner discription<b/></div><br>
        <img src="../photos/mam.jpg" width="458" height="243"  id="cofounder_box"  style="float:left"/>
        <h1 style="float:none;color:#E73838;"><img src="../photos/6bebca8c6394c8817aec45a155ab7d94.png" width="60" height="266" /> Puja Sarker_172-15-9715 </h1><br /><br />
        <div>
          <div align="left"></div>
        </div>
<p align="left" style="float:none; color:#000;">&nbsp;</p>
        <p align="left" style="float:none; color:#000;"><strong>This is my online shopping site<br>Shop name:Affermative</strong></p>
        <p align="left" style="float:none; color:#000;"><strong>Use this site for getting your necessary things in this pandemic situation<br>Happy shopping</strong></p>
        <p align="left" style="float:none; color:#000;">&nbsp;</p>
        <p align="left" style="float:none; color:#000;"><strong>Email : pujasarker2007@gmail.com</strong></p>
        
	  </div>
 		 <div id="headline"><b>About Product & Shopping Payment System <b/></div><br>
 		
  		<div id="products_box">
        <img src="../photos/Himel-Pro-600x300.jpg" width="458" height="243"  id="cofounder_box"  style="float:left"/>
        <h1 style="float:none;color:#0C0;"><img src="../photos/6bebca8c6394c8817aec45a155ab7d94.png" width="60" height="266" />Product Information</h1><br /><br />
        <div>
          <div align="left"></div>
        </div>
<p align="left" style="float:none; color:#000;">&nbsp;</p>
        <p align="left" style="float:none; color:#000;"><strong>Here we sell product for both Man & women </strong></p>
        <p align="left" style="float:none; color:#000;"><strong>e.g: Ladies dress, Ladies Shoes, Cosmetics,Men's dresses, Baby dresses ,Accessorys etc </strong></p>
        <p align="left" style="float:none; color:#000;">&nbsp;</p>
        <p align="left" style="float:none; color:#000;"><strong>For more detail contact with us <br>Phone number:1234567890</strong></p>
       
         
	  </div>
     
     
     <!-- kingkongs profile here-->
    <div  style="padding-top:20px; margin-top:70px;"id="products_box">
        <img src="../photos/mee.jpg" width="458" height="243"  id="cofounder_box"  style="float:left"/>
        
      <h1 style="float:none; padding:none;color:#0C0;"><img src="../photos/6bebca8c6394c8817aec45a155ab7d94.png" width="60" height="266" />Procedure of Shopping <br /><br /></h1>
        <div>
          <div align="left"></div>
        </div>
<p align="left" style="float:none; color:#000;;">&nbsp;</p>
        <p align="left" style="float:none; color:#000;"><strong>Information About Buying And Payment Method:
        </strong></p>
        <p align="left" style="float:none; color:#000;"><strong>1:Need to choose your required product <br>2: Give your Information & Have to pay via the Credit card.</strong></p>
        
        <p align="left" style="float:none; color:#000;"><strong>Any quires?<br>Contact with Us for more details - Phone:018198496278</strong></p>
        
          <a href="../index.php" ><input type="button" style=" border: none;  margin-top:80px; margin-right:10px; background:#E73838" class="register_btn" value="Back To Home"/></a>
	  </div></div>
  
    </div>
     
      </div>
      
      
        <!--footer wraper-->
        <div style="margin-top: 300px">
         
<div class="s_wraper">

  <div style="float: left;margin:20px; width: 70%;height: 110px;font-size: 17px">
	<div style="float: left;margin-left: 190px">
	<a href="cofounder.php" style="border: none;text-decoration: none ; color: #FFFFFF;float: left;margin-left: 50px">About</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Terms and Conditions</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Help</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Brands and sponsers</a><br>
	<img  src="photos/coustomer care 2.png"style=" height:20px;width=20px;"><a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Questions?</a><br>
		</div>
		<div style="float: right;margin-right: 120px">
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Careers</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Privacy Statement</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Return policy</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Corporate sales</a><br>
	<a href="#" style="border: none;text-decoration: none ;color: #FFFFFF;float: left;margin-left: 50px">Visit Our Blogs</a><br>
		</div>
		
		
	</div>
<div  style="float: right;width: 20%; margin-top: 5px;margin-right: 40px">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 15px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}


</style>





<!-- Add font awesome icons -->
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="https://pinterest.com/" class="fa fa-pinterest"></a>
	
  
	</div>    </div>
<!--footer wraper-->
<div  class="footer"><br>
	<h1 style="margin-left: 50px;color:#CCC;
	 text-align:left;
	font-size:12px;"> 2020-All copyright&copy; reserve by Puja sarker</h1>
   
   		
   			
   
</div>
</div>

</body>
</html>