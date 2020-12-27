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
		<h1 class="agile-head text-center">Edit Department</h1>
		<div class="container1">
		<?php echo $this->session->flashdata('message'); ?>
        
		
			<div class="col-md-10 offset-md-1 form_w3layouts">
				
				<form  method="post" action="" class="w3_agile_login">
					  
					 <div class="group">
						  <p>Name</p>
						  <input id="user1" type="text" name="name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['Name']; }  ?>" class="input">
						  <div class="error"><?=form_error('name')?></div>
					  </div>
					  
					  <div class="group">
						  <p>Description</p>
						  <input id="user2" type="text" name="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $user[0]['Description']; }  ?>"class="input">
						  <div class="error"><?=form_error('description')?></div>
					  </div>
					  
					  <div class="group">
						  <p>Details 1</p>
						  <input id="user3" type="text" name="details1" value="<?php if(set_value('details1')){ echo set_value('details1'); }else{ echo $user[0]['Details1']; }  ?>" class="input">
						  <div class="error"><?=form_error('details1')?></div>
					  </div>
					  
					  <div class="group">
						  <p>Details 2</p>
						  <input id="user4" type="text" name="details2" value="<?php if(set_value('details2')){ echo set_value('details2'); }else{ echo $user[0]['Details2']; }  ?>" class="input">
						  <div class="error"><?=form_error('details2')?></div>
					  </div>
					  <div class="group">
						  <p>Details 3</p>
						  <input id="user5" type="text" name="details3" value="<?php if(set_value('details3')){ echo set_value('details3'); }else{ echo $user[0]['Details3']; }  ?>" class="input">
						  <div class="error"><?=form_error('details3')?></div>
					  </div>
					  <div class="group">
						  <p>Details 4</p>
						  <input id="user6" type="text" name="details4" value="<?php if(set_value('details4')){ echo set_value('details4'); }else{ echo $user[0]['Details4']; }  ?>" class="input">
						  <div class="error"><?=form_error('details4')?></div>
					  </div>
					  <div class="group">
						  <p>Details 5</p>
						  <input id="user7" type="text" name="details5" value="<?php if(set_value('details5')){ echo set_value('details5'); }else{ echo $user[0]['Details5']; }  ?>" class="input">
						  <div class="error"><?=form_error('details5')?></div>
					  </div>
					  <div class="group">
						  <p>Header 1</p>
						  <input id="user8" type="text" name="header1" value="<?php if(set_value('header1')){ echo set_value('header1'); }else{ echo $user[0]['Header1']; }  ?>" class="input">
						  <div class="error"><?=form_error('header1')?></div>
					  </div>
					  <div class="group">
						  <p>Header 2</p>
						  <input id="user9" type="text" name="header2" value="<?php if(set_value('header2')){ echo set_value('header2'); }else{ echo $user[0]['Header2']; }  ?>" class="input">
						  <div class="error"><?=form_error('header2')?></div>
					  </div>
					  <div class="group">
						  <p>Header 3</p>
						  <input id="user10" type="text" name="header3" value="<?php if(set_value('header3')){ echo set_value('header3'); }else{ echo $user[0]['Header3']; }  ?>" class="input">
						  <div class="error"><?=form_error('header3')?></div>
					  </div>
					  <div class="group">
						  <p>Header 4</p>
						  <input id="user11" type="text" name="header4" value="<?php if(set_value('header4')){ echo set_value('header4'); }else{ echo $user[0]['Header4']; }  ?>" class="input">
						  <div class="error"><?=form_error('header4')?></div>
					  </div>
					  <div class="group">
						  <p>Header 5</p>
						  <input id="user12" type="text" name="header5" value="<?php if(set_value('header5')){ echo set_value('header5'); }else{ echo $user[0]['Header5']; }  ?>" class="input">
						  <div class="error"><?=form_error('header5')?></div>
					  </div>
					  
					  
					  
					  
					  
					  <br>
					  <div class="form-group">
						
							<select id="Type" name="Type" class="form-control m-bot15">
								<option value="">----Select Department Type----</option>
								<option <?php  if(set_value('type')=='Fitness') { echo 'selected'; }else if($user[0]['Type']=='Fitness') { echo 'selected'; }?> value="Fitness">Fitness</option>
								<option <?php  if(set_value('Type')=='Skin Care') { echo 'selected'; }else if($user[0]['Type']=='Skin Care') { echo 'selected'; }?>   value="Skin Care">Skin Care</option>
								<option <?php  if(set_value('Type')=='Pregnancy') { echo 'selected'; }else if($user[0]['Type']=='Pregnancy') { echo 'selected'; }?>   value="Pregnancy">Pregnancy</option>
								<option <?php  if(set_value('Type')=='Depression') { echo 'selected'; } else if($user[0]['Type']=='Depression') { echo 'selected'; }?>  value="Depression">Depression</option>
							</select>
						<div class="error"><?=form_error('Type')?></div>
					
					</div>
					 
					 
					  <div class="form-group">	
							<p>Image</p>
						<input type="file" style="color: white;" name="organization_image">
							<div class="error"><?=form_error('organization_image')?></div>
								
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
	
	
