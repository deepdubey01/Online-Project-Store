<?php

session_start();
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "project";
$conn=mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
}

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/project/');
define('SITE_PATH','http://127.0.0.1/project');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/images/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'/images/products/');

?>
