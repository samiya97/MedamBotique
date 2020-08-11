<?php include('config.php'); session_start(); ?>
<?php 
if(isset($_POST['submit']))
{
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Phone = $_POST['phone'];
    $msg = $_POST['message'];
    
    $insertQry = "INSERT INTO contact_us (firstname, lastname, phone, Message)
VALUES('$FirstName', '$LastName', '$Phone', '$msg')";
if(mysqli_query($conn,$insertQry))
    { 
    header('location:index.php');
    }
    else {
        echo "Masla";
    }
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title><link rel="shortcut icon" href="logo/12.png">
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
<div id="contactus">
<div class="form">
<h1 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif";> Contact Us </h1>
<form name="contactus" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<tr>
<td>First Name: </td> 
</tr>
<tr>
<td><input type="text" placeholder="First Name" name="fname"></td>
</tr>
<tr>
<td>Last Name: </td>
</tr><tr><td><input type="text" placeholder="Last Name" name="lname"></td>
</tr>
<tr>
<td>Phone: </td>
</tr><tr><td><input type="phone" placeholder="Phone" name="phone" size="30"></td>
</tr>
<tr>
<td>Your Message</td>
</tr>
<tr>
<td><textarea cols="50" rows="8" name="message" placeholder="Your Message"></textarea></td>
</tr>

<tr>
<td><input type="submit" value="Submit" name="submit" style="border-radius:7px; background-color:#000; color:#FFF; font-weight:bolder; width:100px; height:30px; font:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"></td>
</tr>
</table>
</form>
</div>
<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.170115474098!2d67.09125690070651!3d24.91587358937787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f32a0f2c3f3%3A0x4fc0a6fd386117f0!2sSir+Syed+University+of+Engineering+and+Technology!5e0!3m2!1sen!2s!4v1510682169007" width="300" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div id="address">Sir Syed University of Engineering and Technology</div>
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
    	Copyright © 2018,Impressions Online MADAM Clothing Boutique
    </div>
</div>

</body>
</html>