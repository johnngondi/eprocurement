<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/func.php';

$conn = dbconnect();
if ($conn) {
	$data = array(
		'name' => $_POST['name'], 
		'category' => $_POST['category'],
		'pic' => $_POST['pic'],
	);
	
	if (addProduct($conn,$data)) {

		$products = getProducts($conn);
		$prods = '';
		foreach ($products as $product) {
			$prods .= "
						\"".ucwords($product['name'])."\": '../images/products/".$product['pic']."',
					";
		}

		echo "
			<script type=\"text/javascript\">
				var \$toastContent = \$('<span> Product added successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#add-btn').html('Add Product');
	            \$('#add-btn').removeClass('lose-focus');
                \$(\"#upload-submit\").removeClass(\"lose-focus\");
                \$(\"#upload-submit\").html(\"Set as Picture\");
                \$('#prod').val('');
                
				$(document).ready(function() {
					$('input.autocomplete').autocomplete({
					    data: {
					      $prods
					    },
					    limit: 20,
					    onAutocomplete: function(val) { },
					    minLength: 1, 
					});
				});
				  
			</script>
		";

		


	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while adding Product! Seems like that product already exists.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	            \$('#add-btn').html('Add Product');
	            \$('#add-btn').removeClass('lose-focus');
                \$(\"#upload-submit\").removeClass(\"lose-focus\");
                \$(\"#upload-submit\").html(\"Set as Picture\");
	        </script>
		";die();
	}


} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
	            \$('#add-btn').html('Add Product');
	            \$('#add-btn').removeClass('lose-focus');
                \$(\"#upload-submit\").removeClass(\"lose-focus\");
                \$(\"#upload-submit\").html(\"Set as Picture\");
        </script>
	";die();
}
?>