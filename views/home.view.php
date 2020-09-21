<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no"> 
	<meta name="description" content=" ">
	<title>Home - Online Interior Design</title>
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		
		.top-pane-header {
			color: white;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			margin-top: -2px;
			margin-bottom: -6px;
			margin-right: -1px;
			margin-left: -1px;
			padding-bottom: 10px;
			padding-top: 10px; 
			font-size: 1.1em;
			font-weight: bold;
			line-height: 20px;
		}
		.disabled{
			border: none;
			background-color: #cdcdcd;
			pointer-events: none;
		}
		.red-border{
			border-color: red !important;
		}
		
			   
		.input-field input[type=text]:focus + label, .input-field input[type=password]:focus + label, .input-field input[type=number]:focus + label, .input-field input[type=email]:focus + label {
			color: #0d81a7 !important;
		}
		/* label underline focus color */
		.input-field input[type=text]:focus, .input-field input[type=password]:focus , .input-field input[type=number]:focus, .input-field input[type=email]:focus {
			border-bottom: 1px solid #0d81a7 !important;
			box-shadow: 0 1px 0 0 #000;
		}

			.input-hidden {
			  position: absolute;
			  left: -9999px;
			}

			input[type=radio].cool:checked + label>img {
			  border: 1px solid #fff;
			  box-shadow: 0 0 5px 5px #0d81a7;
			}

			/* Stuff after this is only to make things more pretty */
			input[type=radio].cool + label>img {
			  width: 50px;
			  height: 50px;
			  transition: 500ms all;
			  border-radius: 50%;
			  cursor: pointer;
			  border: 1px dotted #0d81a7;
			}

			input[type=radio].cool:checked + label>img {
			  transform: 
			    rotateZ(-10deg) 
			    rotateX(10deg);
			}

			@-webkit-keyframes rotating {
				from {
					-webkit-transform: rotate(0deg);

				}

				to {
					-webkit-transform: rotate(360deg);		
				}
			}

			@keyframes rotating {
				from {
					transform: rotate(0deg);

				}

				to {
					transform: rotate(360deg);		
				}
			}

			.circular {
				animation: rotating 1.5s linear infinite;
				position: relative;
			}
	</style>
</head>
<body>

<div class="row hide visible-print center-align purple-text" style="margin-bottom: -20px; margin-top: -10px;">
	
	<a href="../" class="purple-text"> <img src="../images/icons/quote.png" height="50px" width="50px"></span></a>
	
</div>

<div class="row hide-print">	
	<div class="navbar-fixed">
	  <nav>
	    <div class="nav-wrapper purple">
	      <a href="../" class="brand-logo"><i class="fa fa-medkit" ></i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="../"><i class="fa fa-home"></i> Home</a></li>
	        <li ><a href="../tenders"><i class="fa fa-file"></i> Tenders</a></li>
	        <li ><a href="#change-pass-modal" class="modal-trigger"><i class="fa fa-lock"></i> Change Password</a></li>
	        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>
	      </ul>
	    </div>
	  </nav>
	</div>
</div>


