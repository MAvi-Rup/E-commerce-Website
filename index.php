<?php
session_start();
include("database/db.php");
include('function/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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


</head>


<body>

<style>
body {margin:0;height:2000px;}

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>


<div class="icon-bar">
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.facebook.com/" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
</div>
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #FB3A3E;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
		
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
		
		
		

		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
            <div class="top">
            
				<div style="width: 70%;float: left;">
				
				<a style="color:#B8B2B2;font-size: 14px; float: left;margin-left: 250px; margin-top: 10px"><b>pujasarker2007@gmail.com</b></a><img src="photos/mail.png" width="40"  style="height:30px;margin-left: 10px;  width:30px; float:left; margin-top: 5px">
              	
           
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
           
           <div >
            <img src="photos/ac.png"   style="float: left; height:20px;width=30px;margin-top: 10px;">
             
				<div   class="dropdownacc"style="width:20px;float: left;margin-top: 8px">
				 
					<a style="color: #FFFFFF "><b>Account  </b></a>
            	 	<div class="dropdown-contentacc">
    		
    		<a href="login/logout.php"><b>Logout</b></a>
						<div style="border: .5px  solid #454242"></div>
           <?php
       			$user=$_SESSION["IdValidation"];
						
			
						$name="select user_name from user_table where user_email='$user'";
						
						$run_products=mysqli_query($db,$name);
		while ($row_products=mysqli_fetch_array($run_products)){
			$username=$row_products['user_name'];
			      
						
						echo   "<div style='color: white;'>name:$username</div>";
						echo   "<div style='color: white;margin-top:4px'>$user</div>";
						
		}
						
				
				?>
            
             	 	</div>
             	 	 
              
	 
            
            
	   </div>
	   </div>
				<a href="cart.php"><button  style="background:#FB3A3E; height: 40px;width: 150px;color: #F7F0F0;  border:hidden;margin-top: 3px"><b><h3>Cart</h3></b></button></a>
	  </div>
              
              	
      	 
         
         
        </div>
         
         
          
           
           
           
           	
           
           
           
		<div class="header_wraper"> 
       
                
        <img src="photos/LOGO.png" width="172" height="85" style="float:left; padding-left:180px;padding-top: 30px" >
       
      
       
</div>
       <div class="navbar">
		
       <div class="dropdown">
		  <a href="index.php">
		  <button  class="dropbtn" ><b>Shop</b></button></a>
 			 <div class="dropdown-content"></div>
	  </div>
 
 			<div class="dropdown">
 			 <button class="dropbtn"><b>Categories</b></button>
  			<div class="dropdown-content">
            <?php
            getCats();
			
			
			?>
		  </div>
		</div>
	 <div class="dropdown">
	   <button class="dropbtn"><b>login/Register</b></button>
  		<div class="dropdown-content">
    		
    		<a href="login/login.php"><b>Login</b></a>
            <a href="login/registation.php"><b>Register</b></a>
            
	   </div>
	  </div>



    <div class="dropdown">
     <button class="dropbtn"><b>Login As Admin</b></button>
      <div class="dropdown-content">
        
        <a href="AdmiN.php"><b>Login As Admin</b></a>
            
            
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
       
         
        
<!--poaster raper-->
         
        <div class="poster_wraper">
        
        
        
        
        
        
       <img src="photos/hero.jpg" height="450" width="1347";
          />
        
        
    </div>
       <div class="cont">
      				<img  src="photos/contact us.png"style=" height:50px;width=40px; margin-top:10px"><a style="color: #FFFFFF; font-size: 18px; margin-bottom: 50px;margin-right: 180px"><b>Contact us</b></a>
		 <img  src="photos/location.png"style=" height:50px;width=40px; margin-top:10px"><a style="color: #FFFFFF; font-size: 18px; margin-bottom: 50px;margin-right: 200px"><b>Location</b></a>
      				
      				
      			<a href="admin/cofounder.php"><img src="photos/Question_Mark.png"style=" height:40px;width=40px; margin-top:10px"></a><a href="admin/cofounder.php" style="color: #FFFFFF; font-size: 18px; border: hidden;text-decoration: none; margin-bottom: 50px;"><b>About</b></a>
      				
       				

		   
		   </div>
		   
       
       
      
        
        <!--contain wraper-->
        
        
<div class="content_wraper">

		
  <div id="headline2"></div>
    
	<div id="product_main">
  		<div id="products_box">
		<?php
        getPro(); 
		getCatPro();
		
		?>
        </div>
			<div style="margin-top:50px; margin-right:50px" class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a  href="index.php">2</a>
  <a href="index.php">3</a>
  <a href="index.php">4</a>
  <a href="index.php">5</a>
  <a href="index.php">6</a>
  <a href="index.php">&raquo;</a>
</div>
    
 
  
  
    </div>
 
           </div>
 
    <!--s_wraper-->
          
<div class="s_wraper">

  <div style="float: left;margin:20px; width: 70%;height: 110px;font-size: 17px">
	<div style="float: left;margin-left: 190px">
	<a href="admin/cofounder.php" style="border: none;text-decoration: none ; color: #FFFFFF;float: left;margin-left: 50px">About</a><br>
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
<a href=https://www.facebook.com/" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="https://www.facebook.com/" class="fa fa-linkedin"></a>
<a href="https://www.facebook.com/" class="fa fa-instagram"></a>
<a href="https://www.facebook.com/" class="fa fa-pinterest"></a>
	
</div>    
</div>    
<!--footer wraper-->
<div  class="footer"><br>
	<h1 style="margin-left: 50px;color:#CCC;
	 text-align:left;
	font-size:12px;"> 2020-All copyright&copy; reserve by Puja sarker </h1>
   
   		
   			
   
</div>
    
 
</body>
</html