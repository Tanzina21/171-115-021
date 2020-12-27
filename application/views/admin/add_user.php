
<!DOCTYPE html>
<html>
<head>
<title>Healthy Tips</title>
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
	<div class="bg">
		<div class="center-container">
		
		<div class="container">
				<h1 class="agile-head text-center">Signup Form</h1>

		<?php echo $this->session->flashdata('message'); ?>
        
		
			<div class="form_w3layouts">
				
				<form  method="post" action="" class="w3_agile_login">
				  <div class="group">
					  <p>Username</p>
					  <input id="user1" type="text" name="user_name" value="<?=set_value('user_name')?>" class="input">
					  <div class="error"><?=form_error('user_name')?></div>
				  </div>
				  
				  <div class="group">
                        <p>Email</p>
						<input id="email" type="email" name="user_email" value="<?=set_value('user_email')?>" class="input">
						<div class="error"><?=form_error('user_email')?></div>
				  </div>
				  
				  <div class="group">
                            <p>Mobile</p>
							<input id="phone" type="text" name="user_mobile" value="<?=set_value('user_mobile')?>" class="input">
							<div class="error"><?=form_error('user_mobile')?></div>
				</div>
				  <div class="group">
                            <p>Password</p>
							<input id="password1" type="password" name="user_password" value="<?=set_value('user_password')?>" class="input" data-type="password">
							<div class="error"><?=form_error('user_password')?></div>
						</div>
                        
						<div class="group">
                            <p>Confirm Password</p>				  
							<input id="password2" type="password" name="user_c_password" value="<?=set_value('user_c_password')?>" class="input" data-type="password">
							<div class="error"><?=form_error('user_c_password')?></div>
						</div>
				  
						<div class="group">
						
                            <input type="submit" class="button" value="Sign Up">
                        </div>
				</form> 
			</div>			
		</div>
		
		
	</div>	
	</div>
