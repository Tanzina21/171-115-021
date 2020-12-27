
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
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="bg">
		<div class="center-container">
		<h1 class="agile-head text-center">Edit Expert</h1>
		<div class="container1">
		<?php echo $this->session->flashdata('message'); ?>
        
		
			<div class="col-md-10 offset-md-1 form_w3layouts">
				
				<form  method="post" action="" class="w3_agile_login">
					  
					 <div class="group">
						  <p>Name</p>
						  <input id="user1" type="text" name="Name" value="<?php if(set_value('Name')){ echo set_value('Name'); }else{ echo $user[0]['Name']; }  ?>" class="input">
						  <div class="error"><?=form_error('Name')?></div>
					  </div>
					  
					  <div class="group">
						  <p>Email</p>
						  <input id="user2" type="text" name="Email" value="<?php if(set_value('Email')){ echo set_value('Email'); }else{ echo $user[0]['Email']; }  ?>"class="input">
						  <div class="error"><?=form_error('Email')?></div>
					  </div>
					  
					  <div class="group">
						  <p>Description</p>
						  <input id="user2" type="text" name="Description" value="<?php if(set_value('Description')){ echo set_value('Description'); }else{ echo $user[0]['Description']; }  ?>"class="input">
						  <div class="error"><?=form_error('Description')?></div>
					  </div>
					  
					  <br>
					  <div class="form-group">
						<p>Department</p>
							<select id="Type" name="doctype" class="form-control m-bot15">
								<option value="">----Select Type----</option>
								<option <?php  if(set_value('doctype')=='Dietitian') { echo 'selected'; }else if($user[0]['Dept']=='Dietitian') { echo 'selected'; }?> value="Dietitian">Dietitian</option>
								<option <?php  if(set_value('doctype')=='Gynecologist') { echo 'selected'; }else if($user[0]['Dept']=='Gynecologist') { echo 'selected'; }?>   value="Gynecologist">Gynecologist</option>
								<option <?php  if(set_value('doctype')=='Dermatologist') { echo 'selected'; }else if($user[0]['Dept']=='Dermatologist') { echo 'selected'; }?>   value="Dermatologist">Dermatologist</option>
								<option <?php  if(set_value('doctype')=='Depression') { echo 'selected'; } else if($user[0]['Dept']=='Psychiatrist') { echo 'selected'; }?>  value="Psychiatrist">Psychiatrist</option>
							</select>
						<div class="error"><?=form_error('doctype')?></div>
					
					</div>
					 
					 
					   <div class="form-group">	
							<p>Picture</p>
						<input type="file" style="color: white;" name="Picture">
							<div class="error"><?=form_error('Picture')?></div>
								
					  </div>
					 
					  <div class="group">
							
						<input type="submit" class="button" value="Update">
					  </div>
					  
				</form> 
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
	
	
