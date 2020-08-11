<?php 

include('config.php'); 
session_start();

if(empty( $_SESSION['admin'])){
	 header('Location:login.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title><link rel="shortcut icon" href="logo/12.png">
</head>

<body>
<div class="page-header" style="width:100%; border:2px solid #000 ; height:100px; background-color:#0346FF;"> 
<p style="color:#FFF; font-size:48px; padding-top:10px; padding-left:5px;"> Admin Panel <span style="color:#FFF; font-size:15px;"> for Madam Boutique</span> </p> </div>

<table class="table text-capitalize">
<tr class="row">
<td class="col-md-4"><a href="adminusers.php"> Users </a> </td>
</tr>
<tr class="row">
<td class="col-md-4"><a href="adminmen.php"> Add Men Products </a> </td>
</tr>

<tr class="row">
<td class="col-md-4"><a href="adminwomen.php"> Add Women Products </a> </td>
</tr>

<tr class="row">
<td class="col-md-4"><a href="viewmen.php"> View Men Products </a> </td>
</tr>

<tr class="row">
<td class="col-md-4"><a href="viewwomen.php"> View Women Products </a> </td>
</tr>

<tr class="row">
<td class="col-md-4"> <a href="feedback.php"> Feedbacks </a></td>
</tr>
<tr class="row">
<td class="col-md-4"> <a href="orders.php"> Orders </a></td>
<tr class="row">
<td class="col-md-4"><a href="login.php"> Logout </a></td>
</tr>
</tr>
</table>
</body>
</html>