   
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




$sql="SELECT * FROM admin_table WHERE `user_email`='$myusername' and `password`='$mypassword'";
$result=$conn->query($sql);
$count=mysqli_num_rows($result);


if($count==1){

//echo "Hello Admin";
    $_SESSION["IdValidation"] = $myusername;
   header('Location: '.'admin_option.php');



}
else {
    $_SESSION["error"] = "Wrong Username or Password";
  //  header('Location: '.'login.php');
	echo"Wrong Username or Password";
}
?>