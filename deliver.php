<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deliver</title><link rel="shortcut icon" href="logo/12.png">
<?php include('config.php');
session_start(); 
if(empty($_SESSION['Cur_User'])){
	header('Location: login.php');
}
$email = $_SESSION['Cur_User'];
$sql1 = "SELECT * FROM users WHERE email = '$email'";
$result1 = mysqli_query($conn,$sql1);
$users = mysqli_fetch_assoc($result1);
$firstname = $users['firstname'];
$lastname = $users['lastname'];
$uemail = $users['email'];
$phone = $users['Phone'];
$address = $users['Address'];
$city = $users['city'];

for($i = 0 ; $i < count($_SESSION['cart']); $i++){
 $a= $_SESSION['cart'][$i];
  $sql = "SELECT * FROM men WHERE id = '$a'";
      $result[$i] = mysqli_query($conn,$sql);
  $count[$i]= mysqli_num_rows($result[$i]);
  $dress[$i] = mysqli_fetch_assoc($result[$i]);
}
for($i = 0 ; $i < count($_SESSION['cart']); $i++){
 $dname =	$dress[$i]["dress_name"];
 $dprice = $dress[$i]["price"];
 $insertQry = "INSERT INTO orders (firstname, lastname,email,phone,address,city,dressname,price)
VALUES('$firstname', '$lastname', '$uemail', '$phone','$address','$city','$dname','$dprice')";
if(mysqli_query($conn,$insertQry)){

}
}
unset($_SESSION['cart']);
?>
<link href="css/stylesheet.css" rel="stylesheet">

 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deliver </title><link rel="shortcut icon" href="logo/12.png">
\
</head>

<body>
<a href="index.php"><div id="logo"></div> </a>
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
    </div>

<div class="container" style="height:220px;">
<h1 align="center">
Thank you for Ordering from Madam Boutique
</h1>
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
