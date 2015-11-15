<?php
/**
 * The article template used to display team members in archive-team.php template
 */
?>

<article class="module module-teammember">
	<div class="bd grid-4-4">
		<header>
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if(get_field('title')){ ?>
				<h2 class="title h3"><?php echo get_field('title'); ?></h2>
			<?php } ?>
			<?php if(get_field('credentials')){ ?>
				<div class="credentials"><?php echo get_field('credentials'); ?></div>
			<?php } ?>			
		</header>
	<?php if( has_post_thumbnail()){ ?>
	<figure class="feature-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   			<?php the_post_thumbnail('medium', array('class' => 'h2')); ?>
		</a>
	</figure>
	<?php } ?>
		
	<p class="module-teammember--excerpt">	
	<?php echo get_the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">Read More...</a>
	</p>
	<p class="buttons">
			<?php $link = ( get_field('appointment_link') ? get_field('appointment_link') : get_option('booking_link') ); ?>
			<a class="button" target="_BLANK" href="<?php echo $link ;?>"><?php echo get_field('appointment_link_text'); ?></a>
			
			<?php if(get_field('email')) { ?>
				<!-- a class="button" href="mailto://<?php echo get_field('email') ?>">Email Staff</a -->
			<?php } ?>
		</p>

	</div>
	
</article>	