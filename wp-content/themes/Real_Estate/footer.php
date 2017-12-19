

<!--=== Footer v1 ===-->
		<div id="footer-v1" class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar('Footer-One'); ?>
						<?php dynamic_sidebar('Footer-Links'); ?>
						<!-- Address -->
						<?php dynamic_sidebar('Footer-ContactUS'); ?>
						</div>
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright">
								2017 &copy; All Rights Reserved.
								<!-- <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> -->
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline text-right " style="margin-bottom: 0;">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer v1 ===-->



<!--Footer Starts-->  
  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/cubeportfolio/js/cube-portfolio-4.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/pace/pace.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/backstretch/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smoothScroll.js"></script>
	


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/one.app.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/owl2-carousel-v1.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/owl2-carousel-v2.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/owl2-carousel-v3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/cube-portfolio.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/promo.js"></script>

<!-- JS Page Level-->
	


<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		App.initCounter();


	});
	jQuery(function() {
			App.init();
			Owl2Carouselv1.initOwl2Carouselv1();
			Owl2Carouselv2.initOwl2Carouselv2();
			Owl2Carouselv3.initOwl2Carouselv3();
			//ContactForm.initContactForm();
		});
</script>
 <?php wp_footer(); ?>
 <!--Footer Ends-->  
</body>
</html>