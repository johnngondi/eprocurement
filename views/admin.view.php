<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Admin | e-Procurement System</title>
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    	<link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
    	<link rel="shortcut icon" href="../images/icons/quote.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>
	<body class="cyan-text">
		
		<div class="row ">
		 <nav class="cyan darken-5 hide-print">
		    <div class="nav-wrapper">
		      <a href="#!" style="margin-left: 10px; margin-top: 5px; font-size: 3em;" class="brand-logo"><i class="fa fa-pie-chart"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="../logout"> Logout <i class="fa fa-sign-out"></i></a></li>
		        
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="../logout"> Logout</a></li>
		        
		      </ul>
		    </div>

		    
		  </nav>
			
		</div>

		<div class="row container">
			<div class="col s12 hide-print">
				<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">
					
				    <!-- <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#new-quotes"><i class="fa fa-files-o"></i> <span> New Quotations</span> <span style="background-color: rgba(238,110,115,0.7) !important; 
						color: white !important;
						border-radius: 100px !important;
						padding-right: 8px; 
						padding-left: 8px;" class="<?php 
			        //if ($newQuotationsCount < 1) {
			        	//echo 'hide';
			        //}?>"><?=$newQuotationsCount?></span></a></li> -->

					<li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#home"><i class="fa fa-home"></i> <span> Home</span></a></li>


				    <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#admins"><i class="fa fa-folder-open"></i> <span> Administrations</span></a></li>

				    <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#reports"><i class="fa fa-folder-open"></i> <span> Reports</span></a></li>

				</ul>

			</div>
		</div>
		<div class="row" style="margin-left: 5%; margin-right: 5%;">

			<!-- New quotations tab  -->
			<!-- <div id="new-quotes" class="col s12">
				<div class=" panel cyan-text ">
					<div class="row">
						<div class="col l3 m3 right-align">
							<h1 class="xxl-text"><i class="fa fa-files-o"></i></h1>
						</div>
						<div class="col l9 m8 center-align">
							<h2>New Quotations</h2>
							<h6>Approve applied quotations here.</h6>
						</div>
					</div>
					<hr style="border: cyan 1px dotted;">
					<div class="row">
						<table class="highlight responsive-table centered">
						    <thead>
						        <tr>
						            <th>Quote #</th>
						            <th>Product</th>
						            <th>Cost</th>
						            <th>Date Expected</th>
						            <th>Date of Delivery</th>
						            <th>Company</th>
						            <th class="hide-print">Action</th>
						        </tr>
						    </thead>						    	
						    <tbody>
						    	<tr>
						    		<td>12345</td>
						    		<td>Sukuma Wiki</td>
						    		<td>Ks. 250.00</td>
						    		<td>12 May 2018</td>
						    		<td>10 May 2018</td>
						    		<td>Kent Farm</td>
						    		<td>
						    			<a href="quotation?quote=12345" class="btn-flat white cyan-text waves-effect waves-cyan"><i class="fa fa-file"></i> View</a>
						    			<button onclick="approveQuote(12345)" class="btn cyan white-text waves-effect waves-light"><i class="fa fa-check"></i> Approve</button> 
						    		</td>
						    	</tr>
						    </tbody>
						</table>
					</div>
				</div>
			</div> -->
			<!-- End of new qutations tab -->

			<!-- home tab  -->
			<div id="home" class="col s12">
				<div class="row container">
					<div class="col s12 hide-print">
						<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">
							

							<li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#prdcts"><i class="fa fa-home"></i> <span> Products & Tendering</span></a></li>

						    <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#cats"><i class="fa fa-folder-open"></i> <span> Categories</span></a></li>

						</ul>

					</div>
				</div>

				<div id="prdcts" class="col s12">
					<div class="row cyan-text center-align"  style="margin-left: 5%; margin-right: 5%;">
						<div class="col l6 m6 s12">
							<div class="panel">
								<div class="row" style="padding-top: 10px;">
									<div class="col l3 m3 right-align">
										<img src="../images/icons/prod.png" height="80px" width="80px">
									</div>

									<div class="col l9 m9">
										<h4>New Product</h4>
										<h6>Add a product you will be tendering on.</h6>
									</div>

								</div>

								<hr style="border: orange 1px dotted;">

								<div class="row">
									<img id="dpic" style="cursor: pointer;" class="dpic tooltipped" data-position="right" data-delay="1" data-tooltip="Click to add Image" src="../images/icons/picture.png" >
								  	<progress id="prog" max="100" value="0" style="display:none;"></progress>
									<div id="feedback"></div>

								  	<form method="POST" action="upload.php" id="upload-form" enctype="multipart/form-data">
								  		<input type="file" name="image_upload" id="image_upload" class="hide" accept="image/*" required>
								  		<div>
								  			<button  id="upload-submit"  onclick="uploadPic()" class="btn-flat cyan waves-effect waves-light white-text hide">Set as Picture</button>
								  		</div>
										
								  	</form>
								</div>

								<div class="container center-align">

									<form id="add_prod" action="add_prod.php" method="POST">
										<input type="hidden" name="pic" id="pic">
								      	<div class="row">
									        <div class="input-field">
									          <input id="name" name="name" type="text" class="validate autocomplete" required>
									          <label for="name">Product Name</label>
									          <ul class="autocomplete-content dropdown-content"></ul>
									        </div>
								    	</div>

								    	<div class="row">
									        <div class="input-field">
									          	<select id="category" name="category">
											      <option value="" disabled selected>Choose Category</option>
											      <?php if ($categories): ?>
											      	<?php foreach ($categories as $category): ?>
											      	<option value="<?=$category['title']?>"><?=ucwords($category['title'])?></option>
											      	<?php endforeach ?>
											      <?php endif ?>
											    </select>
											    <label for="category">Product Category</label>
									        </div>
								      	</div>

								      	<div class="row">
								      		<button id="add-btn" class="btn-flat cyan white-text waves-effect waves-light">Add Product</button>
								      	</div>							      
								    </form>

								</div>
							</div>
						</div>

						<div class="col l6 m6 s12">
							<div class="panel">
								<div class="row" style="padding-top: 10px;">
									<div class="col l3 m3 right-align">
										<img src="../images/icons/tender.png" height="80px" width="80px">
									</div>

									<div class="col l9 m9">
										<h4>Create Tender</h4>
										<h6>Post a new tender for suppliers to quote.</h6>
									</div>
								</div>

								<hr style="border: orange 1px dotted;">

								<div class="row" style="padding-left: 5px; padding-right: 5px;">
									<form id="create_tender" action="create_tender.php" method="GET">
								      	<div class="row">
									        <div class="input-field col l7 m7 s12">
									          <input id="prod" name="prod" type="text" class="autocomplete" required>
									          <label for="prod">Product Name</label>
									          <ul class="autocomplete-content dropdown-content"></ul>
									        </div>

									        <div class=" col l5 m5 s12" style="margin-bottom: 0px;">
									        	<div class="input-field">
									        	<input id="qty" name="qty" type="number" class="validate" required>
									          	<label for="qty">Quantity</label>	
									        	</div>
									          								          	
									        </div>
									     	<div class="input-field col l6 m12 s12">
									          	<input id="appr" name="appr" type="text" class="validate datepicker" required>
									          	<label for="appr">Approval Date</label>
									        </div>
									        <div class=" col l6 m12 s12 cyan-text" style="margin-top: -15px;">								  	

									          	<input name="unit" type="radio" id="kgs" value="kgs" required />
	      										<label for="kgs" style="color: #00bcd4 !important;">KGs</label>
									          	<input name="unit" type="radio" id="mts" value="mts" required />
	      										<label for="mts" style="color: #00bcd4 !important;">Mts</label>
									          	<input name="unit" type="radio" id="pkts" value="pkts" required />
	      										<label for="pkts" style="color: #00bcd4 !important;">Pkts</label>
									          	<input name="unit" type="radio" id="units" value="units" required />
	      										<label for="units" style="color: #00bcd4 !important;">Units</label>      	
									        	
	      										<div class="input-field">
	      											<input id="quote_date" name="bid_date" type="text" class="validate datepicker" required>
									          	<label for="quote_date">Bidding Opening Date</label>
	      										</div>
	      										
									        </div>
								    	</div>

								    	<div class="row">
								    		<div class="input-field col l6 m6 s12" style="margin-bottom: 0px;">
									          	<input id="min_price" name="min_price" type="number" class="validate" required>
									          	<label for="min_price">Minimum Price</label>								          	
									        </div>

									        <div class="input-field col l6 m6 s12" style="margin-bottom: 0px;">
									          	<input id="max_price" name="max_price" type="number" class="validate" required>
									          	<label for="max_price">Maximum Price</label>								          	
									        </div>
								    	</div>

								    	<div class="row">

									        <div class="input-field col l6 m6 s12">
									          	<input id="date_due" name="date_due" type="text" class="validate datepicker" required>
									          	<label for="date_due">Date Due</label>
									        </div>

									        <div class="input-field col l6 m6 s12">
									          	<select id="priority" name="priority">
											      <option value="" disabled selected>Choose Priority</option>
											      <option value="high">High</option>
											      <option value="medium">Medium</option>
											      <option value="low">Low</option>
											    </select>
											    <label for="priority">Select Priority</label>
									        </div>
								      	</div>

								      	<div class="row">
								      		<button id="tender-btn" class="btn-flat cyan white-text waves-effect waves-light">Create Tender</button>
								      	</div>							      
								    </form>
								</div>
							</div>
						</div>
					</div>	
				</div>

				<div id="cats" class="col s12">
					<div class="row cyan-text center-align"  style="margin-left: 5%; margin-right: 5%;">
						<div class="col l1 m1"></div>
						<div class="col l10 m10 s12">
							<div class="panel">
								<div class="row" style="padding-top: 10px;">
									<div class="col l3 m3 right-align">
										<img src="../images/icons/prod.png" height="80px" width="80px">
									</div>

									<div class="col l9 m9">
										<h4>New Category</h4>
										<h6>Add a category for your products.</h6>
									</div>

								</div>

								<hr style="border: orange 1px dotted;">


								<div class="container center-align">

									<form id="add_cat" action="add_cat.php" method="POST">
										<input type="hidden" name="pic" id="cpic">
								      	<div class="row">

									        <div class="input-field col l8">
									          <input id="cat" name="cat" type="text" class="validate" required>
									          <label for="name">Category Title</label>
									          
									        </div>

									        <div class="input-field col l4">
									          <button id="add-cat-btn" class="btn-flat cyan white-text waves-effect waves-light">Add Category</button>
									          
									        </div>
								    	</div>
							      
								    </form>

								</div>

								<div class="row" style="padding-top: 10px;">
									<h4>Existing Categories</h4>
									<h6>Manage your Categories here.</h6>
									
								</div>

								<hr style="border: orange 1px dotted;">

								<div class="row container" style="padding-left: 5px; padding-right: 5px;">
									<?php if ($categories): ?>
										<table class="">
											<thead>
												<th>Title</th>	
												<th class="right-align">Delete?</th>
											</thead>
											<tbody>
											<?php foreach ($categories as $category): ?>

												<tr>
													<td><?=ucwords($category['title'])?></td>
													<td class="right-align">
														<?php if (checkCatProds($conn,$category['title'])): ?>
														<h6 class="orange-text">Can't delete Category with Products!</h6>
														<?php else: ?>
														<a href="delete_cat.php?id=<?=$category['id']?>" class="btn-flat red white-text"> <i class="fa fa-trash"></i> Delete</a>	
														<?php endif ?>
														
													</td>
												</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											
									<?php else: ?>
										<h6>You have no Categories</h6>
									<?php endif ?>
									
								</div>
						
							</div>
						</div>
						<div class="col l1 m1"></div>

					</div>	
				</div>
				
			</div>
			<!-- End of home tab -->

			<!-- reports tab  -->
			<div id="reports" class="col s12">
				<div class="row container hide-print">
					<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">
						
						<li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#tenders"><i class="fa fa-file-o"></i> <span> Tenders</span></a></li>

					    <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#prods"><i class="fa fa-gift"></i> <span> Products</span> </a></li>


					    <li class="tab col s3"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#supplier"><i class="fa fa-users"></i> <span> Suppliers</span></a></li>

					</ul>

				</div>
				

					<div id="tenders" class="col l12 m12 s12 center-align">
						<?php if ($tenders): ?>
							<table class="responsive-table centered">
								<thead>
									<tr>
										<th>Image</th>
										<th>Product</th>
										<th>Quatity</th>
										<th>Range</th>
										<th>Tender Date</th>
										<th>Status</th>
										<th class="hide-print">Action</th>
									</tr>
								</thead>
							
							<tbody>
							<?php foreach ($tenders as $tender): ?>
									<tr>
										<td><img class="circle" height="50px" width="50px" src="../images/products/<?=$tender['pic'] ?>"></td>
										<td><?=ucwords($tender['prod'])?></td>
										<td><?=$tender['qty']?></td>
										<td><?=$tender['min_price']?> - <?=$tender['max_price']?></td>
										<td><?=$tender['date_due']?> - <?=ucfirst($tender['priority'])?> Priority</td>
										<td>
											<?php
											if ($tender['state']==1) {
												echo "<span class='green-text'>Completed</span>";
											} else {
												echo "<span class='blue-text'>Pending.. Waiting Quotations.</span>";

											}
											?>
											
										</td>
										<td class="hide-print">
											<?php if ($tender['state'] == 0): ?>
												<a class="btn-flat red white-text" href="delete_tender.php?id=<?=$tender['id']?>"> Delete Tender</a>
											<?php else: ?>
												<a target="_blank" class="btn-flat cyan white-text" href="../quotation?quote=<?=$tender['quote']?>"> Print Quotation</a>
											<?php endif ?>
											
										</td>
									</tr>
							<?php endforeach ?>
							</tbody>
						</table>
						<br><br>
						<button class="btn-flat cyan white-text hide-print" onclick="print()"> Print Report</button>
						<?php else: ?>
							There are no Tenders
						<?php endif ?>
					</div>

					<div id="prods" class="col l12 m12 s12 center-align">
						<div class="row container hide-print">
							<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">

							    <li class="tab col l6 s6"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#graph"><i class="fa fa-bar-chart"></i> <span> Most Tendered Product</span></a></li>

							    <li class="tab col l6 s6"><a style="font-size: 1.4em; color:  #ee6e73;" class="waves-effect waves-cyan hoverable" href="#prodss"><i class="fa fa-gift"></i> <span> Products</span> </a></li>

							</ul>

						</div>

						<div class="row container">
							<div id="graph" class="col l12 m12 s12">
								<h4 class="white-text" >Graph of most tendered Product</span> </h4>
								<?php if ($products): ?>
							
								<table>
									<?php
										$totalcount = 0;
										
										foreach ($tenders as $tender) {
											$totalcount += 1;
										}

										
									?>
								
									<?php foreach ($products as $product ): ?>
										<?php
											$cases = 0;
											foreach ($tenders as $tender) {
											
												if ($tender['prod'] == $product['name']) {
													$cases += 1;
													
												}
											}
										
											$percent = floor($cases/$totalcount*100);
										 	$width = $percent*7;
										 	if ($width == 0) {
										 		$width=2;
										 	}
															
										?>
										
										<tr>
											<td style="width: 150px !important;"><?= ucwords($product['name']) ." ".$cases ." (".$percent." %)"?></td>
											<td style="border-left: 2px solid orange; padding-left: -2px;"><img class="bar" src="../images/graph.jpg" width="<?=$width?> px;" height="70px;"></td>
										<tr>
										<tr style="height: -10px;"></tr>

									<?php endforeach ?>
								</tbody>
								</table>
								<br><br>

								<button class="btn-flat cyan white-text hide-print" onclick="print()"> Print Report</button>
								<?php else: ?>
									There are no Products
								<?php endif ?>
							</div>

							<div id="prodss" class="col l12 m12 s12">
								<?php if ($products): ?>
									<table class="responsive-table centered">
										<thead>
											<tr>
												<th>Image</th>
												<th>Product</th>
												<th>Category</th>
												<th>Total Tenders</th>
												<th class="hide-print">Action</th>
											</tr>
										</thead>
									
									<tbody>
									<?php foreach ($products as $product): ?>
											<tr>
												<td><img class="circle" height="50px" width="50px" src="../images/products/<?=$product['pic'] ?>"></td>
												<td><?=ucwords($product['name'])?></td>
												<td><?=ucfirst($product['category'])?></td>
												<td>
													<?php
														$total = 0;
														foreach ($tenders as $tender) {
															if ($tender['prod'] == $product['name']) {
																$total += 1;
															}
														}
														echo $total;
													?>
												</td>
												<td class="hide-print">
													<a class="btn-flat red white-text" href="delete_product.php?id=<?=$product['name'] ?>"> Delete Product</a>
												</td>
											</tr>
									<?php endforeach ?>
									</tbody>
								</table>
								<br><br>
								<button class="btn-flat cyan white-text hide-print" onclick="print()"> Print Report</button>
								<?php else: ?>
									There are no Products
								<?php endif ?>
							</div>
						</div>
						
						
					</div>

					<div id="supplier" class="col l12 m12 s12 center-align">
						<?php if ($suppliers): ?>
						<table class="responsive-table centered">
							<thead>
								<tr>
									<th>ID #</th>
									<th>Name</th>
									<th>Company</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Address</th>
									<th>Total Quotations</th>
									<th class="hide-print">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($suppliers as $supplier): ?>
								<tr>
									<td><?=$supplier['idno'] ?></td>
									<td><?=ucwords($supplier['fname']." ".$supplier['lname']) ?></td>
									<td><?=ucwords($supplier['c_name']) ?></td>
									<td><?=$supplier['phone'] ?></td>
									<td><?=$supplier['c_email'] ?></td>
									<td><?=ucwords($supplier['c_address']) ?></td>
									<td>
										<?php
											$quotes = 0;
											foreach ($quotations as $quotation) {
												if ($quotation['supplier'] == $supplier['idno']) {
													$quotes += 1;
												}
											}

											echo $quotes;
										?>
									</td>

									<td class="hide-print">
										<a class="btn-flat red white-text" href="delete_supplier.php?id=<?=$supplier['idno'] ?>"> Delete Supplier</a>
									</td>
								</tr>
							<?php endforeach ?>
							</tbody>
						</table>
						<br><br>
						<button class="btn-flat cyan white-text hide-print" onclick="print()"> Print Report</button>
						<?php else: ?>
							There are no Suppliers.
						<?php endif ?>
					</div>
				
			</div>
			<!-- End of reports tab -->
			   <!-- Bursaries Tab Starts here -->
			    <div id="admins" class="col s12">
			    	<div class="center-align box fore-color col m12 l12 s12 hide-print">
			   			<h4 class="center-align">Add Administrator</h4>
			   			<h6 class="yellow-text text-darken-4">Other System Administrators has equal privilliges as you.</h6><br>
			   				<button data-target="add-admin" class="btn-apply waves-effect waves-light modal-trigger">Add New Admin</button>
			   			<br><br>
			   		</div>
			    	
			    	<?php if ($admins): ?>
			    		<div class="center-align box fore-color col m12 l12 s12">
			    			<h4 class="center-align">System Administrators</h4>
				    		<table class="responsive-table centered">
						        <thead>
						          <tr>
						              <th>ID No</th>
						              <th>Names</th>
						              <th>Email</th>
						              <th>Phone</th>
						              <th class="hide-print">Action</th>
						          </tr>
						        </thead>

						        <tbody>

						    		<?php foreach ($admins as $admin): ?>
						    			<tr id="<?=$admin['idno']?>">
								            <td><?=$admin['idno']?></td>
								            <td><?=ucwords($admin['names'])?></td>
								            <td><?=$admin['email']?></td>
								            <td><?=$admin['phone']?></td>
								            <td class="hide-print">
								            	
								            	<button class="btn-cancel waves-effect waves-red"
									            onclick="deleteAdmin('delete_admin.php','<?=$admin['idno']?>')" ><i class='fa fa-trash'></i> Delete Admin</button>          		
									            		
								            	
								            </td>
								         </tr>
						    		<?php endforeach ?>

						        </tbody>
						    </table>
						    <br><br>
						</div>
					<?php else: ?>
						<div class="center-align box fore-color col m12 l12 s12">
							<h5>There are no more Administrators.</h5><br>

							<h6>Click the Above Button to add a Administrator.</h6>
							 <br><br><br>
						</div>
			    	<?php endif ?>	

			    			<!-- Modal Structure -->
							  <div id="add-admin" class="modal fore-color">
							    <div class="modal-content center-align">
							      	<h4>Add Administrator.</h4>
							      	<form method="POST" action="add_admin.php" id="add-admin-form">
							      		<div class="input-field col s12 m6 l6">
							          		<input id="id-no" name="id-no" type="number" class="validate" required>
							          		<label for="id-no">ID Number</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="names" name="name" type="text" class="validate" required>
							          		<label for="names">Full Names</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="phone" name="phone" type="number" class="validate" required>
							          		<label for="phone">Phone Number</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="email" name="email" type="email" class="validate" required>
							          		<label for="email">Email</label>
							        	</div>

							      		<div class="input-field col s12 m12 l12">
							          		<input id="password" name="password" type="password" class="validate" required>
							          		<label for="password">Password</label>
							        	</div>

							      		<button class="modal-action waves-effect waves-light btn-apply" ><i class="fa fa-check"></i> Add</button>

							        	<a href="#" class="modal-action modal-close waves-effect waves-light btn-cancel"><i class="fa fa-times"></i> Cancel</a>
							      	</form>
							    </div>
							   
							  </div>
							<!-- End of modal structure -->		    	

			    </div>
			   <!-- Admins tab ends here -->

		</div>

		

	</body>

	<div id="preview"></div>



	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/jquery.form.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<div id="auto">

		<script type="text/javascript">
			$(document).ready(function() {
				$('input.autocomplete').autocomplete({
				    data: {
				    <?php if ($products): ?>
					<?php foreach ($products as $product): ?>							
				      	"<?=$product['name']?>": '../images/products/<?=$product['pic']?>',
					<?php endforeach ?>
					<?php endif ?>
					
				    },
				    limit: 20,
				    onAutocomplete: function(val) { },
				    minLength: 0, 
				});
			});
			  
		</script>
	</div>

	<?php
		
			if (isset($_GET['ok'])) {
				echo "
				<script>
					var \$toastContent = \$('<span><i class=\"fa fa-check green-text\"></i>  New Administrator Added </span>');
	  				Materialize.toast(\$toastContent, 3000);
	  			</script>
				";

			} elseif (isset($_GET['err'])) {
				echo "
				<script>
					var \$toastContent = \$('<span><i class=\"fa fa-exclamation red-text\"></i>  Error while adding new Administrator. Try again. </span>');
	  				Materialize.toast(\$toastContent, 3000);
	  			</script>
				";
			}
		?>
	<script type="text/javascript">

		$(document).ready (function() {
			$(".dpic").click(function() {
				$("#image_upload").trigger("click");
			});

			$("#image_upload").change(function(){
                $("#upload-submit").removeClass("hide");

			 	var output = document.getElementById('dpic');
			    output.src = URL.createObjectURL(event.target.files[0]);
		 		        
		    });

		    var date = new Date();
	    	date.setDate(date.getDate()+1);

	        $('.datepicker').pickadate({
	            selectMonths: true, // Creates a dropdown to control month
	            selectYears: 5, // Creates a dropdown of 100 years to control year,
	            today: 'Today',
	            min: date,
	            clear: 'Clear',
	            close: 'Ok',
	            format: 'yyyy-mm-dd',
	            cancel: 'Cancel',
	            closeOnSelect: false // Close upon selecting a date,
	        });

	        $("#add_prod").submit(function() {
                var pic = $('#pic').val();
	         	var category = $('#category').val();

	         	if (pic == '') {
	         		 Materialize.toast('Select Image', 2000);
	         		 return false;
	         	}

	        	if (category == null) {
		         	Materialize.toast("Select Product Category!", 2000);
	        		return false;
	        	}

               	$("#add-btn").html("Adding Product. Please wait... <i class='fa fa-spinner circular'></i>");
			
               	$("#add-btn").addClass("lose-focus");

                $.post($(this).attr("action"), $(this).serialize(), function(data) {
                    $("#auto").html(data);
                    
                });

                return false; // prevent normal submit
            });


	        $("#add_cat").submit(function() {
                

               	$("#add-cat-btn").html("<i class='fa fa-spinner circular'></i> Adding. Hold on... ");
			
               	$("#add-cat-btn").addClass("lose-focus");

                $.post($(this).attr("action"), $(this).serialize(), function(data) {
                    $("#preview").html(data);
                    
                });

                return false; // prevent normal submit
            });


	        $("#create_tender").submit(function() {
                var date_due = $('#date_due').val();
	         	var priority = $('#priority').val();

	         	if (date_due == '') {
	         		 Materialize.toast('Select Date Due', 2000);
	         		 return false;
	         	}

	        	if (priority == null) {
		         	Materialize.toast("Select Tender Priority!", 2000);
	        		return false;
	        	}

               	$("#tender-btn").html("Creating Tender. Please wait... <i class='fa fa-spinner circular'></i>");			
               	$("#tender-btn").addClass("lose-focus");

                $.post($(this).attr("action"), $(this).serialize(), function(data) {
                    $("#preview").html(data);
                    
                });

                return false; // prevent normal submit
            });
		});


		function uploadPic() {
			$("#upload-submit").html("Uploading Image... Please Wait! <i class='fa fa-spinner circular'></i>");
			showPopup('working'); 
			$("#upload-submit").addClass('lose-focus');

	        $("#upload-form").ajaxForm({

	            target: '#preview',
	            beforeSend:function(){
	                $("#working-percentage").removeClass('hide');
	            },
	            uploadProgress:function(event,position,total,percentComplete){
	                $("#working-value").html(percentComplete);
	                     
	            }
	                     
	        }).submit();
		}


		function deleteAdmin(path,received) {
			timeOut = setTimeout(function(){ 
				$.ajax({url:path+"?",
	                data: {'idno':received},
	                type: 'GET',
	                success:{}
	            });
	            				
			}, 3000);
			globalId = received;
			$('#'+received).slideUp(2000);
			// $('#'+globalId).addClass('hide');
			var $toastContent = $('<span><i class="fa fa-exclamation red-text"></i>  System Administrator Deleted</span>').add($('<button onclick="undo()" class="green-text btn-flat toast-action">Undo</button>'));
  				Materialize.toast($toastContent, 3000);
		}

		function undo() {
			$('#'+globalId).slideDown(1000);
			// $('#'+globalId).removeClass('hide');
			clearTimeout(timeOut);
			Materialize.Toast.removeAll();
		}
        
	</script>

	</body>
</html>