<?php
/**
 * Template Name: Our Team Archive Template
 *
 * Description: This template should be used on the Team member home page
 *
 */

get_header(); ?>

<div class="container">
	<div class="grid-2-3">
		<?php get_template_part('content','page'); ?>
		<?php get_template_part('content','team'); ?>
	</div>
	<div class="grid-1-3">
		<aside class="module-acronymns sidebar">
			<?php get_template_part('content', 'cert_acronymns'); ?>
		</aside>
	</div>
</div><!-- .container -->

<?php get_template_part('content', 'bottom_static'); ?>
<?php get_footer(); ?>