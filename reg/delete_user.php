<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="demo"; 
$tbl="usertable"; 


$conn = new mysqli($host, $username, $password, $db_name);




$id=$_GET['id'];


// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl WHERE UserId='$id'";
$result=$conn->query($sql);

// if successfully deleted
if($result){
    
    ?>
    <div align="center">Welcome To Delete Page</div><br/>
    <table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
        



            

<?php
    
    
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='userlist.php'>Back to UserList page</a>";
}

else {
echo "ERROR";
}
?> 
        
        
    </table>

<?php
// close connection 
$conn->close();
?>