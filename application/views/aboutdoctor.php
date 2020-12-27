

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
   <h1>More Help</h1>
    <?php echo $this->session->flashdata('message'); ?>
    
    
   <?php foreach ($experts as $expert) { ?>

    
     <div class="doctor col-lg-12">
      </br>
      </br>
      <div class="media">
        <div class=" col-md-3">
         <img src="<?=base_url()?>images/<?=$expert['Picture']?>" alt="" class="img-fluid">
         </div>
         <div class="media-body">


            <h2><?=$expert['Name']?></h2>
			<br>
            <pre style="font-size: 20px;"><?=$expert['Description']?>
            </pre>
            <br>
            <a href="<?=base_url()?>welcome/specialistf" class="blog-btn" data-toggle="modal" data-target="#myModal<?=$expert['ID']?>">Appointment Now</a>
         </div>
      </div>
      </br>
   </div>
   </br>



  <?php if($this->session->userdata('ID')) { ?>
  
  
        <div class="modal video-modal fade" id="myModal<?=$expert['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                Book Appointment
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
              </div>
              <div class="modal-body">
                
        
                
                <form action="" method="post">
    
    
                  <?php echo $this->session->flashdata('message'); ?>
    
    

                  <div class="form-group"> 
                    <label for="">Book Date</label>
                    <input type="hidden" name="Expert_ID" value="<?=$expert['ID']?>">
                    <input type="date" class="form-control" value="<?=set_value('book_date')?>" placeholder="Book Date" name="Date">
                    <div class="error"><?=form_error('Date')?></div>
                  </div>
    
                  
    
                  <div class="form-group">
        
                    <button type="submit" class="btn btn-success">Appointment Now</button>

                  </div>
    
                </form>
                
                
              </div>
                
              
            </div>
          </div>
        </div>
    

    <?php } else{ ?>


        <div class="modal video-modal fade" id="myModal<?=$expert['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
							HEALTHY TIPS
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
              </div>
              <div class="modal-body">
                <p>If you are alreday a member then please <a href="<?=base_url()?>login">login </a>first to Appointment your wanted doctor.</p>
                
                <p>OR</p>
                
                <p>If you don't have an account, nothing to worry! You can  <a href="<?=base_url()?>signup">signup </a>here.</p>

              </div>
            </div>
          </div>
        </div>

  
  <?php } ?>


     
 <?php } ?>
  
   
   <br> 
   <br> 
   <br>
</div>

