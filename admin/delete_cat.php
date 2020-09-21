<?php
session_start();
if ($_SESSION['role'] != 'admin') {
	die('Error 500: forbiden Access - You are not allowed to access this area');
}
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {
	$id = $_GET['id'];

	$sql = "DELETE FROM categories WHERE id=\"$id\"";
	deleteData($conn,$sql);

	header("Location:./#prodss");
}
?>