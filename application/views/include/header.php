

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Healthy Tips</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Poly Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?=base_url()?>asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?=base_url()?>asset/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

                <h1>
                    <a class="navbar-brand text-white" href="<?=base_url()?>">
                        Healthy Tips 
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3">
                            <a class="nav-link text-white <?php if(!$this->uri->segment(2)){ echo 'active'; } ?>" href="<?=base_url()?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 <?php if($this->uri->segment(2)=='about'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>welcome/about">about</a>
                        </li>
						<li class="nav-item  mr-3 <?php if($this->uri->segment(2)=='bookings'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>welcome/bookings">My Bookings</a>
                        </li>
						<?php if($this->session->userdata('ID')) { ?>
                        <li class="nav-item  mr-3">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>logout">Logout</a>
                        </li>
						<?php }else{ ?>
						<li class="nav-item  mr-3 <?php if($this->uri->segment(1)=='signup'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>signup">Sign Up</a>
                        </li>
						
						<li class="nav-item  mr-3 <?php if($this->uri->segment(1)=='login'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>login">Login</a>
                        </li>
						<?php } ?>
						
                        <li class="nav-item dropdown mr-3 ">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='fitness'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/fitness">Fitnesss</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='depression'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/depression">Depression</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='pregnancy'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/pregnancy">Pregnancy Care</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='skincare'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/skincare">Skin Care</a>
                            </div>
                        </li>
						
						
						
						 <li class="nav-item dropdown mr-3 ">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='fitness'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/f_gallery">Fitnesss</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='depression'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/d_gallery">Depression</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='pregnancy'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/p_gallery">Pregnancy Care</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='skincare'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/s_gallery">Skin Care</a>
                            </div>
                        </li>
						
						
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <span class="active">Providing Solution </span>
								 <h3>Pregnancy Care</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/about" role="button">View Details</a>
								 
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Skin Care</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/about" role="button">View Details</a>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Depression</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/about" role="button">View Details</a>
                            </div>
                        </li>
						<li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Fitnesss</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/about" role="button">View Details</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //banner -->
    <!-- section-2 -->
    <div class="section-2">
        <div class="container-fluid">
            <div class="row slide">
                <div class="col-lg-4 triple-sec">
                    <h5 class="text-dark">special services</h5>
                    <ul class="list-group mt-3">
                        <li class="list-group-item border-0">
						 <i class="fas fa-user-md mr-3"></i>Gynecologist Appointment</li>
                          
                        <li class="list-group-item border-0">
                            <i class="fas fa-user-md mr-3"></i>Dietitian Appointment</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-user-md mr-3"></i>Psychiatrist Appointment</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-user-md mr-3"></i>Dermatologist Appointment</li>
                       
                    </ul>
                </div>
                <div class="col-lg-4  triple-sec">
                    <h5>Apointment Schedule</h5>
                    <ul class="list-unstyled">
                        <li class="clearfix py-3">
                            <span class="float-left">Saturday - Wednesday </span>
                            <div class="value float-right"> 7Pm - 10Pm </div>
                        </li>
                        <li class="clearfix border-top border-bottom my-3 py-3">
                            <span class="float-left"> Thursday </span>
                            <div class="value float-right"> 5.30Pm- 9.30Pm </div>
                        </li>
                        <li class="clearfix py-3">
                            <span class="float-left"> Friday </span>
                            <div class="value float-right">4Pm - 9.30Pm </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 triple-sec">
                    <h5 class="text-black">Special Care</h5>
                    <p class="pt-4">You find here 4 types of problem's solution.Here you get a package of diet chart.And 
					get tips for depression free life.Some tips of Pregnancy care.Skin Care some tips.</p>
                </div>
            </div>
        </div>
    </div>