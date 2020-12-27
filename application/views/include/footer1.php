
    
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
	
	<script>	
			function check_login(){

			

				var user_email=$('#user_email').val();
				var user_password=$('#user_password').val();

				var user_email=encodeURIComponent(user_email);
				var user_password=encodeURIComponent(user_password);

 				 
				var myurl="<?=base_url()?>Login/check_login/"+user_email+"/"+user_password+"";

				$.get( myurl, function( data ) {

					 
				   if(data=='YesA'){

				   	window.location.replace("http://localhost/171-115-021/Admin");

				   }else if(data=='YesB'){

				   	window.location.replace("http://localhost/171-115-021/welcome");

				   }else if(data=='YesC'){

				   	window.location.replace("http://localhost/171-115-021/Expert");

				   }
				   else{

				    
				   	 $('#e_message').html('<div class="alert alert-danger">Wrong User email or Password</div>');

				   }
				});
			}


	</script>
	<script src="<?=base_url()?>asset3/js/jquery.vide.min.js"></script>
	<script src="<?=base_url()?>asset3/js/jquery.magnific-popup.js" type="text/javascript"></script>
	
</body>

</html>