<?php
/**
 * The article template used to display team members in contact us template
 */
?>

<article class="module module-contactmember">

	<?php if( has_post_thumbnail()){ ?>
	<figure class="feature-image">
   			<?php the_post_thumbnail('medium', array('class' => '')); ?>
	</figure>
	<?php } ?>
	<div class="bd">
	<header>
		<h1 class="h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	</header>		
		
		<?php if(get_field('email')) { ?>
			<span class="icon-email"></span>
			<a class="email" href="mailto:<?php echo get_field('email') ?>?subject=Contact%20Us%20Page"><?php echo get_field('email') ?></a><br />
		<?php } ?>
		<?php if(get_field('phone_number')) { ?>
			<p class="phone">
			<span class="icon-phone"></span>
				<?php echo "Ph: ".get_field('phone_number'); ?>
			</p>
		<?php } ?>
		<?php $link = ( get_field('appointment_link') ? get_field('appointment_link') : get_field('booking_link', 'option') ); ?>
		<p class="buttons"><a class="button" href="<?php echo $link; ?>"><?php echo get_field('appointment_link_text'); ?></a></p>
	</div>
	
</article>	