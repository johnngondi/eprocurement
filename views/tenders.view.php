<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Tenders | e-Procurement System</title>
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    	<link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
    	<link rel="shortcut icon" href="../images/icons/quote.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>
	<body>
		
		<div class="row ">
		 <nav class="cyan darken-5">
		    <div class="nav-wrapper">
		      <a href="#!" style="margin-left: 10px; margin-top: 5px;font-size: 3em;" class="brand-logo"><i class="fa fa-medkit"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="../"> Home</a></li>
		        <li><a href="#" class="active">Tenders</a></li>
		      	<?php if (isset($_SESSION['role'])): ?>
		      	<li><a class="dropdown-button" href="#!" data-activates="dropdown2">My Account<i class="fa fa-caret-down right"></i></a></li>
		      	<?php else: ?>	
		      	<li><a href="../">Login<i class="fa fa-sign-in right"></i></a></li>
		      	<?php endif ?>
		        


		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="../"> Home</a></li>
		        <li><a href="#" class="active">Tenders</a></li>
		        <?php if (isset($_SESSION['role'])): ?>
		      	<li><a class="dropdown-button" href="#!" data-activates="dropdown1">My Account<i class="fa fa-caret-down right"></i></a></li>
		      	<?php else: ?>	
		      	<li><a href="../" >Login<i class="fa fa-sign-in right"></i></a></li>
		      	<?php endif ?>
		      </ul>
		    </div>

		    <ul id="dropdown1" class="dropdown-content">
			  <li><a href="../home">Dashboard</a></li>
			  <li><a href="../logout">Logout</a></li>
			</ul>

		    <ul id="dropdown2" class="dropdown-content">
			  <li><a href="../home">Dashboard</a></li>
			  <li><a href="../logout">Logout</a></li>
			</ul>
		  </nav>
			
		</div>

		<?php if ($categories): ?>
		<div class="row container">
			<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">				

			<?php foreach ($categories as $category): ?>
				<li class="tab col s3"><a style="font-size: 1.4em; color: #ee6e73;" class="waves-effect waves-cyan hoverable" href="#cat-<?=$category['id']?>"> <span> <?=ucwords($category['title'])?></span></a></li>	
			<?php endforeach ?>

			</ul>

			<?php foreach ($categories as $category): ?>
			<div id="cat-<?=$category['id']?>" class="row">
				<?php 
					$tenders = getTenders($conn,0,$category['title']);
				?>

				<?php if ($tenders): ?>
					
				<?php foreach ($tenders as $tender): ?>
					
						<div class="col m12 l6 s12">
						 	<div class="card sticky-action large" style="overflow: hidden;">
					            <div class="card-image waves-effect waves-block waves-cyan">
					                <img id="card-image-<?=$tender['id']?>" class="activator" src="../images/products/<?=$tender['pic']?>">
					            </div>
					            <div class="card-content">
					                <span style="font-weight: bold;" class="card-title activator cyan-text text-darken-4"><?=ucwords($tender['prod'])?><i class="fa fa-chevron-circle-up right"></i></span>

					                <p class="activator cyan-text" style="cursor: pointer;">Quantity: <b><?=$tender['qty']?> <?=ucfirst($tender['unit'])?></b> <br> Priority: <b><?=ucfirst($tender['priority'])?></b></p>
					               
					            </div>

					             <div class="card-action">
					             	<h6 style=" padding-bottom: 0px; margin-bottom: 0px;" class="cyan-text text-darken-4 left">Date Due: <?=date('D F d, Y', strtotime($tender['date_due']))?></h6>
					             	<?php
					             	$diff = abs(strtotime(date('Y-m-d'))- strtotime($tender['bid_date']));
					             	?>
					             	<?php if (strtotime(date('Y-m-d')) > strtotime($tender['bid_date']) || $diff == 0): ?>
					             		
					             		<button id="quote-btn-<?=$tender['id']?>" class="btn hoverable cyan waves-effect white-text waves-light right" onclick="quote(<?=$tender['id']?>)"><i class="fa fa-edit"></i> Quote!</button>	
					             	<?php else: ?>
					             		<h6 class="orange-text right">Biding opens in <?=floor($diff/(60*60*24))?> day(s) time.</h6>
					             	<?php endif ?>
					                
					             </div>

					             <div class="card-reveal" style="display: none; transform: translateY(0px); padding-bottom: 150px;">
					                <span style="font-weight: bold;" class="card-title cyan-text text-darken-4 center-align" style=""><?=ucwords($tender['prod'])?><i class="fa fa-chevron-circle-down right"></i></span>
					                
					                <span class="row" style="padding-top: 20px;">
					                	<span class="col l6 m6 s12 center-align cyan-text">

					                		<h6>Tender Number</h6>
					                		<h5><b><?=$tender['id']?></b></h5>

					                		<br>

					                		<h6>Quantity Requested</h6>
					                		<h5><b><?=$tender['qty']?> <?=ucfirst($tender['unit'])?></b></h5>

					                		<br>

					                		<h6>Date Due</h6>
					                		<h5><b><?=date('D F d, Y', strtotime($tender['date_due']))?></b></h5>

					                	</span>

					                	<span class="col l6 m6 s12 center-align cyan-text">
					                		
					                		<h6>Minimum Price</h6>
					                		<h5><b>Ks. <?=number_format($tender['min_price'],2,".",",")?></b></h5>

					                		<br>

					                		<h6>Maximum Price</h6>
					                		<h5><b>Ks. <?=number_format($tender['max_price'],2,".",",")?></b></h5>

					                		<br>

					                		<h6>Bidding Opening Date</h6>
					                		<h5><b><?=date('D F d, Y', strtotime($tender['bid_date']))?></b></h5>

					                	</span>
					                </span>
					            </div>

					         </div>
					        
						</div>						
					
				<?php endforeach ?>	
					
				<?php else: ?>
					<h6>No new Tenders under <?=ucwords($category['title'])?> category!</h6>
				<?php endif ?>					
			</div>	
			<?php endforeach ?>
			

			
		</div>

		<?php else: ?>
			<h6>Sorry! You cant quote anything right now!</h6>
		<?php endif ?>

	</body>

	<div id="quote-modal" class="modal bottom-sheet center-align cyan-text">
		<div class="modal-content container">
			<h1><i class="fa fa-edit fore-color"></i></h1>
			<h5 class="fore-color">Quote this Tender!</h5>
			
			<form id="quote-form" action="quote.php" method="POST">
				<input id="tender_id" name="tender_id" type="hidden" required>
				<div class="row">
					<div class="input-field col l6 m6 s12" style="margin-bottom: 0px;">
						<input id="cost" name="cost" type="number" class="validate" required>
						<label for="cost">Your Price</label>								          	
					</div>
					
					<div class="input-field col l6 m6 s12">
						<input id="delivery_date" name="delivery_date" type="text" class="validate datepicker" required>
						<label for="delivery_date">Date of Delivery</label>
					</div>
				</div>
			</form>			
		</div>
		<div class="modal-footer">
			<button class="modal-action modal-close waves-effect waves-red btn-flat red-text">Cancel</button>

			<input type="submit" value="Send Quote" form="quote-form" class="waves-effect waves-green btn-flat green-text">

		</div>
	</div>

	<div id="preview"></div>

	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
		var tender_id;
		var session = 0;

		<?php if (isset($_SESSION['id'])): ?>
			session = 1;
		<?php endif ?>

		function quote(tender) {
			if (session == 0) {
				var $toastContent = $("<span>Login to quote!  Click here to login   <i class='fa fa-hand-o-right'></i> </span>").add($("<a href='../'' style='margin-right: 10px;margin-left: 10px;' class='btn-flat toast-action white-text cyan waves-effect waves-light'><i class='fa fa-sign-in'></i> Login</a>"));
  				Materialize.toast($toastContent, 3000);
  				return false;
			}
			tender_id = tender;
			$('#tender_id').val(tender_id);
		 	$('#quote-modal').modal('open');
		}

		$(document).ready (function() {

		    var date = new Date();
	    	date.setDate(date.getDate());

	        $('.datepicker').pickadate({
	            selectMonths: true, // Creates a dropdown to control month
	            selectYears: 1, // Creates a dropdown of 100 years to control year,
	            today: 'Today',
	            min: date,
	            clear: 'Clear',
	            close: 'Ok',
	            format: 'yyyy-mm-dd',
	            cancel: 'Cancel',
	            closeOnSelect: false // Close upon selecting a date,
	        });

	        $("#quote-form").submit(function() {


               	$("#quote-btn-"+tender_id).html("Sending quote! Please wait...<i class='fa fa-spinner circular'></i>");			
               	$("#quote-btn-"+tender_id).addClass("lose-focus");
          
		 		$('#quote-modal').modal('close');


                $.post($(this).attr("action"), $(this).serialize(), function(data) {
                    $("#preview").html(data);

			 		$('#cost').val('');
			 		$('#delivery_date').val('');
                    
                });

                return false; // prevent normal submit
            });
		});


        
	</script>

	</body>
</html>