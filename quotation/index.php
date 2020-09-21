<?php
session_start();
if (!isset($_SESSION)) {
	header("Location:../");
}
require '../_inc/config.php';
require '../model/crud.php';
require '../model/func.php';


$conn = dbconnect();

if ($conn) {
	$quote_id = $_GET['quote'];

	$quote = getQuotationInfo($conn,$quote_id);
	
	if ($quote) {
		extract($quote);
		$date = date('D d-F-Y', strtotime($date_due));
		$quote_date = date('D d-F-Y', strtotime($date_quoted));
		$delivery_date = date('D d-F-Y', strtotime($delivery_date));

	} else {
		die('Quotation not available.');
	}
	

}

require '../views/quotation.view.php';
?>