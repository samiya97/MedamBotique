<?php
include('config.php');
$id = $_GET['id'];
$DeleteQuery = "DELETE from women where id='$id'";
mysqli_query($conn,$DeleteQuery);
$DeleteQuery1 = "DELETE from table_picref where id= '$id'";
mysqli_query($conn,$DeleteQuery1);
$DeleteQuery2 = "DELETE from table_size where id = '$id'";
mysqli_query($conn,$DeleteQuery2);
header('Location: viewwomen.php');
?>