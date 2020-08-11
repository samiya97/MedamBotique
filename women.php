<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Women</title><link rel="shortcut icon" href="logo/12.png">
<?php 
session_start();
?>
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
   <div id="women">
    <table bordercolordark="#000000" style="border-color:#000" width="1000">
  <tr> <td align="center" style="border:3px solid #999; border-radius:20px; box-shadow:0 5px 10px #666; margin-right:10px; width:260px;">
  <a href="khaadi.php"><img src="img/women/2/1.jpg" width="400"></a></td>
    <td align="center" style="border:3px solid #999; border-radius:20px; box-shadow:0 5px 10px #666; margin-right:10px; width:260px;">.
    <a href="exclusive.php"><img src="img/women/7/3.jpg" width="400"></a></td></tr>
	
	
	
    <tr>
    <td align="center" style="font-weight:bold; font-size:21px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Khaadi Collection</td>
    <td align="center" style="font-weight:bold; font-size:21px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
    Exclusive Colletion</td>
	
    </tr>
    <tr>
    
	  <td align="center" style="border:3px solid #999; border-radius:20px; box-shadow:0 5px 10px #666; margin-right:10px; width:260px;">
      <a href="western.php"><img src="img/women/7/4.jpg" width="400"></a></td></tr>
    </tr>
    <tr> <td align="center" style="font-weight:bold; font-size:21px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
     Western Colletion</td>
    </tr>
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
