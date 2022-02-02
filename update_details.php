<?php
include("database/db.php");
include('function/functions.php');
 session_start(); 
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
       
</div>
        
        
        
       
        
        <!--contain wraper-->
        
        
<div class="content_wraper">

		<div id="headline">update products</div>
    	<div id="headline2"></div>
    
	<div id="product_page">
  		<div id="products_box">
        
		<?php
		if (isset($_GET['pro_id']))
		{
			
			$prod_id=$_GET['pro_id'];
			
        	$get_products="select * from products where product_id='$prod_id'";
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
		 
		 <form method='post' action='update_details.php' enctype='multipart/form-data'>
		 
		 
		<tr>
        <td width='280'  align='right'><b style='color:#3C0;'>Product Title :  </b></td>
        <td width='376'><input type='text'  style='color:#3C0' placeholder='$pro_title' name='product_title'/></td>
      </tr><br/> <br/> <br/>
	  
	  
	  
		<img src='admin/product_image/$pro_image1'
		 width='150' height='200'/>
		 <tr><br/>
		  <td width='280'  align='right'><b style='color:#3C0;'>New image:  </b></td>
       
        <td><input type='file' name='product_img1'/></td>
      </tr><br/><br/><br/>
		 
		 
		 <img src='admin/product_image/$pro_image2'
		 width='150' height='200'/><br/>
		 <tr>
		  <td width='280'  align='right'><b style='color:#3C0;'>New image:  </b></td>
        
        <td><input type='file' name='product_img2'/></td>
      </tr><br/><br/>
     <img src='admin/product_image/$pro_image3'
		 width='150' height='200'/> <br/>
		 <tr>
		  <td width='280'  align='right'><b style='color:#3C0;'>New image:  </b></td>
       
        <td><input type='file' name='product_img3'/></td>
      </tr><br/><br/>
		 
		 
		  <br/> <br/>
		 <tr>
 <td width='280'  align='right'><b style='color:#3C0;'>Product id :  </b></td>
         <td width='276'><input type='text'  style='color:#3C0' placeholder='write $pro_id ' name='product_id'/></td>
      </tr><br/>
		 
		 
		 <br/> <br/>
		 
		 
		 
		  <br/> <br/>
		 <tr>
 <td width='280'  align='right'><b style='color:#3C0;'>Product Price :  </b></td>
         <td width='276'><input type='text'  style='color:#3C0' placeholder='৳ $pro_price' name='product_price'/></td>
      </tr><br/>
		 
		 
		 <br/> <br/>
		 
		 <tr>
		  <td width='280'  align='right'><b style='color:#3C0;'>Product Description :  </b></td>
        <td><textarea name='product_desc' placeholder='$pro_desc'cols='20' rows='10'></textarea></td>
      </tr>
		  <br/> <br/> <br/> <br/>
	 	<a href='admin/update_page.php' style='float:left';>Back</a> <br/> <br/>
		<tr>
		<a href='../update_page.php?pro_id=$pro_id'><button  name='insert_product' style=background:#CCC;'style=color:#FFF;'style=float:center;' style=padding:20px;' style=margine top:8px;'><b>Update</b></button></a></div>
        
      </tr></form>";}
		}
		
		?>
        <?php 
if (isset($_POST['insert_product'])){
	//text data variable
	$pro_id=$_GET['product_id'];
	$product_title=$_POST['product_title'];
	
	$product_cat= $_POST['product_cat'];
	$product_price= $_POST['product_price'];
	$product_price= $_POST['product_id'];
	$product_desc= $_POST['product_desc'];
	
	$status='on';
	$product_keywords=$_POST['product_keywords'];
	
	//images names
	
	$product_img1= $_FILES['product_img1']['name'];
	$product_img2= $_FILES['product_img2']['name'];
	$product_img3= $_FILES['product_img3']['name'];
	
	//image temp names
	
$temp_name1=$_FILES['product_img1']['tmp_name'];
$temp_name2=$_FILES['product_img2']['tmp_name'];
$temp_name3=$_FILES['product_img3']['tmp_name'];


if ($product_title==''  OR $product_price=='' OR $product_desc=='' OR $product_img1=='')
		{
			echo"<script>alert('NOTHING WILL HAPPEN UNLESS YOU FILL SOMETHING')</script>";
exit();
}


else{
	//uploading image on here
	move_uploaded_file($temp_name1,"product_image/$product_img1");
	
	move_uploaded_file($temp_name2,"product_image/$product_img2");
	
	move_uploaded_file($temp_name3,"product_image/$product_img3");

	$pro_id=$_GET['pro_id'];
	$insert_product="UPDATE products SET title ='$product_title',description='$product_desc',price='$product_price',img1='$product_img1',img2='$product_img2',img3='$product_img3',date=NOW()
WHERE product_id=$pro_id;";
	
	$run_product=mysqli_query($himel,$insert_product);

	if($run_product){
		echo"<script>alert('product update successful')</script>";
		
		}
	else 
		//echo"<script>alert('product update failed')</script>";
			echo $insert_product;
}

}
?>
       
        </div>
        
        
      </div>
     </div>  
       
</div>

        
      </div> 
       


</div>


</body>
</html>