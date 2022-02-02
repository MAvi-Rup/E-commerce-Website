<?php
include("database/db.php");
include('function/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>payment</title>
<link rel="stylesheet" href="style/style.css" media="all" />


</head>


<body>
		<!--main wraper-->
	<div class="main_wraper">
   <!--header wraper-->
		<div class="header_wraper"> 
       <img src="photos/LOGO.png" width="172" height="85" style="float:left; padding-left:30px;" >
      
</div>
<div id="headline">Proceed to checkout</div>
<div id="headline2"></div>
<div style="margin-bottom:40px;">
<img src="photos/paypal-logo.png" width="450" height="150" style="float:none; padding-left:30px;" >
        </div>
 <div id="login_form">
  
      
     
      <form name= "user_reg_form"action="index.php"   method="post">
      <label>
         <tr>
                <td>Name*:</td>
                <br />
                <td ><input type="text" name="txt_user_UserName" class="inputvalues"  placeholder="Type Your User Name""></td>
    </tr>
            <tr>
            <br />
            <td> Email* :</td><br />
                <td><input type="text" name="txt_user_UserEmail"  class="inputvalues"  placeholder="Type Your Email""></td>
            </tr>
            <br />
                <td>Phone Number*</td><br />
              <td><input type="text" name="txt_user_UserPassword" class="inputvalues"  placeholder="Type Your phone number"></td>
            </tr>
            
            <tr>
                <td>Address:</td>
                <br />
                <td ><input type="text" name="txt_user_UserName" class="inputvalues"  placeholder="Type Your Address"></td>
    </tr>
                    <br/>
                    <BR/>
                    <tr>
        <td align="right"><b>City :  </b></td>
        <td><select name="product_cat">
          <option>choose your city</option>
          <option>DHAKA</option>
          <option>KHULNA</option>
          <option>BARISAL</option>
          <option>CITTAGONG</option>
          <option>RAJSHAHI</option>
          <option>SYLET</option>
           <option>NOAKHALI</option>
          </select></td></tr>
                
           <br/><br/>
           
           <tr>
        <td align="right"><b>Payment Methods :  </b></td>
        <td><select name="product_cat">
          <option>choose payment method</option>
           <?php
		$get_cats="select * from method";
		$run_cats=mysqli_query($himel,$get_cats);
		while ($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id=$row_cats['method_id'];
			$cat_title=$row_cats['method_title'];
			
      echo "<option value='$cat_id'>$cat_title</option>";
       
		}
		?>
        </select></td><br/><br/><br/>
      </tr>
     
           
           
           
            
                <input type="checkbox" /><td  style="font-size:smaller 3PX;">I AGREE WITH THE TERMS AND CONDITIONS</td><br />
                <td><div align="center"><input type="submit"  class="register_btn" value="Confirm payment"/></div></td>
				<br>
              
	
             
           
         </tr>
      </p>
       </label>
       <form/>
  </div>
      <BR/>
      <BR/><BR/><BR/><BR/><BR/>
      
   </div> 
   
  <!--footer wraper-->
<div class="footer">
	<h1 style="color:#FFF;
	 text-align:left;
	font-size:12px;"> 2017-All copyright&copy; reserve by Himel </h1></div>
</body>
</html>