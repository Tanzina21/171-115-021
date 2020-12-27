
<div class="bg">
		<div class="center-container">
		<h1 class="agile-head text-center">LogIn Form</h1>
		<div class="container">
		<?php echo $this->session->flashdata('message'); ?>
		<div class="form_w3layouts">
				
				<form  method="post" action="" class="w3_agile_login">
				  <div id="e_message"></div>
					
                        <div class="group">
                            <p>Email</p>
							<input id="user_email" type="email" name="user_email" value="" class="input">
							
						</div>
						
                       <div class="group">
                            <p>Password</p>
							<input id="user_password" type="password" name="user_password" value="" class="input" data-type="password">
						</div>
						
						</br>
                        <div class="group">
                            <input type="button" onclick="check_login()" class="button" value="Log In">
                        </div>
                        
				</form> 
			</div>				
		</div>
		<div class="agileits-w3layouts-copyright text-center">
			<p>© Design by Nishat</p>
		</div>	
	</div>	
	</div>
	