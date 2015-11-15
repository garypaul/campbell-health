<?php
/**
 * Template Name: Spaces Archive Template
 *
 * Description: This template should be used on the Spaces home page
 *
 */

get_header(); ?>

	<div class="container">
	<h1 class="section-title"><?php the_title(); ?></h1>
	<?php $team_members = get_posts(array('post_type' => 'spaces')) ?>

			<?php foreach ($team_members as $post) 
				: setup_postdata($post) ?>
				<?php get_template_part( 'content', 'spaces' ); ?>
			<?php endforeach; wp_reset_postdata() ?>
	</div><!-- .container -->
<?php get_template_part('content', 'bottom_static'); ?>
<?php get_footer(); ?>