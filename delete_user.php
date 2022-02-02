<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="affirmative"; 
 


$conn = new mysqli($host, $username, $password, $db_name);




$id=$_GET['pro_id'];


// Delete data in mysql from row that has this id 
$sql="DELETE FROM products WHERE product_id='$id'";
$result=$conn->query($sql);

// if successfully deleted
if($result){
    
    ?>
    <div align="center">Welcome To Delete Page</div><br/>
    <table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
        



            

<?php
    
    
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='admin/delete_product.php'>Cotinue Deleting</a>";
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