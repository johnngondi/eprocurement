<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$idno = $_SESSION['idno'];
	$old_pass = $_POST['pass'];
	$new_pass = $_POST['new-pass'];


	
	$sql = "SELECT password FROM user WHERE username = \"$idno\"";
	$results = fetchData($conn,$sql);
	$password = $results[0];
	$password = $password['password'];

	if ($password == $old_pass) {		
	
		$sql = "UPDATE user SET password = \"$new_pass\" WHERE username = \"$idno\" AND password = \"$old_pass\"";
		$result = addData($conn,$sql);


		if ($result) {
			
			echo "		
		        <script>

	           		\$(\"#btn-change-pass\").text(\"Change Password!\");
	            	\$(\"#change-pass\").removeClass(\"disabled\");
		            var \$toastContent = \$('<span> Password changed successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 3000);
		        </script>
			";
		} else {
			echo "		
		        <script>
	           		\$(\"#btn-change-pass\").text(\"Change Password!\");
	            	\$(\"#change-pass\").removeClass(\"disabled\");
		            var \$toastContent = \$('<span> Error while changing password.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 3000);
		        </script>
			";

		}
		
	} else {

			echo "		
		        <script>
	           		\$(\"#btn-change-pass\").text(\"Change Password!\");
	            	\$(\"#change-pass\").removeClass(\"disabled\");
		            var \$toastContent = \$('<span> Wrong old Password.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 3000);
		        </script>
			";
	}

		
} else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 3000);
        </script>
	";

}
?>