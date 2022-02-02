  <?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="affirmative"; 
//$tbl_name="usertable"; 


$conn = new mysqli($host, $username, $password, $db_name);

$myUserName=$_POST['txt_user_UserName']; 
$myUserEmail=$_POST['txt_user_UserEmail']; 
$myUserPassword=$_POST['txt_user_UserPassword']; 

if ($myUserName=='' OR $myUserEmail=='' OR $myUserPassword=='')
		{
			echo"<script>alert('NOTHING WILL HAPPEN UNLESS YOU FILL SOMETHING')</script>";
exit();
}


else{
$sql = "INSERT INTO user_table (user_name, user_email, user_pass)
VALUES ('$myUserName','$myUserEmail','$myUserPassword')";

if ($conn->query($sql) === TRUE) {
    header('Location: '.'../login/login.php');
} else {
  echo"<script>alert('fill all the field')</script>";
}

$conn->close();




}




?>