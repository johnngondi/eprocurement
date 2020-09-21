<?php
require '_inc/config.php';
require 'model/crud.php';
$conn = dbconnect();

if ($conn) {
	$today = strtotime(date("Y-m-d")) ;
	$tenders = getAllTenders($conn);
	
	if ($tenders) {
		//loop through the tenders
		foreach ($tenders as $tender) {
			extract($tender);
			$date_due = strtotime($date_due);
			$appr_date = strtotime($approval_date);
			//get all tender quotes
			$quotes = getTenderQuotes($conn,$id);

			if ($quotes) {
				//check if its past due
					
					
				if ($today-$date_due > 0) {

					//approve quote which cost < max in FCFS
					foreach ($quotes as $quote) {
						if ($quote['cost'] < $max_price && $quote['cost'] > $min_price) {
							//approve this quote and reject the others.
							approveQuote($conn,$quote['id'],$id);
						}
					}

				} else {
					//date is not past due

					//check if its approval time or past approval time
					if ($today-$appr_date >=0 ) {
						
						//approve interms of date of delivery and date due
						foreach ($quotes as $quote) {
								$date_del = date('Y-m-d', strtotime($quote['delivery_date']));

							if ($date_del < $date_due) {
								//check cmax cost
								if ($max_price-$quote['cost'] > ($max_price-$min_price)/2) {
									//Aprrove this quotation
									approveQuote($conn,$quote['id'],$id);

								} else if (($quote['cost']-$min_price) <= ($max_price-$min_price)/2) {
									//approve this quotation
									approveQuote($conn,$quote['id'],$id);
								}
							}
						}
					}
				}
			}

			
		}
	} else {
		die();
	}
} else {
	die();
}


function getAllTenders($conn)
{
	$sql = "SELECT*FROM tender WHERE state = 0";
	return fetchData($conn,$sql);
}

function getTenderQuotes($conn,$tender_no)
{
	$sql = "SELECT * FROM quote WHERE tender=\"$tender_no\" ORDER BY date_quoted ASC";
	return fetchData($conn,$sql);
}

function approveQuote($conn,$quote,$tender)
{
	$sql = "UPDATE tender SET state=1, quote=\"$quote\" WHERE id = \"$tender\"";
	$result = addData($conn,$sql);

	if ($result) {
		$sql = "UPDATE quote SET state = 1 WHERE  id =\"$quote\"";
		$result = addData($conn,$sql);

		if ($result) {
			$sql2 = "UPDATE quote SET state = 2 WHERE tender=\"$tender\" AND id <>\"$quote\"";
			$result = addData($conn,$sql2);

			return true;
		}		

	}

	return false;
}

?>