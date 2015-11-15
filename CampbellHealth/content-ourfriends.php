<?php
/**
 * The template for displaying the bottom content
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */
?>

<?php 

$gallery = get_field('our_friends_gallery', 'option');

if($gallery): ?>
<section class="module module-ourfriends">
	<div class='container'>
		<h2>Our Friends</h2>	
	<ul class='gallery'>
<?php 
	foreach ($gallery as $item) {
		echo "<li>"
		."<a rel='nofollow' target='".$item['target']."' href='".$item['link']."'>"
		."<img src='". $item['logo']['url'] ."' alt='".$item['logo']['alt']."' target='_BLANK' />"
		."</a>"
		."</li>";
	}
?>
	</ul>

	</div>
</section>

<?php endif; ?>


