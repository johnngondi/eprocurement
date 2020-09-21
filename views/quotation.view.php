<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Quotation | e-Procurement System</title>
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    	<link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
    	<link rel="shortcut icon" href="../images/icons/quote.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>
	<body>
		
		<div class="row ">
		 <nav class="purple darken-5 hide-print">
		    <div class="nav-wrapper">
		      <a href="#!" style="margin-left: 10px; margin-top: 5px;font-size: 3em;" class="brand-logo"><i class="fa fa-medkit"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul class="right hide-on-med-and-down">
		      	<li><a href="../"> Home</a></li>
		        <li><a href="../logout"> Logout <i class="fa fa-sign-out"></i></a></li>
		        
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		      	<li><a href="../"> Home</a></li>
		        <li><a href="../logout"> Logout</a></li>
		        
		      </ul>
		    </div>

		    
		  </nav>
			
		</div>

		<div class="row container">
			<div class=" panel cyan-text ">
				<div class="row">
					<div class="col l3 m3 right-align">
						<h1 class="xxl-text"><i class="fa fa-file-text-o"></i></h1>
					</div>
					<div class="col l9 m8 center-align">
						<h2>Quotation Details</h2>
						<h5>Quote #: <?=$quote_id?></h5>
					</div>
				</div>
				<hr style="border: cyan 1px dotted;">
				<div class="container">
					<table>
						<tr style="width: 100%; line-height: 0px;">
							<td style="width: 50%;">
								<table>
									<tr><h5><b>Supplier Details</b></h5></tr>
									<tr>
										<td>ID No.:</td>
										<td><b><?=$idno?></b></td>
									</tr>

									<tr>
										<td>Name:</td>
										<td><b><?=ucwords($fname." ".$lname)?></b></td>
									</tr>

									<tr>
										<td>Phon.:</td>
										<td><b><?=$phone?></b></td>
									</tr>

									<tr>
										<td>Email:</td>
										<td><b><?=$c_email?></b></td>
									</tr>

									<tr>
										<td>Company:</td>
										<td><b><?=ucwords($c_name)?></b></td>
									</tr>

									<tr>
										<td>Address:</td>
										<td><b><?=ucwords($c_address)?></b></td>
									</tr>
								</table>
								
							</td>

							<td style="width: 50%;">
								<table>
									<tr><h5><b>Tender Details</b></h5></tr>
									<tr>
										<td>Tender No.:</td>
										<td><b><?=$id?></b></td>
									</tr>

									<tr>
										<td>Product:</td>
										<td><b><?=ucwords($name)?></b></td>
									</tr>

									<tr>
										<td>Date Due:</td>
										<td><b><?=$date?></b></td>
									</tr>
									<tr>
										<td>Price Range:</td>
										<td><b>Ks.<?=number_format($min_price,0,".",",") ?> - Ks.<?=number_format($max_price,0,".",",") ?></b></td>
									</tr>

									<tr>
										<td>Quantity:</td>
										<td><b><?=$qty." ".ucwords($unit)?></b></td>
									</tr>

									<tr>
										<td>Priority:</td>
										<td><b><?=ucwords($priority)?></b></td>
									</tr>
								</table>
								
							</td>
						</tr>

						<tr>
							<table>
								<tr>
									<td style="width: 100%;"><hr style="border: cyan 1px dotted;"></td>

								</tr>
							</table>
								<h5 class="center-align"><b><u>Quotation Details</u></b></h5>	
							
						</tr>

						<tr>
							<table>							
								<tr style="width: 100%; line-height: 0px;">
									<td style="width: 50%;">
										<table>
											<tr>
												<td style="text-align: center;">Quote Number</td>
											</tr>

											<tr>
												<td style="text-align: center;"><b class="l-text"><?=$quote_id?></b></td>
											</tr>


											<tr>
												<td style="text-align: center;">Amount Quoted</td>
											</tr>

											<tr>
												<td style="text-align: center;"><b class="l-text">Ks. <?=number_format($cost,0,".",",") ?></b></td>
											</tr>
											
										</table>
										
									</td>

									<td style="width: 50%;">
										<table>
											<tr>
												<td style="text-align: center;">Quote Date</td>
											</tr>

											<tr>
												<td style="text-align: center;"><b class="l-text"><?=$quote_date?></b></td>
											</tr>


											<tr>
												<td style="text-align: center;">Date of Delivery</td>
											</tr>

											<tr>
												<td style="text-align: center;"><b class="l-text"><?=$delivery_date?></b></td>
											</tr>
										</table>
										
									</td>
								</tr>
							</table>

						</tr>
					</table>

					<div class="container hide-print center-align" style="padding-bottom: 10px;">
						
						<button onclick="print()" class="btn-flat white purple-text hoverable waves-effect waves-purple"><i class="fa fa-print"></i> Print Quotation</button>

						<button class="btn-flat white orange-text waves-effect waves-orange" onclick="window.close()"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
		
		

	</body>

	<div id="preview"></div>

	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
	
        
	</script>

	</body>
</html>