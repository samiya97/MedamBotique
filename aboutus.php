<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<link rel="shortcut icon" href="logo/12.png">

<link href="css/stylesheet.css" rel="stylesheet">
</head>
<?php session_start(); ?>
<body>
<a href="index.html"><div id="logo"></div> </a>
<div id="nav">
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
    </div><div id="aboutus">
<h1> About Us </h1>
<p> Madam Boutique, began as a men's and women's fashion clothing online store in 2017. Our first collection stood out in the online fashion market. we created a new line for women's and men's apparel, shoes and accessories. Thrilled by our rapid growth, we will continue to create new ideas, outlook and expectations for the fashion world.
<br><br>
Our team is inspired by the culture of the city. We follow the ever changing trends closely and continue to refresh our exclusive collection with fabulous designs.
<br><br>
We believe that fashion is an attitude. Style is a perfect expression of who we are - bold and unfettered. Madam Boutique is a magical place where fashion generates endless excitement and unexpected joy. We have created a space that enriches and motivates people with the positive energy we all sorely need in real life. Some may call fashion trivial, but we know that style means more than a thin layer of fabric.
<br><br>
Love fashion. Love Life
<br><br>
Madam Boutique
</p>
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
