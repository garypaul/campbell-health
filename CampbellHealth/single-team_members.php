<?php get_header(); ?>

<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php 
				if ( has_post_thumbnail() ) { 
				  the_post_thumbnail('medium');
				}?>
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<?php // include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</article>

	<?php endwhile; endif; ?>
	</div>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>