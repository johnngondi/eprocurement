<?php
session_start();
if (!isset($_SESSION['email']) OR $_SESSION['role'] != 'admin') {
	header("Location:login.php?err=admin");die();
}

require 'model/crud.php';
$conn = dbconnect();

if ($conn) {
	$idno  = $_GET['idno'];

	$sql = "DELETE from staffdetailstble WHERE idno = $idno";
	deleteData($conn,$sql);

	$sql = "DELETE from users WHERE id = $idno";
	deleteData($conn,$sql);

	die();
} else {
	header("Location:login.php?err=admin");die();
}
?>