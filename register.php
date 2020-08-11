<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
<link rel="shortcut icon" href="logo/12.png">
<meta charset="utf-8">

<?php 
session_start();
include('config.php');

if(isset($_POST['SignUpSubmit']))
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$UserEmail = $_POST['UserEmail'];
	$UserPass = $_POST['UserPass'];
	$UserTele = $_POST['UserTele'];
  $UserAddress = $_POST['UserAddress'];
  $UserCity = $_POST['UserCity'];
  $_SESSION['Cur_User'] = $UserEmail;
	$QueryEmail = "SELECT email from users where email='".$UserEmail."'";
			$resultEmail= mysqli_query($conn,$QueryEmail);
			$AnsEmail = mysqli_num_rows($resultEmail);
			
			if($AnsEmail >=1)
			{
			  $ErrMsg1 = '<span class="alert alert-danger">UserEmail Already Exist !</span>';
			}
			else {
		$insertQry = "INSERT INTO users (firstname, lastname, email,password,phone,address,city)
VALUES('$FirstName', '$LastName', '$UserEmail', '$UserPass', '$UserTele','UserAddress','$UserCity')";


	if(mysqli_query($conn,$insertQry))
	{ 
	}
	else {
		
		echo "error";
	}

}
}

	?>


<title>Register</title><link rel="shortcut icon" href="logo/12.png">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<style>
/* Full-width input fields */
input[type=text], input[type=password] , input[type=email], input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */


span.psw {
    float: right;
    padding-top: 16px;
}
.modal-content {    padding: 20px;
       background-color: rgba(51, 51, 51, 0.76);
	   color:white;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}


</style>

</head>

<body>

<form class="modal-content form-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Signup"
  enctype="multipart/form-data">
<h2>Register</h2>
<h4>Please fill in the information to register.<br> Note: All fields are required.</h4>
<div align="center" style="padding:10px;">
<?php if(!empty($ErrMsg)) echo $ErrMsg; if(!empty($ErrMsg1)) echo $ErrMsg1; ?> </div>
<table>
  <tr><td>First Name</td>
    <td><input name="FirstName" type="text"  style="color:#000;" id="FirstName" required></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="LastName"  style="color:#000;" required></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input type="email" name="UserEmail"  style="color:#000;" required></td>
  </tr>
  <tr>
     <td>Password: </td>
    <td><input type="password" name="UserPass"  style="color:#000;" required></td>
  </tr>
  <tr>
     <td>Phone Number </td>
    <td><input type="tel" name="UserTele"  style="color:#000;" required></td>
  </tr>
   <tr>
    <td>Address </td>
    <td><input type="text" name="UserAddress"   style="color:#000;"required></td>
  </tr>
  <tr>
    <td>City </td>
    <td><input type="text" name="UserCity"  style="color:#000;" required></td>
  </tr>
  <tr>
     <td></td>
    <td><input style="margin-top:20px;" class="btn btn-default" type="submit" name="SignUpSubmit" required></td>
  </tr>
</table>


</form>

<script> 
document.getElementById('Username').addEventListener("keypress",function(evt)  {
    if (evt.which < 48 || (evt.which > 57 && evt.which < 65) || (evt.which > 90 && evt.which < 97) || evt.which > 122)
    {
        evt.preventDefault();
    }
});

</script>


</body>
</html>