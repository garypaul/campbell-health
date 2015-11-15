<?php
/**
 * The content for displaying the faq
 *
 * @package Armstrongest
 * @subpackage Campbell_Health_v1
 * @since Campbell Health 1.0
 */
?>

<?php 
	$services = get_field('services');
	if($services): 
        $i = 1; ?> 
		<ul class='accordion'>
		<?php 
        foreach ($services as $item) {
			if($i == 1) { $checked = 'checked'; $active = 'active';}
            else { $checked = $active = ''; }
            echo '<li  class="'. $active .'">';
			echo '<label for="item-'.$i.'" class="hd h3">'.$item['title'].'</label>';
            echo '<input '. $checked .' type="radio" id="item-'.$i.'" name="a" />';
            echo '<div class="bd">'.$item['description'].'</div>';
			echo '</li>';
            $i += 1;
		} ?>
		</ul>
<?php endif; ?>

<script>

</script>

<style>


</style>