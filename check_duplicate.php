<?php
require '_inc/config.php';
require 'model/crud.php';

$conn = dbconnect();

if ($conn) {
	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		//Check in Tenants table

		$sql = "SELECT id FROM users WHERE id=$id";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-idno').addClass('error-input');
                \$('#err-idno').text('The ID Number you are using is already in use by someone else. Try a different one.');
                \$('#lb-idno').addClass('error-input');
                \$('#idno').removeClass('ok-input');
                \$('#idno').addClass('error-input');
	            \$('#reg-btn').addClass('disabled');
                \$('#idno').select();
            </script>
			";
		} else {
			
				echo "
				<script>
					\$('#err-idno').removeClass('error-input');
	                \$('#err-idno').text('');
	                \$('#lb-idno').removeClass('error-input');
	                \$('#idno').addClass('ok-input');
	                \$('#idno').removeClass('error-input');
	                \$('#reg-btn').removeClass('disabled');
	            </script>
				";
		}

	} elseif (isset($_GET['phone'])) {

		$phone = $_GET['phone'];
		//Check in Tenants table

		$sql = "SELECT fname,lname FROM supplier WHERE phone=$phone";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-phone').addClass('error-input');
                \$('#err-phone').text('The Phone Number you are using is already in use by ".ucwords($results['fname']." ".$results['lname'])." (Supplier). Try a different one.');
                \$('#lb-phone').addClass('error-input');
                \$('#phone').removeClass('ok-input');
                \$('#phone').addClass('error-input');
	            \$('#reg-btn').addClass('disabled');
                \$('#phone').select();
            </script>
			";
		} else {
		
				echo "
				<script>
					\$('#err-phone').removeClass('error-input');
	                \$('#err-phone').text('');
	                \$('#lb-phone').removeClass('error-input');
	                \$('#phone').addClass('ok-input');
	                \$('#phone').removeClass('error-input');
	                \$('#reg-btn').removeClass('disabled');
	            </script>
				";
			
		}

	} elseif (isset($_GET['email'])) {

		$email = $_GET['email'];

		$sql = "SELECT fname,lname FROM supplier WHERE c_email=\"$email\"";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-email').addClass('error-input');
                \$('#err-email').text('The Email Address you are using is already in use by ".ucwords($results['fname']." ".$results['lname'])." (Supplier). Try a different one.');
                \$('#lb-email').addClass('error-input');
                \$('#email').removeClass('ok-input');
                \$('#email').addClass('error-input');
	            \$('#reg-btn').addClass('disabled');
                \$('#email').select();
            </script>
			";
		} else {
			
				echo "
				<script>
					\$('#err-email').removeClass('error-input');
	                \$('#err-email').text('');
	                \$('#lb-email').removeClass('error-input');
	                \$('#email').addClass('ok-input');
	                \$('#email').removeClass('error-input');
	                \$('#reg-btn').removeClass('disabled');
	            </script>
				";
			
		}

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