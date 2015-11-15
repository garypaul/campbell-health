		<footer id="footer" class="site-footer">
			<div class="main-contact-info">
				<a href="<?php echo get_field('booking_link', 'option'); ?>" class="button button-appointment-pinned"><span class="icon-calendar" aria-hidden="true"></span><?php echo get_field('booking_link_text', 'option'); ?></a>
			</div>
			<nav class="site-footer-nav">
			<?php $params = array(
				'menu' 	=> 'Footer Nav Menu',
				'container' => false,
			);
				wp_nav_menu($params); ?>				
			</nav>
			
			<small class="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> <br /><?php echo get_field('business_address', 'option'); ?></small>
		</footer>

	<!-- </div> #page-wrap -->

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38152698-3', 'campbellhealth.ca');
  ga('send', 'pageview');

</script>

</body>

</html>
