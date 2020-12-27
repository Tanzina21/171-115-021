<!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Search</li>
        </ol>
    </nav>
	
	
    <!-- //breadcrumbs -->
   <div class="container">
   <br>
   <br>
   <br>
   <br>
   <form action="" method="Post">
		
		<div class="row col-md-12">
			<div class="col-md-11"> 
										
								<select name="doctype" class="form-control"  >
											
											<option value="">-Select Doctor-</option>
											<option  <?php  if(set_value('doctype')=='Dietitian') { echo 'selected'; } ?>  value="Dietitian">Dietitian</option>
											<option <?php  if(set_value('doctype')=='Gynecologist') { echo 'selected'; } ?> value="Gynecologist">Gynecologist</option>
											<option <?php  if(set_value('doctype')=='Dermatologist') { echo 'selected'; } ?> value="Dermatologist">Dermatologist</option>
											<option <?php  if(set_value('doctype')=='Psychiatrist') { echo 'selected'; } ?> value="Psychiatrist">Psychiatrist</option>
											
							    </select>
										<div class="error"><?=form_error('doctype')?></div>
									</div>
			<div class="col-md-1">
			<button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>

			</div>
			
		</div>
		</form>
		<br>
		<br>
		  <div class="row py-5">
                <?php if($results){ foreach ($results as $row) {  ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="">
                                <img class="card-img-bottom" src="<?=base_url()?>images/<?=$row['Picture']?>" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0 px-0">
                            
                            <div class="pt-2">
                                <h2 class="blog-title card-title font-weight-bold">
                                    <a href=""><?=$row['Name']?></a>
                                </h2>

                            </div>
						</br>
                            <a href="<?=base_url()?>welcome/aboutdoctor/<?=$row['ID']?>" class="blog-btn">View Details</a>
							</br>
							
							
                        </div>
                    </div>
					<br>
				<br>
                </div>
          <?php } } ?>
				
	
                <!-- //blog grid -->
				    </div>
					
				    </div>