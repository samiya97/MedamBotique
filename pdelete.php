<?php 

 include('config.php');
session_start();
$deletetable = "delete from addtocart";
$variable = mysqli_query($conn,$deletetable);
header('Location: index.php');

?>