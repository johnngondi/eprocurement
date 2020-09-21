<?php
session_start();
if ($_SESSION['role'] != 'supplier') {
	die('Error 500: forbiden Access - You are not allowed to access this area');
}
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {
	$id = $_GET['id'];

	$sql = "DELETE FROM quote WHERE id=\"$id\"";
	deleteData($conn,$sql);

	header("Location:./#prodss");
}
?>