<?php 
session_start();
unset($_SESSION['Cur_User']);
header('Location: index.php');
?>