<div class="row white-text container">
	


    <div id="info" class="col s12 m12 info">
      

		<!-- <summary info starts here -->
		<div id="summary" class="col s12" style="padding-top: 20px;">
			<div class="row center-align hide-print">
				
				<div class=" col s12 m4 l4 xl4" style="margin-bottom: 10px;">
				 
				 <div class="dpic <?php if($overdue_fines > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		Pending Quotes
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">
				 		<?php
				 			$count = 0;
				 			if ($quotes) {
				 				foreach ($quotes as $quote) {
					 				if ($quote['state'] == 0) {
					 					$count +=1;
					 				}
					 			}
				 			}
				 			echo $count;
				 		?>
				 	</div>
				 </div>
				</a>
				</div>

				<div class=" col s12 m4 l4 xl4" style="margin-bottom: 10px;">
				 <div class="dpic <?php if($overdue_fines > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		Rejected Quotes
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">
				 		<?php
				 			$count = 0;
				 			if ($quotes) {
				 				foreach ($quotes as $quote) {
					 				if ($quote['state'] == 2) {
					 					$count +=1;
					 				}
					 			}
				 			}
				 			echo $count;
				 		?>
				 	</div>
				 </div>
				</div>

				<div class=" col s12 m4 l4 xl4" style="margin-bottom: 10px;">
				 <div class="dpic <?php if($overdue_rent > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		Approved Quotes
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">		 		
				 		<?php
				 			$count = 0;
				 			if ($quotes) {
				 				foreach ($quotes as $quote) {
					 				if ($quote['state'] == 1) {
					 					$count +=1;
					 				}
					 			}
				 			}
				 			
				 			echo $count;
				 		?>
				 	</div>
				 </div>
				</div>
			</div>

			<div class="row center-align white-text color-print" style="padding-top: 5px;">
				<h5 class="white-text"><b>My Quotes</b></h5>
				<?php if ($quotes): ?>
						
					<table class="responsive-table centered bordered">
						<thead>
							<tr>
							    <th>Quote #</th>
							    <th>Tender #</th>
							    <th>Product</th>
							    <th>Tender Qty</th>
							    <th>Amount Quoted</th>
							    <th>Date of Approval</th>
							    <th>Due Date</th>
							    <th>Status</th>
							    <th class="hide-print">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($quotes as $quote): ?>
								<?php
									$id = $quote['id'];
									$quoteInfo = getQuotationInfo($conn,$id);
								?>
								<tr id="">
									<td><?=$id?></td>
									<td><?=$quoteInfo['id']?></td>
									<td><?=ucwords($quoteInfo['name'])?></td>
									<td><?=$quoteInfo['qty']?> <?=ucwords($quoteInfo['unit'])?></td>
									<td>Ks. <?=number_format($quoteInfo['cost'],2,".",",")?></td>
									<td><?=date('D d-F-Y', strtotime($quoteInfo['approval_date']))?></td>
									<td><?=date('D d-F-Y', strtotime($quoteInfo['date_due']))?></td>
									<td><?php if ($quote['state'] == 0) {
										echo "<b class='blue-text'>Pending...</b>";
									} else if ($quote['state'] == 1) {
										echo "<b class='green-text'>Approved.</b>";
									} else {
										echo "<b class='red-text'>Rejected.</b>";									
									} ?></td>
									<td id="order-action-cell-<?=$id?>" class="hide-print">
										
										<?php if ($quote['state'] == 1): ?>
											<a target="_blank" class="btn-flat purple white-text waves-effect waves-light" href="../quotation?quote=<?=$id?>"><i class="fa fa-file-text"></i> Print Quote</a>
											
										<?php else: ?>
											<?php if ($quote['state'] == 0): ?>
												<a id="" class="btn-cancel waves-effect waves-red" href="delete_quote.php?id=<?=$id?>"><i class='fa fa-trash'></i> Delete Quote</a>
											<?php endif ?>
											
										
										
										<?php endif ?>
										            	 
									</td>
								</tr>

							<?php endforeach ?>
						</tbody>
					</table>
				<?php else: ?>
					<h5 class="color-print white-text center-align">You have not quoted any tender yet.</h5>
				<?php endif ?>
				<br>

				<?php if ($quotes): ?>
					<button class="btn-apply waves-effect waves-purple hide-print" onclick="print()"><i class="fa fa-print"></i> Print Quotations</button>					
				<?php endif ?>

				<a class="btn-apply waves-effect waves-purple hide-print" href="../tenders"> View Tenders</a>
			</div>
		</div>
		<!-- <summary info ends here -->

		
    </div>
</div>

<!--Update info Modal Structure -->
<div id="modal1" class="modal bottom-sheet center-align" style="height: 100%;">
	<div class="modal-content">
		<h1><i class="fa fa-edit purple-text"></i></h1>
		<h5 class="purple-text">Update Personal Details</h5>
		<br>
		<form id="update-form" action="update_tenant.php" method="POST">
			<div class="row container">
				<div class="input-field col s6">
		          <input id="first-name" type="text" class="validate" name="first-name" value="<?=$tenantInfo['fname']?>" required>
		          <label for="first-name">First Name</label>
		        </div>
				<div class="input-field col s6">
		          <input id="last-name" type="text" class="validate" name="last-name" value="<?=$tenantInfo['lname']?>" required>
		          <label for="last-name">Last Name</label>
		        </div>
			</div>

			<div class="row container">
				<div class="input-field col s6">
		          <input id="occupation" type="text" class="validate" name="occupation" value="<?=$tenantInfo['occupation']?>" required>
		          <label for="occupation">Occupation</label>
		        </div>
				<div class="input-field col s6">
		          <input id="phone" type="number" class="validate" name="phone" value="<?=$tenantInfo['phone']?>" required>
		          <label for="phone">Phone Number</label>
		        </div>
			</div>

			<div class="row container">
				<div class="input-field col s12">
		          <input id="email" type="email" class="validate" name="email" value="<?=$tenantInfo['email']?>" required>
		          <label for="email">Email</label>
		        </div>
			</div>
			
		</form>
	</div>
	<div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect waves-red btn-flat red-text">Cancel</a>

		<input type="submit" form="update-form" class="waves-effect waves-green btn-flat green-text" value="Submit">
	</div>
