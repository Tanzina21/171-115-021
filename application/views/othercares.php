

    

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
			    <a href="<?=base_url()?>welcome/skincare">Skin Care</a>
            </li>
			<?php if($results) { foreach ($results as $row) { ?>
            
            <li class="breadcrumb-item active" aria-current="page"><?=$row['Type']?></li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- //banner -->
    <!-- blog -->
    <section class="banner-bottom py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec py-lg-5  py-3">
                <div class="title-section text-center pb-lg-5">

                    <h3 class="w3ls-title text-center text-capitalize">Skin Problem & Solutions</h3>
                </div>
                <div class="row mt-lg-5 mt-md-4 mt-4 pb-lg-5">
                    <!--left-->

                    <div class="col-lg-8 left-blog-info text-left">
                        <div class="card">
                            <a href="single.html">
                                <img src="<?=base_url()?>images/<?=$row['Image']?>" class="img-fluid" alt="">
                            </a>
                            <div class="card-body">

                                <h5 class="card-title ">
                                    <a href="">About Skin Problem</a>
                                </h5>
                                <p class="card-text"><?=$row['Description']?></p>

                            </div>
                        </div>
						<br>
						<br>
					
					
						<br>
						
						<br>
						    <br>
			
                <!-- blog grid -->
                <div class="col-lg-10 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <iframe width="575" height="315" src="https://www.youtube.com/embed/00C_Tb_ZTwc" 
							frameborder="0" allow="accelerometer;
							autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
                        </div>
                        <div class="card-body border-0 px-0">
                            
                            <div class="pt-2">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="">Skin Problem and  solution Video</a>
                                </h5>
                            </div>
						
							
							
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                
				   <br>  <br>
          
                        <div class="comment-top">
                            <h1>For More Help</h1>
							</br>
				           </br>
                          
                                
                                <div class="media-body">
                          <h1> Specialist </h1>
						  <br>
                                    <p>If You need further help then you can take our specialist appointment .</p>
										<br>

                                    <a href="<?=base_url()?>welcome/search" class="blog-btn">Visit Here</a>
                                </div>
                           
                        </div>
                       

                    </div>
                    <!--//left-->
					<!--right-->
                    <aside class="col-lg-4 right-blog-con text-left">
                        <div class="right-blog-info text-left">
                           
                            <div class="tech-btm">
                                   <h4><?=$row['Header1']?></h4><br>
                                   <p><?=$row['Details1']?></p>
								   
                            </div>
							<br>
							<br>
                        </div>
							
						 <div class="right-blog-info text-left">
                           
                            <div class="tech-btm">
                                   <h4><?=$row['Header2']?></h4><br>
                                   <p><?=$row['Details2']?></p>
                            </div>
							<br>
							<br>
                        </div>
							
						 <div class="right-blog-info text-left">
                           
                            <div class="tech-btm">
                                   <h4><?=$row['Header3']?></h4><br>
                                   <p><?=$row['Details3']?></p>
                            </div>
							<br>
							<br>
                        </div>
							
						 <div class="right-blog-info text-left">
                           
                            <div class="tech-btm">
                                   <h4><?=$row['Header4']?></h4><br>
                                   <p><?=$row['Details4']?></p>
                            </div>
							<br>
							<br>
                        </div>
							
						 <div class="right-blog-info text-left">
                           
                            <div class="tech-btm">
                                   <h4><?=$row['Header5']?></h4><br>
                                   <p><?=$row['Details5']?></p>
                            </div>
							<br>
							<br>
							
                        </div>
							
							
                            
                            
                    </aside>
                    <!--//right-->

                </div>
            </div>
        </div>
    </section>
			<?php } }?>