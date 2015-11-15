<?php
/**
 * Template Name: Services Page
 *
 * Description: Use this template for Services
 *
 */

get_header(); ?>
	<div class="container" role="main">

		<div class="grid-3-3">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php get_template_part( 'content', 'services'); ?>
			<?php endwhile; // end of the loop. ?>
		
		</div>
		<div class='grid-3-3'>
			<aside class="module-faq sidebar">
				<?php get_template_part('content','faq'); ?>
			</aside>
		</div>
	</div> <!-- .container -->
<?php get_footer(); ?>