<?php
// start session
session_start();
// create contants
define('SITEURL','http://localhost/foodorder/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','foodorder');
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME,3307) or die(mysqli_error());

?>
