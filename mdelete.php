<?php
include('config.php');
$id = $_GET['id'];
$DeleteQuery = "DELETE from men where id='$id'";
mysqli_query($conn,$DeleteQuery);
$DeleteQuery1 = "DELETE from table_menpic_ref where id= '$id'";
mysqli_query($conn,$DeleteQuery1);
$DeleteQuery2 = "DELETE from table_mensize where id = '$id'";
mysqli_query($conn,$DeleteQuery2);
header('Location: viewmen.php');
?>