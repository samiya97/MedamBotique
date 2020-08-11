<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Madam Boutique</title>
<link href="css/stylesheet.css" rel="stylesheet" />
 <link rel="shortcut icon" href="logo/12.png">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
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
    <div id="mainslide">
    <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/BareezeLawn2015SpringSummerCollection.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/untitled21.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="data1/images/untitled2.jpg" alt="" title="" id="wows1_2"/></li>
		<li><a href="women.html"><img src="data1/images/untitled22.jpg" alt="http://wowslider.com/" title="" id="wows1_3"/></a></li>
		<li><img src="data1/images/untitled32.jpg" alt="" title="" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/bareezelawn2015springsummercollection.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/untitled21.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/untitled2.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/untitled22.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/untitled32.jpg" alt=""/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#">bootstrap carousel</a> by WOWSlider.com v8.5</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --></div>
<div class="madamvariety">
Are you looking to buy Pakistani dresses online? Dresses that compliment your style, elevate your lifestyle and steal the spotlight? At Madam Boutique, we make that happen each day for hundreds of men and women.
We are an online Pakistani boutique having a team of dedicated fashion designers, fashion strategists and expert tailors committed to meeting your suiting needs and exceeding all your fashion desires.
At Madam Boutique, you will find the widest variety of Pakistani designers wear collection that you can wear at various occasions and festivals to be an equal part of the celebration. Our team works hard and places complex thought-process to devise each dress.
With a focus on satisfying your clothing needs, Madam Boutique aims to use the best quality fabric and bring the most stylish clothing options to your digital screen. Explore our online boutique and get mesmerized with some of the most intricate designs in line with today’s fashion trends.
</div>
<div id="menwomantable">
<table>
<tr>
<td width="450"><a href="women.php"><img src="img/women/q.jpg" width="450" height="400" style="border:3px solid #999; border-radius:20px; box-shadow:0 5px 10px #666; margin-right:10px;" /></a></td>
<td><a href="men.php"><img src="img/thumbs/main.jpg" width="450" height="400" style="border:3px solid #999; border-radius:20px; box-shadow:0 5px 10px #666;" /></a></td>
</tr>
<tr>
<td align="center" style="font-weight:bold; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:24px"><a href="women.php"><span id="menwomantablespan">Women's Collection</span></a></td>
<td align="center" style="font-weight:bold; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:24px"><a href="men.php"><span id="menwomantablespan">Men's Collection</span></a></td>
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
</div>
</body>
</html>
