<!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
    
        <div class="container-fluid py-lg-5 mt-sm-5">
            <div class="row p-sm-4 px-3 py-5">
                <div class="col-lg-6 col-md-6 footer-top mt-lg-0 mt-md-5">
                    <h2>
                        <a href="<?=base_url()?>" class="text-theme text-uppercase">
                            poly clinic
                        </a>
                    </h2>
                    <p class="mt-2">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                        id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius
                        orci.
                    </p>
                </div>
              
                <div class="col-lg-6 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Contact Us</h3>
                        <hr>
                        <div class="fv3-contact">
                            <span class="fas fa-envelope-open mr-2"></span>
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="fv3-contact my-2">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>+456 123 7890</p>
                        </div>
                        <div class="fv3-contact">
                            <span class="fas fa-home mr-2"></span>
                            <p>+90 nsequursu dsdesdc,
                                <br>xxx Street State 34789.</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->

    <!-- //quick contact -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p>  © Design by Nishat
        </p>
    </div>
    <!-- //copyright -->
    <!-- js -->
    <script src="<?=base_url()?>asset/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- Banner Responsiveslides -->
    <script src="<?=base_url()?>asset/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //banner responsive slides -->
    <!-- Flexslider-js for-testimonials -->
    <script src="<?=base_url()?>asset/js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- //fixed quick contact -->
    <script>
        $(function () {
            var hidden = true;
            $(".heading").click(function () {
                if (hidden) {
                    $(this).parent('.outer-col').animate({
                        bottom: "0"
                    }, 1200);
                } else {
                    $(this).parent('.outer-col').animate({
                        bottom: "-305px"
                    }, 1200);
                }
                hidden = !hidden;
            });
        });
    </script>
    <!-- //fixed quick contact -->
    <!-- start-smooth-scrolling -->
    <script src="<?=base_url()?>asset/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script src="<?=base_url()?>asset/js/SmoothScroll.min.js"></script>
    <!-- //end-smooth-scrolling -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>asset/js/bootstrap.js"></script>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});														
		});
	</script>
	
<!-- bootstrap-modal-pop-up -->



	



<!-- //bootstrap-modal-pop-up --> 
	<script src="<?=base_url()?>asset3/js/jquery.vide.min.js"></script>
	<script src="<?=base_url()?>asset3/js/jquery.magnific-popup.js" type="text/javascript"></script>
	
</body>

</html>