
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>welcome/pregnancy">Pregnancy Care</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- //banner -->
    <!--gallery-->
    <div class="gallery  py-5" id="gallery">
        <div class="container py-md-5">

            <div class="row w3ls_gallery_grids">
                <div class="row w3_agile_gallery_grid pt-lg-5">
				
				<?php
				foreach($p_gallery as $row){ 
			?>
                    <div class="col-sm-4 agile_gallery_grid">
                        <a title="Start Improving Your Business Today." href="<?=base_url()?>images/<?=$row['Image']?>">
                            <div class="agile_gallery_grid1">
                                <img src="<?=base_url()?>images/<?=$row['Image']?>" alt=" " class="img-fluid" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3><?=$row['Type']?></h3>
                                </div>
                            </div>
                        </a>
						<br>
                    </div>
					
					<?php  
				}		
			?>
                    
                    
                </div>
                
                    
                </div>
                
                </div>
            </div>
        </div>
   