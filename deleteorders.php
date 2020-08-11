<?php
include('config.php');
$id = $_GET['id'];
$DeleteQuery = "DELETE from orders where id='$id'";
mysqli_query($conn,$DeleteQuery);
header('Location: orders.php');
?>