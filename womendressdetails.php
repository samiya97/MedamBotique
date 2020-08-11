<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<title>Women Dress</title><link rel="shortcut icon" href="logo/12.png">
<?php include('config.php'); ?>
<?php 
session_start();
if(!empty( $_SESSION['Cur_User'])){
 $useremail = $_SESSION['Cur_User']; 
}
$ID = $_GET['id'];

 $_SESSION['Addss'] = "Women";
		$sql1 = "Select * from women where id = '$ID'";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_assoc($result1);
    $str = $row1["pic_ref"];
      $strarray = explode(',',$str);
      $pic = $strarray[0];


?>

    
    <link href="css/stylesheet.css" rel="stylesheet">
   
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-picZoomer.css">
    
    <style type="text/css">

    .piclist{
        margin-top: 30px;
    }
    .piclist li{
        display: inline-block;
        width: 50px;
        height: 50px;
    }
    .piclist li img{
        width: 100%;
        height: auto;
    }

    /* custom style */
    .picZoomer-pic-wp,
    .picZoomer-zoom-wp{
        border: 1px solid #fff;
    }


    </style>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="src/jquery.picZoomer.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>
</head>

<body>
<a href="index.html"><div id="logo"></div> </a>
<div id="nav">
    	<div id="navbar">
        	<ul>
            	<li><a href="index.php">Home</a></li>
                <li><a href="men.php"> Men </a></li>
                <li><a href="women.php"> Women </span></a></li>
                <?php 
if(empty($_SESSION['Cur_User'])){
?><li><a href="Login.php">Login</a></li>
<?php }
else { ?>
	<li><a href="Logout.php">Logout</a></li> <?php 
}
                ?>  <li><a href="aboutus.php">About Us</a></li>
            </ul>
       	</div>
    </div><div id="maindiv">
<div id="DesignerJacket">

    <div class="picZoomer">
        <img src="<?php echo $pic ?>" height="400" width="320" alt="">
    </div>

    <ul class="piclist">
    <?php 
    for($i=0; $i < count($strarray); $i++){
        if($i==1){
          continue;
        }
       ?> <li><img src="<?php echo $strarray[$i]; ?>" alt=""></li>
    <?php }

    ?>
     
      
       
    </ul>
    
</div>
    <div id="detailsproduct">
    <p style="font-size:36px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;"> <?php echo $row1["dressname"]; ?> <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px;"> PKR <?php echo $row1["price"]; ?> </span></p>
    <h2 style="font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"> Product details </h2>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;">
    <?php
     echo $row1["fabric"]; 
    	?> <br> <?php
     	
     ?>


    </p>
    <h2  style="font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> Size </h2>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-family:21px;"> <?php 
    $str = $row1["size"];
    $size = explode(",",$str);
    for($i=0;$i<count($size);$i++){
        echo $size[$i];
        echo "<br>";
    }    
    
     ?> </p>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-family:21px;"><?php echo $row1["Details"]; ?></p>
  <?php 
  $url = "addtocart.php";
  $_SESSION['Addss'] = "Women";
     if(!empty( $_SESSION['Cur_User'])){
     $id = $row1["id"];
     $url = "addtocarts.php?id=$id&email=$useremail";
 }
     ?>
       <a href="<?php echo $url ?>">
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
       </button> </a>
     
</div>
</div>
    
    
    
    
    

<div id="footer" align="center">

<table>
<tr>
<td><a href="aboutus.php"> <span> About Us </span>  </a></td>
<td> | </td>
<td> <a href="termsandconditions.php"> <span> Terms & Condition  </span> </a> </td>
<td> | </td>
<td><a href="ContactUs.php"><span> Contact Us </span></a></td>
</tr>
</table>

</div>
<div style="background-color:#CCC; width:100%; height:30px;">
	<div align="center" style="width:auto; height:auto; margin:auto;">
    	Copyright © 2017,Impressions Online MADAM Clothing Boutique
    </div>
</div>
</body>
</html>
