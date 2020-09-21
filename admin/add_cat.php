<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';


$conn = dbconnect();
if ($conn) {
	$title = $_POST['cat'];
	
	$sql = "INSERT INTO categories (title) VALUES (\"$title\")";
	if (addData($conn,$sql)) {

		echo "
			<script type=\"text/javascript\">
				var \$toastContent = \$('<span> Category added successfully. Refresh page to activate it.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#add-cat-btn').html('Add Category');
	            \$('#add-cat-btn').removeClass('lose-focus');
                \$('#cat').val('');
                
				  
			</script>
		";

		


	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while adding Category! Seems like that Category already exists.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#add-cat-btn').html('Add Category');
	            \$('#add-cat-btn').removeClass('lose-focus');
	        </script>
		";die();
	}


} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
	            \$('#add-cat-btn').html('Add Category');
	            \$('#add-cat-btn').removeClass('lose-focus');
        </script>
	";die();
}
?>