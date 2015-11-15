<?php
/**
 * Template Name: Map Template
 *
 * Description: Use this template for full-width maps
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */

get_header(); ?>
	<div class="container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('module-map'); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta">
					<?php if (get_field('location_address')) {
						echo '<p class="address">' . get_field('location_address') . '</p>';
					}?>
					<a href="<?php echo get_field('google_map_link'); ?>">
						<?php if (get_field('mobile_map_image')) { ?>
							<img alt="<?php echo get_field('location_address'); ?>" class="staticmap mobile-only" src="<?php echo get_field('mobile_map_image'); ?>" border="0" align="left" />		
						<?php } ?>
						<?php if (get_field('map_image')) { ?>
							<img alt="<?php echo get_field('location_address'); ?>" 
								class="staticmap mobile-hide" 
								src='<?php echo get_field("map_image"); ?>' border="0" align="left" />		
						<?php } ?>

					</a>
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->
			
		<?php endwhile; // end of the loop. ?>

	</div> <!-- .container -->
<?php get_template_part('content', 'bottom_static'); ?>	
<?php get_footer(); ?>