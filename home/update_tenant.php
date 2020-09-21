<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/register.php';

$conn = dbconnect();

if ($conn){
	$data = array(
		'idno' => $_SESSION['idno'],
		'fname' => $_POST['first-name'], 
		'lname' => $_POST['last-name'], 
		'occupation' => $_POST['occupation'], 
		'email' => $_POST['email'], 
		'phone' => $_POST['phone'] 
	);

	$result = updateTenant($conn,$data);
	extract($data);
	if ($result) {
		echo "		
	        <script>
	            var \$toastContent = \$('<span> Data updated successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#u-fname').text(\"$fname\");
	            \$('#u-lname').text(\"$lname\");
	            \$('#u-occ').text(\"$occupation\");
	            \$('#u-phone').text(\"$phone\");
	            \$('#u-email').text(\"$email\");
	            \$('#modal1').modal('close');
	        </script>
		";
	} else {
		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error Updating data. Check email or phone</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	        </script>
		";

	}

} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 4000);
        </script>
	";
}
?>