<?php include('config.php');
session_start();
if(empty( $_SESSION['Cur_User'])){
	
	   header('Location:login.php');
}
$ID = $_GET['id'];
$email = $_GET['email'];
$total = 0;

$_SESSION['cart'][] = $ID;
$arrys = array_merge( $_SESSION[ 'cart' ],explode( ",", $ID) );
$_SESSION['cart'] = array_unique($arrys);
$d = array();
for($i = 0 ; $i < count($_SESSION['cart']); $i++){
  if($_SESSION['cart'] != " "){
 $a= $_SESSION['cart'][$i];
  $sql = "SELECT * FROM men WHERE id = '$a'";
      $result[$i] = mysqli_query($conn,$sql);
  $count[$i]= mysqli_num_rows($result[$i]);
  $dress[$i] = mysqli_fetch_assoc($result[$i]);
  //$b = array($count);
}
else {
  $d = array_merge($i);
}
}

  $check1 = "";
	
for($i = 0 ; $i < count($dress); $i++){
  if($d == $i){
    continue;
  }
  else {
$str[$i] = $dress[$i]["pic_ref"];
$strarray[$i] = explode(",",$str[$i]);
 } 
}
$sql1 = "SELECT * FROM users WHERE email = '$email'";
$result1 = mysqli_query($conn,$sql);
$users = mysqli_fetch_assoc($result1);

 ?>


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add to Cart</title><link rel="shortcut icon" href="logo/12.png">
<link href="css/stylesheet.css" rel="stylesheet" />

 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Madam Boutique</title>Add to Cart<link rel="shortcut icon" href="logo/12.png">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body>

<a href="index.html"><div id="logo"></div> </a>
<div id="nav" style="height:47px;">
    	<div id="navbar" >
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
                ?>
                
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
       	</div>
    </div>

<table class="table text-capitalize">
<tr class="row">
<td class="col-md-5" style="font-size:36px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;"> Shopping Cart</td>
</tr>
<tr class="row">
<td></td>
<td class="col-md-1" >Product Name</td>
<td class="col-md-1" > Price </td>
</tr>
<?php 
for($i=0 ; $i < count($dress) ; $i++){
   if($d == $i){
    continue;
  } else {
  ?><tr class="row">
<td><img src="<?php echo $strarray[$i][0]?>" height="150"></td>
<td class="col-md-1" ><?php echo $dress[$i]["dress_name"]; ?> </td>
<td class="col-md-1" ><?php echo $dress[$i]["price"]; ?> </td>
</tr>
<?php 
}}

?>

</tr>
<tr class="row">
<td></td>
<?php 
$total = 0;
for($i=0 ; $i < count($dress) ; $i++){
$total = $total + $dress[$i]["price"];
}
?>
<td class="col-md-1" ><a href="pdelete.php">Delete</a></td>
<td class="col-md-2" >SubTotal(<?php echo $total ?>)<br><a href="men.php">Add more</a><br><a href="Deliver.php">Deliver</a></td>

</tr>
</table>
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
</div>
</body>
</html>
