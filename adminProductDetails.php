<?php 
include('config.php');
session_start();
$ID = $_GET['id'];
$MF = $_GET['MF'];
$Pid = "";
$PName = "";
$PPic = "";
$Pdetails = "";
$PPrice = "";
if($MF == "Men"){
	
	$query = "Select * from men where id='".$ID ."'";
	$Result = mysqli_query($conn,$query);
	 $row = mysqli_fetch_assoc($Result);
	 $Pid1 = $row['id'];
	 $Pid = $Pid1;
	 $PName1 = $row['dress_name'];
	 $PName = $PName1;
	 $PPic1 = $row['headerpic'];
	 $PPic = $PPic1;
	 $Pdetails1 = $row['product_detailes'];
	 $Pdetails = $Pdetails1;
	 $PPrice1 = $row['price'];
	 $PPrice = $PPrice1;
}
else if ($MF == "Women"){
		$query1 = "Select * from women where id='".$ID ."'";
	$result = mysqli_query($conn,$query1);
	 $row = mysqli_fetch_assoc($result);
	 $Pid1 = $row['id'];
	 $Pid = $Pid1;
	 $PName1 = $row['dressname'];
	  $PName = $PName1;
	 $PPic1 = $row['headerpic'];
	  $PPic = $PPic1;
	 $Pdetails1 = $row['Details'];
	  $Pdetails = $Pdetails1;
	 $PPrice1 = $row['price'];
	 $PPrice = $PPrice1;
}



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
<th class="col-md-2"> Product Name </th>
<th class="col-md-1"> Pic </th>
<th class="col-md-1"> Details </th>
<th class="col-md-1"> Price </th>
</tr>
<tr class="row"> 
 <td class="col-sm-1"><?php echo $Pid; ?> </td>
  <td class="col-sm-1"><?php echo $PName; ?> </td>
   <td class="col-sm-1"><img src="<?php echo $PPic; ?>" height="150" /> </td>
    <td class="col-sm-3"><?php echo $Pdetails; ?> </td>
    <td class="col-sm-1"><?php echo $PPrice; ?> </td>
    </tr>


 </table>
</body>
</html>


