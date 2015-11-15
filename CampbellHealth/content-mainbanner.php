<?php
/**
 * The template for displaying the main banner image
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */
?>


<?php $image = get_field('main_banner_image'); ?>

<?php if($image) : ?>
	<?php 	
		$caption = get_field('use_custom_caption') 
			? get_field('custom_caption') 
			: $image['caption']; 
		$link = get_field('caption_link');
	?>


	<a href="<?php if($link) echo $link; ?>" class="banner banner-main">
		<figure>
			<img src="<?php echo $image['url'] ?>"
				alt="<?php echo $image['alt']?>" />
			<?php if( !empty( $caption ) ) { ?>
			<figcaption><?php echo $caption ?></figcaption>
			<?php } ?>
		</figure>
	</a>
<?php endif; // if($image) ?>