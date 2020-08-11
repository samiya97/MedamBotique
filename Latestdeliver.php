<?php include('config.php');
session_start(); 
if(empty($_SESSION['Cur_User'])){
	header('Location: login.php');
}

$email = $_SESSION['Cur_User'];
$sql1 = "SELECT id FROM users WHERE email = '$email'";
$result1 = mysqli_query($conn,$sql1);
$users = mysqli_fetch_assoc($result1);
$UserID= $users['id'];

$fetchResult = "select * from addtocart";
$Execute = mysqli_query($conn,$fetchResult);
$count = mysqli_num_rows($Execute);
while($results = mysqli_fetch_assoc($Execute)){
if($results["Men_Women"] == "Women"){
	$product_ID = $results["id"];

	 $insertQry = "INSERT INTO orders (product_id, user_id,Men_women)
VALUES('$product_ID', '$UserID', 'Women')";
if(mysqli_query($conn,$insertQry)){
	
}
else {
	echo "Error WOMen";
}
}
else if($results["Men_Women"] = "Men"){
	$product_ID = $results["id"];

	 $insertQry = "INSERT INTO orders (product_id, user_id,Men_women)
VALUES('$product_ID', '$UserID', 'Men')";
	
if(mysqli_query($conn,$insertQry)){

}
else {
	echo "Error Men";
}
}

}

$deletetable = "delete from addtocart";
$variable = mysqli_query($conn,$deletetable);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Women</title><link rel="shortcut icon" href="logo/12.png">
<link href="css/stylesheet.css" rel="stylesheet">
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
