<?php
include("../admin/db.php");


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affirmative</title>
<link rel="stylesheet" href='../style/style.css' media="all" />


</head>


<body>
		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
		<div class="header_wraper"> 
       <img src='../photos/LOGO.png' width="172" height="85" style="float:left; padding-left:30px;" >
       
</div>
        
        
     
        
        <!--contain wraper-->
        
        
<div class="content_wraper">
        
       <form method="post" action="insert_product.php" enctype="multipart/form-data">
  <table align="center" width="554" height="482"   bgcolor="#FFF">
  <tr>
    <td width="191"><table width="468" height="482" align="center">
      <tr align="center">
        <td  colspan="2"><strong>Admin panel</strong></td>
      </tr>
      <tr>
        <td width="180" align="right"><b>Product Title :  </b></td>
        <td width="276"><input type="text" name="product_title"/></td>
      </tr>
      <tr>
        <td align="right"><b>Categories :  </b></td>
        <td><select name="product_cat">
          <option>select a categori</option>
          <?php
		$get_cats="select * from categories";
		$run_cats=mysqli_query($himel,$get_cats);
		while ($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
			
      echo "<option value='$cat_id'>$cat_title</option>";
       
		}
		?>
        </select></td>
      </tr>
      <tr>
        <td align="right"><b>Image 1 :  </b></td>
        <td><input type="file" name="product_img1"/></td>
      </tr>
      <tr>
        <td align="right"><b>Image 2 :  </b></td>
        <td><input type="file" name="product_img2"/></td>
      </tr>
      <tr>
        <td align="right"><b>Image 3 :  </b></td>
        <td><input type="file" name="product_img3"/></td>
      </tr>
      <tr>
        <td align="right"><b>Price :  </b></td>
        <td><input type="text" name="product_price"/></td>
      </tr>
      <tr>
        <td align="right"><b>Description :  </b></td>
        <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
      </tr>
      <tr>
        <td align="right"><b>keyword :  </b></td>
        <td><input type="text" name="product_keywords"/></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="insert_product" value="Insert Product"/></td>
      </tr>
    </table>      <strong></strong></td>
  </tr>
  </table>
</form>
        
</div>
        
         <a href="../index.php" ><input type="button" style="margin-top:80px; margin-right:10px; margin-bottom:40px; background:#F90" class="register_btn" value="Back To Home"/></a>
        
        <!--footer wraper-->
<div class="footer">
<h1 style="color:#FFF;
padding-top:30 px; text-align:left;
font-size:12px;"> 2020-All copyright&copy; reserve by Puja sarker</h1>

</div>
<div/>

</body>
</html>

<?php 
if (isset($_POST['insert_product'])){
	//text data variable
	$product_title=$_POST['product_title'];
	
	$product_cat= $_POST['product_cat'];
	$product_price= $_POST['product_price'];
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


if ($product_title=='' OR $product_cat=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='')
		{
			echo"<script>alert('NOTHING WILL HAPPEN UNLESS YOU FILL SOMETHING')</script>";
exit();
}


else{
	//uploading image on here
	move_uploaded_file($temp_name1,"product_image/$product_img1");
	
	move_uploaded_file($temp_name2,"product_image/$product_img2");
	
	move_uploaded_file($temp_name3,"product_image/$product_img3");
	
	$insert_product="insert into products(cat_id,title,description,price,img1,img2,img3,keywords,status,date)
	 values('$product_cat','$product_title','$product_desc','$product_price','$product_img1','$product_img2','$product_img3','$product_keywords','$status',NOW())";
	
	$run_product=mysqli_query($himel,$insert_product);

	if($run_product){
		echo"<script>alert('product inserted successfully')</script>";
		
		}
	else
		
		echo"<script>alert('product inserted Failed')</script>";
		
	}
}

?>