   
<?php
session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="affirmative"; 
//$tbl_name="usertable"; 



$conn = new mysqli($host, $username, $password, $db_name);



$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 

if ($myusername=='' OR $mypassword=='')
		{
			echo"<script>alert('NOTHING WILL HAPPEN UNLESS YOU FILL SOMETHING')</script>";
exit();
}


else{


$sql="SELECT * FROM user_table WHERE `user_email`='$myusername' and user_pass='$mypassword'";
$result=$conn->query($sql);
$count=mysqli_num_rows($result);


if($count==1){

    $_SESSION["IdValidation"] = $myusername;
	
   header('Location: '.'../index.php');



}
else {
    $_SESSION["error"] = "Wrong Username or Password";
		echo"<script>alert('product inserted successfully')</script>";


}}
?>