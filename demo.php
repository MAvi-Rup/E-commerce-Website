 <?php 
 session_start();
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


if ($product_title=='' OR $product_price=='' OR $product_desc=='')
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
	$insert_product="UPDATE `products` SET  `title`=[$product_title],`description`=[$product_desc],`price`=[$product_price],`img1`=[$product_img1],`img2`=[$product_img2],`img3`=[$product_img3] where product_id=$pro_id";
	
	$run_product=mysqli_query($himel,$insert_product);

	if($run_product){
		echo"<script>alert('product Updated successfully')</script>";
		
		}
	}
}

?>