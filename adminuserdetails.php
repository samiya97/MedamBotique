<?php 
include('config.php');
$ID = $_GET['id'];
$query = "Select * from users where id='".$ID."'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel </title><link rel="shortcut icon" href="logo/12.png">
</head>

<body>


<div class="page-header" style="width:100%; border:2px solid #000 ; height:100px; background-color:#0346FF;"> 
<p style="color:#FFF; font-size:48px; padding-top:10px; padding-left:5px;"> Admin Panel <span style="color:#FFF; font-size:15px;"> for Madam Boutique</span> </p> </div>


<table class="table table-condensed">
<tr class="row">
<th class="col-md-1"> S.NO </th>
<th class="col-md-1"> First Name </th>
<th class="col-md-1"> Last Name </th>
<th class="col-md-1"> Email </th>
<th class="col-md-1"> Phone </th>
<th class="col-md-1"> Address </th>
<th class="col-md-1"> City </th>
</tr>



	<tr class="row">
	<td class="col-sm-1"> <?php echo $rows['id'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['firstname'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['lastname'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['email'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['Phone'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['Address'] ?> </td>
	<td class="col-sm-1"> <?php echo $rows['city'] ?> </td>
	</tr>


 </table>
</body>
</html>