</div>
<!-- End of modal structure -->



						<!-- Modal Structure -->
							  <div id="change-pass-modal" class="modal fore-color">
							    <div class="modal-content center-align">
							      	<h4>Change Password.</h4>
							      	<form method="POST" action="change_pass.php" id="change-pass">
							      		<div class="container">
							      			<br>
							      			<div class="input-field col s12 m6 l6">
								          		<input id="pass" name="pass" type="password" class="validate" required>
								          		<label for="pass">Old Password</label>
								        	</div>

								      		<div class="input-field col s12 m6 l6">
								          		<input id="new-pass" name="new-pass" type="password" class="validate" required>
								          		<label for="new-pass">New Password</label>
								        	</div>

								      		<div class="input-field col s12 m12 l12">
								          		<input id="re-pass" name="re-pass" type="password" class="validate" required>
								          		<label for="re-pass">Repeat Password</label>
								        	</div>
							      		</div>
							      		

							      		<button id="btn-change-pass" class="modal-action waves-effect waves-light btn-apply" ><i class="fa fa-check"></i> Change Password</button>

							        	<a href="#" class="modal-action modal-close waves-effect waves-light btn-cancel"><i class="fa fa-times"></i> Cancel</a>
							      	</form>
							    </div>
							   
							  </div>
							<!-- End of modal structure -->
<div id="preview"></div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript">
	var timeOut;
	$(document).ready(function() {
		$('.modal').modal();

		$("#update-form").submit(function() {
           		$("#update-form-btn").html("Updating data! Please wait...<i class='circular fa fa-spinner green-text'></i>");
            	$("#update-form-btn").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
           		$("#update-form-btn").html("<i class='fa fa-edit'></i> Update");
            	$("#update-form-btn").removeClass("disabled");
            });

            
            return false; // prevent normal submit
        });


        $("#change-pass").submit(function() {
        	var password = $('#new-pass').val();
        	var re_password = $('#re-pass').val();
        	if (password != re_password) {
	         	Materialize.toast('Passwords dont match!', 4000);
        		return false;
        	}
           		$("#btn-change-pass").text("Changing Password! Please wait...");
            	$("#change-pass").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });


        $("#custom-furniture-form").submit(function() {
        	
        	var datedue = $('#datedue').val();

        	if (datedue == '') {
	         	Materialize.toast('Select Date Due!', 3000);
        		return false;
        	}
           		$("#btn-change-pass").html("Submitting Request! Please wait... <i class='fa fa-spinner circular'></i>");
            	$("#change-pass").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });

		//Interior View Image manenoss
		$("#interior-view-image-div").click(function() {
			$("#interior-view-image-file").trigger("click");
		});

		$("#interior-view-image-file").change(function(){
            $("#interior-view-image-form-btn").removeClass("hide");
            $("#image2").removeClass("hide");
            $("#image2add").addClass("hide");

			var output = document.getElementById('image2img');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
		 		        
		});

		var minDate = new Date();
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 1, // Creates a dropdown of 15 years to control year,
		    today: 'Today',
		    clear: 'Clear',
		    min: minDate,
		    cancel: 'Cancel',
		    close: 'Ok',
		    format:'yyyy-mm-dd',
		    closeOnSelect: false // Close upon selecting a date,
		  });
	});


	function uploadImage(form) {
		$('#'+form+'-form-btn').addClass("hide");

	    $('#'+form).ajaxForm({

	        target: '#preview',
	        beforeSend:function(){
	            $('#'+form+'-prog').show();
	            $('#'+form+'-prog').attr('value','0');
	        },
	        uploadProgress:function(event,position,total,percentComplete){
	            $('#'+form+'-prog').attr('value',percentComplete);
	                     
	        }
	                     
	    }).submit();
	}

	function showAll() {
		
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('All');
	}

	function showRent() {
		
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').addClass('hide');
		$('#payment-filter').text('Rent');
	}

	function showFine() {
		
		$('.pay-statement-rent').addClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('Fine');
	}

	function cancelOrder(orderno) {
		var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Cancelling Order in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action green-text"><i class="fa fa-undo"></i> Undo</button>'));
        Materialize.toast($toastContent, 6000);

        var i=4;
        timeOut = setInterval(function() {
	        $('#time').text(i);
	        if (i < 0) {
				$('#cancel-order-btn-'+orderno).html("Cancelling Order! Hold On... <i class='circular fa fa-spinner'></i>");
				$('#cancel-order-btn-'+orderno).addClass('disabled');
				$('#pay-order-btn-'+orderno).addClass('hide');
				clearTimeout(timeOut);

				$.ajax({url:"../cancel_order.php",
					data: {'orderno':orderno},
					type: 'POST',
					success: function(response) {
						$('#preview').html(response);
					}
				});
		    }

	        i--;

        }, 1000);
	}

	function undo() {
		clearTimeout(timeOut);
		Materialize.Toast.removeAll();
	}
</script>
</body>
</html>

