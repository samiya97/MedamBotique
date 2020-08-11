<?php 

include('config.php');
/*
$query = "select pic_ref from women where id = '42'";
$results = mysqli_query($conn,$query);
$row = mysqli_fetch_row($results);
$string = $row[0];
$words = explode(",", $string);

for ($i=0; $i<count($words); $i++){
	
	$ref = $words[$i]; 
	if($ref != ""){
	$sql1 = "INSERT into table_picref (id,pic_ref)
	Values ('42','$ref')";
	mysqli_query($conn,$sql1);
}
}
*/

$query = "select size from women where id = '42'";
$results = mysqli_query($conn,$query);
$row = mysqli_fetch_row($results);
$string = $row[0];
$words = explode(",", $string);

for ($i=0; $i<count($words); $i++){
	$ref = $words[$i]; 
	if($ref != ""){
	$sql1 = "INSERT into table_size (id,size)
	Values ('42','$ref')";
	mysqli_query($conn,$sql1);
}
}

 ?>

