

	<div class="bg">
		<div class="center-container">
		<h1 class="agile-head text-center">Signup Form</h1>
		<div class="container">
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
		
		<div class="agileits-w3layouts-copyright text-center">
			<p>© Design by <a >Nishat</a></p>
		</div>
	</div>	
	</div>
