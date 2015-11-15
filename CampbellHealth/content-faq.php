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
	$faqs = get_field('faq');
	if($faqs){ 
		echo '<h2>Frequently Asked Questions</h2>';
		echo '<dl>';
		foreach ($faqs as $faq) {
			echo '<dt>'.$faq['question'].'</dt>';
			echo '<dd>'.$faq['answer'].'</dd>';
		}
		echo '</dl>';
	}
?>