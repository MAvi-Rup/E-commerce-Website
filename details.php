<?php
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="style/style.css" media="all" />



<style>
* {box-sizing: border-box;}
.img-magnifier-container {
  position:relative;
}
.img-magnifier-glass {
  position: absolute;
  border: 2px solid #000000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 200px;
  height: 200px;
}
</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>




</head>


<body>
		<!--main wraper-->
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
<body>

<div class="icon-bar">
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/" class="fa fa-twitter"></a>
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
				
				<a style="color:#B8B2B2;font-size: 14px; float: left;margin-left: 250px; margin-top: 10px"><b>mail@shahrear.me</b></a><img src="photos/mail.png" width="40"  style="height:30px;margin-left: 10px;  width:30px; float:left; margin-top: 5px">
              	
           
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
				 
					<a style="color: #FFFFFF"><b>Account  </b></a><img src="photos/ac.png"   style="height:20px;width=30px; margin-top: 10px; margin-right:100px">
              	  <button  style="background:#FB3A3E; height: 40px;width: 150px;color: #F7F0F0;  border:hidden;margin-top: 3px"><b><h3>Cart</h3></b></button>
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
 		
  			<div class="dropdown-content">
   				 <a href="#">Link 1</a>
   			 <a href="#">Link 2</a>
    			<a href="#">Link 3</a>
  			</div>
		</div>
        
      </div>
         </div>
       
       </div>
        
        
        
        <!--navigation bar-->
       
          <!--part 7-->
        
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
		   
       
       
       </div>
<div class="content_wraper">

		<div id="headline">This product is Great !</div>
    	<div id="headline2"></div>
    
	<div id="product_page">
 		<div>
  		<div style="float: left" id="products_box1">
		<?php
		if (isset($_GET['pro_id']))
		{
			
			$product_id=$_GET['pro_id'];
			
        	$get_products="select * from products where product_id='$product_id'";
		$run_products=mysqli_query($db,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		
		$pro_image1=$row_products['img1'];
		$pro_image2=$row_products['img2'];
		$pro_image3=$row_products['img3'];
	
		echo"
		<div id='single_product'>
		<h3  style='color:#222327'>$pro_title</h3>
		
		 	<div class='img-magnifier-container'>
  <img style='float:left' id='myimage' src='admin/product_image/$pro_image1' width='240'  height='300'>
</div>
<script>
magnify('myimage', 3);
</script><br>
		 <p style='color:#000'><b>Price:৳ $pro_price</b></p>
		 
		 </div></div>
		 
			<div  style='float: right'id='products_box2'>
			<img src='admin/product_image/$pro_image2'
		 width='150' height='200'/>
		 <img src='admin/product_image/$pro_image3'
		 width='150' height='200'/><br>
		 <p style='color:#000;'>$pro_desc</p>
	 	<a href='index.php?pro_id=$pro_id' style='float:left;text-decoration:none;margin-top:135px;margin-left:10px;color: #222327';'>Back</a>
		<form  action='cart.php' enctype='multipart/form-data' method='post' style='float:left'> 
		<select name='quanitity'>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>10</option>
			   <option>20</option></select>
			   </form>
		 <a href='payment.php?add_cart=$pro_id'><button  style='float:right;background:#FB3A3E; height: 30px;width: 80px;margin-top:135px;margin-right:10px;color: #F7F0F0;  border:hidden';>Add to Cart</button></a></div>";}
		}
		
		?>
			
			</div>
			</div>
			
			<div  style="margin-top:10px; margin-bottom:30px;"id="headline">Releted products</div>
        <div  id="rel_product_page" >
        
        <?php
		
		getRelPro();
		
		
		?>
        </div>
			
			
			
			
			
			
		
		
			</div>
     
		
        
		
        
        
       
        <!--footer wraper-->
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
<div  style="float: right;width: 19%; margin-top: 5px;margin-right: 35px">
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
	
</div>    
</div>    
<!--footer wraper-->
<div  class="footer"><br>
	<h1 style="margin-left: 50px;color:#CCC;
	 text-align:left;
	font-size:12px;"> 2018-All copyright&copy; reserve by Puja sarker </h1>
   
   		
   			
   
</div>
    
</div> 


</body>
</html>