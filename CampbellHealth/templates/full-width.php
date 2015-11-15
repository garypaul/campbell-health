<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Use this template for full-width glory!
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */

get_header(); ?>
	<div class="container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>

	</div> <!-- .container -->
<?php get_footer(); ?>