
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SubLime Signup Form Flat Responsive Widget Template :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SubLime Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="<?=base_url()?>asset3/js/jquery-1.11.1.min.js"></script>
<link href="<?=base_url()?>asset3/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url()?>asset3/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url()?>asset3///fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="<?=base_url()?>asset3///fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="bg">
		<div class="center-container">
			<div class="col-md-6 offset-3">
		<h1 class="agile-head text-center">Add Expert</h1>
		<div class="container1">
		<?php echo $this->session->flashdata('message'); ?>
        
		
			<div class="form_w3layouts">
				
				<form  method="post" action="" class="w3_agile_login" enctype="multipart/form-data" >
					  
					 <div class="group">
						  <p>Name</p>
						  <input id="user1" type="text" name="Name" value="<?=set_value('Name')?>" class="input">
						  <div class="error"><?=form_error('Name')?></div>
					  </div>

					   <div class="group">
						  <p>Email</p>
						  <input id="user2" type="text" name="Email" value="<?=set_value('Email')?>" class="input">
						  <div class="error"><?=form_error('Email')?></div>
					  </div>
					  

					   <div class="group">
						  <p>Password</p>
						  <input id="user2" type="password" name="Password" value="<?=set_value('Password')?>" class="input">
						  <div class="error"><?=form_error('Password')?></div>
					  </div>



					   <div class="group">
						  <p>Confirm Password</p>
						  <input id="user2" type="password" name="CPassword" value="<?=set_value('CPassword')?>" class="input">
						  <div class="error"><?=form_error('CPassword')?></div>
					  </div>
					  
					  
					  
					  
					  <div class="group">
						  <p>Description</p>
						  <input id="user2" type="text" name="Description" value="<?=set_value('Description')?>" class="input">
						  <div class="error"><?=form_error('Description')?></div>
					  </div>
					  
					  
						<div class="form-group">
							<p>Department</p>
								<br>
								<select id="type" name="doctype" class="form-control m-bot15">
									<option value="">----Select Type----</option>
									<option <?php  if(set_value('doctype')=='Dietitian') { echo 'selected'; } ?>  value="Dietitian">Dietitian</option>
									<option <?php  if(set_value('doctype')=='Gynecologist') { echo 'selected'; } ?>  value="Gynecologist">Gynecologist</option>
									<option <?php  if(set_value('doctype')=='Dermatologist') { echo 'selected'; } ?>  value="Dermatologist">Dermatologist</option>
									<option <?php  if(set_value('doctype')=='Psychiatrist') { echo 'selected'; } ?>  value="Psychiatrist">Psychiatrist</option>
								</select>
								<div class="error"><?=form_error('doctype')?></div>
										 
						</div>
					  
					  
					   
					  <div class="form-group">	
							<p>Picture</p>
						<input type="file" style="color: white;" name="Picture">
							<div class="error"><?=form_error('Picture')?></div>
								
					  </div>
					  
					  
					  
					  
					 
					  <div class="group">
							
						<input type="submit" class="button" value="Insert">
					  </div>
					  
				</form> 
			</div>
			</div>	
			
			
		</div>
		<br>			
<br>			
<br>			
<br>			
<br>
<br>
<br>
<br>
		
	</div>	
	</div>




