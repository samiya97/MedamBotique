<?php 

include('config.php'); ?>
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


<table class="table table-condensed">
<tr class="row">
<th class="col-md-1"> S.NO </th>
<th class="col-md-1"> Dress Name </th>
<th class="col-md-1"> Price </th>

<th class="col-md-1"> Size </th>
<th class="col-md-1"> Delete </th>

</tr>

<?php 

$Query = "Select * from men ";
$result = mysqli_query($conn,$Query);
mysqli_num_rows($result);
while($rows = mysqli_fetch_assoc($result))
{
	echo '<tr class="row">';
	echo '<td class="col-sm-1">' . $rows['id'] . '</td>';
	echo '<td class="col-sm-1">' . $rows['dress_name'] . '</td>';
	echo '<td class="col-sm-1">' . $rows['price'] . '</td>';
	
	echo '<td class="col-sm-1">' . $rows['size'] . '</td>';
	
	echo '<td class="col-sm-1"> <a href="mdelete.php?id=' . $rows['id'] . '">Delete</a></td>';
	echo '</tr>';

}

?>

 </table>
</body>
</html>