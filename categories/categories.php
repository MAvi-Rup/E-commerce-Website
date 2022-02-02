<?php

include("../database/db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affirmative</title>
<link rel="stylesheet" href="../style/style.css" media="all" />


</head>


<body>
		<!--main wraper-->
	<div class="main_wraper">
			
            
            
            <!--header wraper-->
		<div class="header_wraper"> 
       <img src="../photos/LOGO.png" width="172" height="85" style="float:left; padding-left:30px;" >
       <div id="search">
        
        	<form method="get" action="../result.php" enctype="multipart/form-data">
      	  <input type="text" name= "user_query" placeholder="SEARCH ENTIRE SHOP"/>
      	  <input type="submit" name="search" value="search"/>       
      	 </form>
      	 </div> 
</div>
        
        
        
        <!--navigation bar-->
        <div id="navbar">
        
        <ul id="menu"><li><a href="../index.php">HOME</a></li>
            <li><a href="#">CATEGORIES</a>
            <li><a href="#">TERMS</a></li>
            <li><a href="../login/login.php">LOGIN/REGISTER</a></li>
            <li><a href="#">ABOUT</a></li>
        </ul>
        </div>
          <!--part 7-->
        
<!--categoriess-->
         
        <div class="poster_wraper">
        <div id="cata">
        	
            <ul  id="cata_title">
        <?php
		$get_cats="select * from categories";
		$run_cats=mysqli_query($himel,$get_cats);
		while ($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
			
      echo "<li><b><a href='index.php?cat=$cat_id'>$cat_title</a></b></li>";
       
		}
		?>
		</ul>
        </div>
        
        
        
        </div>
        
        <!--contain wraper-->
        
        
<div class="content_wraper">
        
       
        
        </div>
        
        
        
        <!--footer wraper-->
<div class="footer">
<h1 style="color:#FFF;
padding-top:30 px; text-align:left;
font-size:12px;"> 2020-All copyright&copy; reserve by Puja </h1>

</div>
















<div/>

</body>
</html>