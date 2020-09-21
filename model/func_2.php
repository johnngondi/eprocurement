<?php

function getLoginDetails($conn,$id)
{
	$sql = "SELECT * FROM users WHERE id=$id";
	return fetchData($conn,$sql)[0];

}

function setSession($id,$role)
{
	try {			
		
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;

		return true;
	} catch (Exception $e) {

		return false;
	}

}

function addSupplierDetails($conn,$data)
{
	extract($data);
	$sql = "INSERT INTO supplier (idno, fname, lname, phone, c_name, c_address, c_email, reg_date) VALUES (\"$idnumber\",\"$first_name\",\"$last_name\",\"$phone\",\"$company_name\",\"$company_address\",\"$company_email\",\"$reg_date\")";
	$result = addData($conn,$sql);

	if ($result) {

		$sql2 = "INSERT INTO users (id,password,role) VALUES ($idnumber,\"$password\",\"supplier\")";
		$result = addData($conn,$sql2);

		if ($result) {
			return true;
		} else {
			return false;
		}

	} else {
		return false;
	}
}

function addProduct($conn,$data)
{
	extract($data);
	$sql = "INSERT INTO products (name,category,pic) VALUES (\"$name\",\"$category\",\"$pic\")";
	return addData($conn,$sql);
}

function createTender($conn,$data)
{
	extract($data);
	$sql = "INSERT INTO tender (prod,qty,unit,min_price,max_price,date_due,approval_date,priority) VALUES (\"$prod\",\"$qty\",\"$unit\",\"$min_price\",\"$max_price\",\"$date_due\",\"$appr\",\"$priority\")";
	return addData($conn,$sql);
}

function getProducts($conn)
{
	$sql = "SELECT * FROM products";
	return fetchData($conn,$sql);
}

function getTenders($conn,$state,$cat)
{
	$sql = "SELECT p.pic, p.category, t.id, t.prod, t.qty, t.unit, t.min_price, t.max_price, t.date_due, t.priority, t.state FROM tender t, products p WHERE p.name = t.prod AND t.state = $state AND P.category=\"$cat\"";
	return fetchData($conn,$sql);
}

function getQuotationInfo($conn,$quote_id)
{
	$sql = "SELECT s.idno, s.fname, s.lname, s.phone, s.c_name, s.c_address, s.c_email, t.id, t.qty, t.unit, t.min_price, t.max_price, t.date_due, t.approval_date, t.priority, p.name, q.cost, q.delivery_date, q.date_quoted FROM supplier s, quote q, tender t, products p WHERE s.idno=q.supplier AND t.id=q.tender AND q.id=$quote_id";

	return fetchData($conn,$sql)[0];
}


function getAllTenders($conn)
{
	$sql = "SELECT p.pic, p.category, t.id, t.prod, t.qty, t.unit, t.min_price, t.max_price, t.date_due, t.priority, t.quote, t.state FROM tender t, products p WHERE p.name = t.prod";
	return fetchData($conn,$sql);
}

function quote($conn,$data)
{
	extract($data);
	$sql = "SELECT * FROM quote WHERE supplier = $supplier AND tender = $tender_id";
	if (!fetchData($conn,$sql)) {
		$sql = "INSERT INTO quote (tender, supplier, cost, delivery_date, date_quoted) VALUES (\"$tender_id\",\"$supplier\",\"$cost\",\"$delivery_date\",\"$date_quoted\")";
		return addData($conn,$sql);
	} else {
		return false;
	}
	
}

function getAllSuppliers($conn)
{
	$sql = "SELECT * FROM supplier";
	return fetchData($conn,$sql);
}

function getAllQuotations($conn)
{
	$sql = "SELECT * FROM quote";
	return fetchData($conn,$sql);
}

function getSupplierQuotes($conn,$idno)
{
	$sql = "SELECT * FROM quote WHERE supplier=\"$idno\"";
	return fetchData($conn,$sql);
}

function getCategories($conn)
{
	$sql = "SELECT * FROM categories";
	return fetchData($conn,$sql);
}

function checkCatProds($conn,$cat)
{
	$sql = "SELECT * FROM products WHERE category = \"$cat\"";
	return fetchData($conn,$sql);
}
?>