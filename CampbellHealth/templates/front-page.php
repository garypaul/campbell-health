<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */

get_header(); ?>

<div class="container" role="main">

	<?php 
		$testimonial = get_field('testimonial');
		$testimonial_author = get_field('testimonial_author');
		$address = get_field('address'); 
		$show_alert = get_field('show_alert'); 
		$alert = get_field('alert');
		$testimonials = get_field('testimonials');
		$module1 = get_field('module1');
		$module2 = get_field('module2');
	?>

		
		<?php while ( have_posts() ) : the_post(); ?>
		<article>
			<?php the_content(); ?>
		</article>
		<?php endwhile; // end of the loop. ?>
	
	<div class="module module-testimonial">
		<?php if($testimonials): 
		foreach ($testimonials as $t ) { ?>
		<blockquote>
			<?php echo $t['quote'] ?>
			<footer>&ndash; <?php echo $t['author'] ?></footer>
		</blockquote>
		<?php } //foreach
		endif; ?>
	</div>
	<div class="grid-1-3 home-about">
		<?php if($module1):
			echo $module1;
		endif; ?>
	</div>

	<aside class="grid-2-3 home-messages">
		
		<div class="module module-shaded">
			<?php if($module2):
				echo $module2;
			endif; ?>
		</div>

		<?php if($show_alert == "ON"):  ?>
			<div class="module module-alert">
				<?php echo $alert ?>
			</div>
		<?php endif; ?>
	</aside>
</div> <!-- .container -->
<?php // get_sidebar( 'front' ); ?>
<?php //get_template_part( 'content', 'ourfriends' ); ?>
<?php get_footer(); ?>