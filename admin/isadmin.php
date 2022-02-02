   
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




$sql="SELECT * FROM admin_table WHERE `user email`='$myusername' and password='$mypassword'";
$result=$conn->query($sql);
$count=mysqli_num_rows($result);


if($count==1){

//echo "Hello Admin";
    $_SESSION2["IdValidation"] = $myusername;
   // header('Location: '.'../admin/insert_product');



}
else {
    $_SESSION2["error"] = "Wrong Username or Password";
  //  header('Location: '.'login.php');
	echo"no";
}
?>