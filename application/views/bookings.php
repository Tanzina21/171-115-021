<!--Events --> 
		<div class="events-agileits-w3layouts">
			<div class="about">
				<div class="container">
				
					
					<div class="col-md-12">
						<h2 class="heading-agileinfo">My Bookings<span></span></h2>
						<table class="table table-responsive">

							<tr>
						<td>Expert Name</td>
						<td>Booking date</td>
						<td>Department</td>
						
						</tr>
							<?php
				foreach($bookings as $row){ 
			?>	
				<div class="about-grids-1">
					<tr>
						<td><?=$row['Name']?></td>
						<td><?=$row['Date']?></td>
						<td><?=$row['Dept']?></td>
						
						</tr>
						</div>	
						<?php  
				}		
			?>			</table>	
					</div>
					
					
					
					
			
					
					 
					
				</div>
				 
				 
			
			</div>
		</div>
<!-- //Events --> 
<!-- //events -->


<style type="text/css">

	.new_p{
		
	font-size: 17px;
	color: #FF1E73;
	
	}
	.new_b{
		
		text-align:center;
			
	}
</style>


