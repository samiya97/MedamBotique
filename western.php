<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Western Dresses</title><link rel="shortcut icon" href="logo/12.png">
<link href="css/stylesheet.css" rel="stylesheet">
<?php include('config.php'); ?>
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
      <div id="women"> <table bordercolordark="#000000" style="border-color:#000">
     <tr>
     <?php 
		$sql1 = "Select * from women where brand = 'Western'";
		$count=0;
		$result1 = mysqli_query($conn, $sql1);
		if(mysqli_num_rows($result1) > 0){
			while($row1 = mysqli_fetch_assoc($result1))
            {
              $str = $row1["pic_ref"];
      $strarray = explode(',',$str);
      $pic = $strarray[0];
              $count++; 
		?>
    <td align="center" style="border:3px solid #999; border-radius:20px; height:320px; width:330px; padding-top:20px; box-shadow:0 5px 10px #666; margin-right:10px;">
    <a href="womendressdetails.php?id=<?php echo $row1["id"]; ?>"><img src="<?php echo $pic; ?>" width="260" height="300"></a><div style="height:30px; color:#000; margin-top:10px; margin-bottom:15px;"> <span style="text-decoration:none; margin-top:-10px;"> <?php echo $row1["dressname"]; ?> </span> <br> 
    <span> <?php echo $row1["price"]; ?> </span> </div> </td>
<?php  if($count==3){ ?> </tr> <tr> </tr><?php $count=0; }	} 
		}
	?> 
    
</table>
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