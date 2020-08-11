<?php 

 include('config.php');
session_start();

if(empty( $_SESSION['Cur_User'])){
	
	   header('Location:login.php');
}
$ID = $_GET['id'];
$total = 0;
$_SESSION['cart'][] = $ID;

if($_SESSION['Addss'] == "Women"){
	
	$sql = "Select * from women where id = '$ID'";
	$result = mysqli_query($conn,$sql);
	$count= mysqli_num_rows($result);
	$dress = mysqli_fetch_assoc($result);
$d0 = $dress["id"];

$insertQry = "INSERT into addtocart(id,Men_Women)
		Values('$d0','Women')" ;
if(mysqli_query($conn,$insertQry)){
	
}
else {
	echo "Error women";
}
}
else if ($_SESSION['Addss'] == "Men"){
$sql = "Select * from men where id = '$ID'";
	$result = mysqli_query($conn,$sql);
	$count= mysqli_num_rows($result);
	$dress = mysqli_fetch_assoc($result);
$d0 = $dress["id"];

$insertQry = "INSERT into addtocart(id,Men_Women)
		Values('$d0','Men')" ;
if(mysqli_query($conn,$insertQry)){
	
}
else {
	echo "Error Men";
}
//	$email = $_GET['email'];
}	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Madam Boutique</title><link rel="shortcut icon" href="logo/12.png">
<link href="css/stylesheet.css" rel="stylesheet" />
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Madam Boutique</title><link rel="shortcut icon" href="logo/12.png">
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
                <li><a href="women.php"> Women </a></li>
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
$fetchData = "Select * from addtocart";
	$execute = mysqli_query($conn,$fetchData);
	
	 ?>
<?php 
while($dress2 = mysqli_fetch_assoc($execute))
{
	$men_women = $dress2['Men_Women'];

	if($men_women == "Men"){
		$ProductID = $dress2['id'];
		$MenProduct = "Select dress_name,price, headerpic from men where id = '".$ProductID."'";
		$GetMenProduct = mysqli_query($conn,$MenProduct);

		$Rowss = mysqli_fetch_assoc($GetMenProduct);
	
?>
<tr class="row">
<td><img src="<?php echo $Rowss["headerpic"]; ?>" height="150" /></td>
<td class="col-md-1" ><?php echo $Rowss["dress_name"]; ?> </td>
<td class="col-md-1" ><?php echo $Rowss["price"]; ?> </td>
</tr>

<?php 
$total = $total + $Rowss["price"];
}
else if($men_women == "Women")
{
	
		$ProductID = $dress2['id'];
		$MenProduct = "Select dressname,price, headerpic from women where id = '".$ProductID."'";
		$GetMenProduct = mysqli_query($conn,$MenProduct);
		$Rowss = mysqli_fetch_assoc($GetMenProduct);
	
?>
<tr class="row">
<td><img src="<?php echo $Rowss["headerpic"]; ?>" height="150" /></td>
<td class="col-md-1" ><?php echo $Rowss["dressname"]; ?> </td>
<td class="col-md-1" ><?php echo $Rowss["price"]; ?> </td>
</tr>

<?php 
$total = $total + $Rowss["price"];
}
}
?>
<tr class="row">
<td></td>
<td class="col-md-1" ><a href="pdelete.php">Delete</a></td>
<td class="col-md-2" >SubTotal(<?php echo $total ?>)<br /><a href="latestDeliver.php">Deliver</a></td>
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

</body>
</html>


