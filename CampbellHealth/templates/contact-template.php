<?php
/**
 * Template Name: Contact Page
 *
 * Description: Use this template for Contact
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
			<aside>
				<?php get_template_part('content','contactteam'); ?>
			</aside>
		</div>
	</div> <!-- .container -->
<?php get_footer(); ?>