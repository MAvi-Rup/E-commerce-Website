<?php
include("database/db.php");
include('function/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affirmative</title>
<link rel="stylesheet" href="style/style.css" media="all" />


</head>


<body>
		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
		<div class="header_wraper"> 
      <img src="photos/LOGO.png" width="172" height="85" style="float:left; padding-left:30px;" >
       <div id="search">
        
        		<form method="get" action="results.php"enctype="multipart/form-data">
      	 <input type="text" name="user_query" placeholder="Search.." >
         <style> 
input[type=text] {
    width: 100px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
       background-image:url(photos/search.png);
    background-position: 1px 1px; 
    background-repeat: no-repeat;
    padding: 8px 16px 8px 36px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}
</style>
      	  <input type="submit"  name="search" value="search"/>        
      	 </form>
      	 </div> 
</div>
        
        
        
        <!--navigation bar-->
        <div class="dropdown">
 			<a href="index.php"><button  class="dropbtn" >Home</button></a>
 			 <div class="dropdown-content"></div>
		</div>
 
 			<div class="dropdown">
 			 <button class="dropbtn">Categories</button>
  			<div class="dropdown-content">
            <?php
            getCats();
			
			
			?>
		  </div>
		</div>
	 <div class="dropdown">
  		<button class="dropbtn">login/Register</button>
  		<div class="dropdown-content">
    		
    		<a href="login/login.php">Login</a>
            <a href="login/registation.php">Register</a>
             
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
   				 <a href="#">Supervisor</a>
    			<a href="#">Co-founders</a>
  			</div>
            </div>
          <!--part 7-->
        
<!--poaster raper-->
         
        <div class="poster_wraper">
       <img src="photos/poster main.jpg" height="450" width="1347" />
        
        
    </div>
        
        <!--contain wraper-->
        
        
<div class="content_wraper">

		<div id="headline">Our products</div>
    	<div id="headline2"></div>
    
	<div id="product_page">
  		<div id="products_box">
		<?php
		if(isset($_GET['price'])){
			$user_keyword=$_GET['price_query'];
       $get_products="select * from products where price<'$user_keyword' limit 0,9";
		$run_products=mysqli_query($himel,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		$pro_image=$row_products['img1'];
		
	
		echo"
		<div id='single_product'>
		<h3  style='color:#3C0'>$pro_title</h3>
		<img src='admin/product_image/$pro_image'
		 width='250' height='300'/>
		 <p><b>Price:৳ $pro_price</b></p>
	 	<a href='details.php?pro_id=$pro_id' style='float:left';'>Details</a>
		 <a href='payment.php?add_cart=$pro_id'><button style=float:right;'>Buy</button></a></div>";}
	
	
	
		}
		
		?>
        </div>
        
        <div  style="margin-top:600px; margin-bottom:30px;"id="headline">Releted products</div>
        <div >
        
        <?php
		
		getRelPro();
		
		
		?>
        </div>
      </div>
     </div>  
       
</div>

        
      </div> 
       
        <!--footer wraper-->
<div class="footer">
	<h1 style="color:#FFF;
	padding-top:30 px; text-align:left;
	font-size:12px;"> 2017-All copyright&copy; reserve by puja sarker </h1> <a href="index.php" ><h2 style=" font-size:12px; margin-right:20px; margin-top:5 px; color:
    #CCC; float:right">Top</h2></a>

</div>

</div>


</body>
</html>