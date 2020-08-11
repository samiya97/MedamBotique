<?php
include('config.php');
$id = $_GET['id'];
$DeleteQuery = "DELETE from users where id='$id'";
mysqli_query($conn,$DeleteQuery);
header('Location: adminusers.php');
?>