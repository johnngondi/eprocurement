<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Welcome to e-Procurement System</title>
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    	<link rel="stylesheet"" type="text/css" href="css/animate.min.css">
    	<link rel="shortcut icon" href="images/icons/quote.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>
		
		<div class="row ">
			<div id="core" class="col l12 s12 m12">
				<div class="row container top-header white-text">
					
					<div class="col m12 orange-text">
						<h5> <i class="fa fa-pie-chart" style="font-size: 1.5em;"></i> eProcurement</h5>
					</div>
				</div>
				<div class="container center-align main">
					<h3 class="white-text"><b>eProcurement System</b></h3>
					<h5 class="blue-text">All online!</h5>
					<br>
					<h5><a href="tenders" class="btn-orange waves-effect waves-blue pulse">View Tenders</a></h5><br>
					<h6 class="white-text"><a class="btn-orange-small" href="javascript:showPopup('login-popup')">Login</a> or  <a href="javascript:showPopup('reg-popup')" class="btn-white-small">Register</a></h6>
					
				</div>
			</div>

			<div id="login-popup" class="row popup" style="padding-top: 10%;">
				<div class="col l3 s1 m1"></div>
				<div class="col l4 s10 m10 center-align aside orange-text panel white">
					<h5>Login</h5>
    				<form id="login-form" action="login.php" method="POST">
					  <div class="row container">
				        <div class="col m12 l12">				       
				          <div class="input-field">
				          	<i class="fa fa-user prefix"></i>
				            <input id="idno" name="idno" type="number"  minlength="8" class="validate" required>
				            <label for="idno" data-error="Id must be 7 or 8 Characters"  data-success="">ID Number</label>
				          </div>
				        </div>

				        <div class="col m12 l12">				       
				          <div class="input-field">
				          	<i class="fa fa-lock prefix"></i>
				            <input id="password" name="password" type="password" minlength="8" class="validate" required>
				            <label for="password" data-error="Password must be 8+ Characters"  data-success="">Password</label>
				          </div>
				        </div>

				        <div class="col m12 l12 right-align">				       
				          <div class="input-field">
				            <button class="btn orange white-text waves-effect waves-light"><i class="fa fa-sign-in"></i> Login</button>
				            
				          </div>
				        </div>
				      </div>
				    </form>
				</div>
				<div class="col l3 s1 m1"></div>

			</div>

			<div id="reg-popup" class="row popup">
				<div class="row" style="padding-top: 10%;">
					<div class="col l3 m1 s1"></div>
					<div class="col l6 m10 s10 panel white">
						<h5>Supplier Registration</h5>
	    				<form id="register-form" action="register.php" method="POST">
						  <div class="row ">
					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-bank prefix"></i>
					            <input id="company-name" name="company-name" type="text"  class="validate" required>
					            <label for="company-name" data-error="Fill in Company"  data-success="">Company Name</label>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-map-marker prefix"></i>
					            <input id="company-address" name="company-address" type="text"  class="validate" required>
					            <label for="company-address" data-error="Fill in Company Address"  data-success="">Company Address</label>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					           	<i class="fa fa-at prefix"></i>
					            <input id="company-email" name="company-email"  onblur="checkDuplicate('email')" type="email"  class="validate" required>
					            <label for="company-email" data-error="Email must contain @ and ."  data-success="">Company Email</label>	
	                            <p id="err-email" style="margin-top: -20px;"></p>			            
					          </div>
					        </div>
					      </div>

						  <div class="row ">
					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-user prefix"></i>
					            <input id="first-name" name="first-name" type="text"  class="validate" required>
					            <label for="first-name" data-error="Fill in First Name"  data-success="">First Name</label>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-user prefix"></i>
					            <input id="last-name" name="last-name" type="text"  class="validate" required>
					            <label for="last-name" data-error="Fill in Last Name"  data-success="">Last Name</label>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					           	<i class="fa fa-barcode prefix"></i>
					            <input id="idnumber" name="idnumber"  onblur="checkDuplicate('id')" type="number" minlength="7"  class="validate" required>
					            <label for="idnumber" data-error="ID No. must be 7 or 8 chars"  data-success="">Id Number</label>
	                            <p id="err-idno" style="margin-top: -20px;"></p>				            
					          </div>
					        </div>
					      </div>

						  <div class="row">
					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-phone prefix"></i>
					            <input id="phone" name="phone"  onblur="checkDuplicate('phone')" type="number" data-length="10" class="validate" required>
					            <label for="phone" data-error="Phone Number must be 10"  data-success="">Phone Number</label>
	                            <p id="err-phone" style="margin-top: -20px;"></p>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-lock prefix"></i>
					            <input id="pass" name="pass" type="password" minlength="8"  class="validate" required>
					            <label for="pass" data-error="Passord must be 8+ Chars"  data-success="">Password</label>
					          </div>
					        </div>

					        <div class="col m4 l4">				       
					          <div class="input-field">
					          	<i class="fa fa-lock prefix"></i>
					            <input id="re-pass" name="re-pass" type="password" minlength="8"  class="validate" required>
					            <label for="re-pass" data-error="Passord must be 8+ Chars"  data-success="">Repeat</label>				            
					          </div>
					        </div>
					      </div>

					      <div class="row right-align " style="margin-right: 30px;">
					      	
					            <button id="reg-btn" class="btn orange white-text waves-effect waves-light"><i class="fa fa-pencil"></i> Register</button>
					      </div>
					    </form>
					</div>
					<div class="col l3 m1 s1"></div>
				</div>
			</div>
			
		</div>

	</body>

	<div id="preview"></div>

	<script type="text/javascript" src="js/jquery.js"></script>	
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		var ret = '';
		<?php if (isset($_GET['ret'])): ?>
			ret = '<?=$_GET['ret']?>';
		<?php endif ?>
		$(document).ready(function() {
	    	approveQuotes();
   			$("#login-form").submit(function() {

	            $.post($(this).attr("action"), $(this).serialize(), function(feedback) {	                
					$('#preview').html(feedback);
	            });

	            
	            return false; // prevent normal submit
	        });

		    $("#register-form").submit(function() {
                var idno = $('#idnumber').val();
	         	var password = $('#pass').val();
	        	var re_password = $('#re-pass').val();

	         	if (idno.length < 6 || idno.length > 8) {
	         		 Materialize.toast('ID Number should be between 6 to 8 Characters!', 4000);
	         		 return false;
	         	}

	        	if (password != re_password) {
		         	Materialize.toast("Passwords don't match!", 4000);
	        		return false;
	        	}

               	$("#reg-btn").html("Registering you. Please wait... <i class='fa fa-spinner circular'></i>");
			
               	$("#reg-btn").addClass("disabled");

                $.post($(this).attr("action"), $(this).serialize(), function(data) {
                    $("#preview").html(data);
                    
                });

                return false; // prevent normal submit
            });
		});

		function checkDuplicate(label) {
              if (label == 'id') {
                var data = document.getElementById('idnumber').value;
                if (data != '') {
                	$.ajax({url:"check_duplicate.php?",
                      data: {'id':data},
                      type: 'GET',
                      success: function(response) {
                        $('#preview').html(response);
                      }
                  	});
                }
                  

              } else if (label == 'phone') {
                var data = document.getElementById('phone').value;
                if (data != '') {
                	$.ajax({url:"check_duplicate.php?",
                      data: {'phone':data},
                      type: 'GET',
                      success: function(response) {
                        $('#preview').html(response);
                      }
                  	});
                }
                  

             } else if (label == 'email') {
                var data = document.getElementById('company-email').value;
                if (data != '') {
	                $.ajax({url:"check_duplicate.php?",
	                      data: {'email':data},
	                      type: 'GET',
	                      success: function(response) {
	                        $('#preview').html(response);
	                      }
	                });
            	}
            }
                  
        }

        function approveQuotes() {
        	$.ajax ({
        		url:'approve_quotes.php',
        		type:'POST',
        		data:{'data':'1'},
        		success: function(data) {
        			$('#preview').html(data);
        		}
        	});
        }
        
	</script>

	</body>
</html>