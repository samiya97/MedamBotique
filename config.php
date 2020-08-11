<?php

define('ServerName','localhost');
define('ServerUser','root');
define('ServerPass','');
define('ServerDB','bootique');

$conn = mysqli_connect(ServerName,ServerUser,ServerPass,ServerDB);
?>