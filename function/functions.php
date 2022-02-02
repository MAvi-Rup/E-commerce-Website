<?php


	
$db=mysqli_connect("localhost","root","","affirmative");


function getPro(){
	
	global $db;
	if(!isset($_GET['cat'])){
		$get_products="select * from products order by rand() LIMIT 0,6";
		$run_products=mysqli_query($db,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		$pro_image=$row_products['img1'];
		
	
		echo"
		<div id='single_product'>
		<h3 style='color:#222327' style='text-decoration:none'>$pro_title</h3>
		<img src='admin/product_image/$pro_image'
		 width='250' height='300'/>
		 <p style='color:#000'><b>Price:৳ $pro_price</b></p>
	 	<a href='details.php?pro_id=$pro_id' style='float:left;text-decoration: none;color:#222327';><b>Details</b></a>
		 <a href='payment.php?add_cart=$pro_id'><button  style='float:right;background:#FB3A3E; height: 30px;width: 80px;color: #F7F0F0;  border:hidden';>Add to Cart</button></a>
		 
		 <div>
		 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style>
.fa {
    font-size: 80px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: #db0012;
}
</style>
		 <i onclick='myFunction(this)' class='fa fa-heart'></i>

<script>
function myFunction(x) {
    x.classList.toggle('fa-thumbs-down');
}
</script>
		 
		 </div>
		 </div>
		 ";}
	}
}


function getdel(){
	
	global $db;
	if(!isset($_GET['cat'])){
		$get_products="select * from products";
		$run_products=mysqli_query($db,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		$pro_image=$row_products['img1'];
		
	
		echo"
		<div id='del_pro'> 
		<h3 style='color:#222327' style='text-decoration:none'>$pro_title</h3>
		<img src='../admin/product_image/$pro_image'
		 width='100' height='150'/><br/>
		 <a href='../delete_user.php?pro_id=$pro_id'><button  style='float:center;background:#FB3A3E; margin-top:5px;height: 25px;width: 60px;color: #F7F0F0;  border:hidden';>Delete</button></a></div>";}
	}
}


function getupdate(){
	
	global $db;
	if(!isset($_GET['cat'])){
		$get_products="select * from products";
		$run_products=mysqli_query($db,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		$pro_image=$row_products['img1'];
		
	
		echo"
		<div id='del_pro'> 
		<h3 style='color:#222327' style='text-decoration:none'>$pro_title</h3>
		<img src='../admin/product_image/$pro_image'
		 width='100' height='150'/><br/>
		 <a href='../update_details.php?pro_id=$pro_id'><button  style='float:center;background:#FB3A3E; margin-top:5px;height: 25px;width: 60px;color: #F7F0F0;  border:hidden';>Update</button></a></div>";}
	}
}

	function getRelPro(){
	
	global $db;
	if (isset($_GET['pro_id']))
		{
	 $pro_id=$_GET['pro_id'];
		$get_products="select * from products where cat_id=(select cat_id from products where product_id=$pro_id )order by rand() LIMIT 0,3";
		$run_products=mysqli_query($db,$get_products);
		while ($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
		$pro_title=$row_products['title'];
		$pro_cat=$row_products['cat_id'];
		$pro_desc=$row_products['description'];
		$pro_price=$row_products['price'];
		$pro_image=$row_products['img1'];
		
	
		echo"
		<div id='single_product'>
		<h3 style='color:#222327' style='text-decoration:none'>$pro_title</h3>
		<img src='admin/product_image/$pro_image'
		 width='250' height='300'/>
		 <p style='color:#000'><b>Price:৳ $pro_price</b></p>
	 	<a href='details.php?pro_id=$pro_id' style='float:left;color:#222327;text-decoration:none';>Details</a>
		 <a href='payment.php?add_cart=$pro_id'><button  style='float:right;background:#FB3A3E; height: 30px;width: 80px;color: #F7F0F0;  border:hidden';>Add to Cart</button></a></div>";}
	
	
	
	}
	}
	
	function getCatPro(){
	
	global $db;
	if(isset($_GET['cat'])){
		$cat_id= $_GET['cat'];
		
		$get_cat_pro="select * from products where cat_id='$cat_id'";
		$run_cat_pro=mysqli_query($db,$get_cat_pro);
		$count=mysqli_num_rows($run_cat_pro);
		if($count==0){
			echo"<h2>no products available in this category</h2>";
			}
		while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
			$pro_id=$row_cat_pro['product_id'];
		$pro_title=$row_cat_pro['title'];
		$pro_cat=$row_cat_pro['cat_id'];
		$pro_desc=$row_cat_pro['description'];
		$pro_price=$row_cat_pro['price'];
		$pro_image=$row_cat_pro['img1'];
		
	
		echo"
		<div id='single_product'>
		<h3 style='color:#222327'>$pro_title</h3>
		<img src='admin/product_image/$pro_image'
		 width='250' height='300'/>
		 <p style='color:#000'><b>Price:৳ $pro_price</b></p>
	 	<a href='details.php?pro_id=$pro_id' style='float:left;text-decoration:none;margin-left:10px;color: #222327';'>Details</a>
		 <a href='payment.php?add_cart=$pro_id'><button  style='float:right;background:#FB3A3E; height: 30px;width: 80px;margin-right:10px;color: #F7F0F0;  border:hidden';>Add to Cart</button></a></div>";}
	}
	
	
	}
	
	
	
	function getCats(){
		global $db;
			$get_cats="select * from categories";
			$run_cats=mysqli_query($db,$get_cats);
			while ($row_cats=mysqli_fetch_array($run_cats)){
				$cat_id=$row_cats['cat_id'];
				$cat_title=$row_cats['cat_title'];
			
   			   echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";}
			}
			
	function getmethod(){
		global $db;
			$get_cats="select * from method";
			$run_cats=mysqli_query($db,$get_cats);
			while ($row_cats=mysqli_fetch_array($run_cats)){
				$cat_id=$row_cats['method_id'];
				$cat_title=$row_cats['method_title'];
			
   			   echo "<li><a href='payment.php?cat=$cat_id'>$cat_title</a></li>";}
			}
			
	
	
?>


