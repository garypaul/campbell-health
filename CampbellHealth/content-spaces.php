<?php
/**
 * The article template used to display team members in archive-team.php template
 */
?>

<article class="module module-thespace">
	<?php if( has_post_thumbnail()){ ?>
	<figure class="grid-1-2">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   			<?php the_post_thumbnail('medium', array('class' => 'h2')); ?>
		</a>
	</figure>
	<?php } ?>
	<div class="bd grid-1-2">
		<header>
			<h1 class="h2"><?php the_title(); ?></h2>
		</header>
		<?php the_content(); ?>
	</div>

</article>	