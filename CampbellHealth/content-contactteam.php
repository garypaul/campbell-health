<?php 
	$args = array( 'post_type'	=> 'team_members'
		// 'posts_per_page'   => 5,
		// 'offset'           => 0,
		// 'category'         => '',
		// 'category_name'    => '',
		 ,'orderby'	=> 'menu_order title'
		 ,'order'	=> 'ASC' );
		 $team_members = get_posts($args); 
?>

		<?php foreach ($team_members as $post) 
			: setup_postdata($post) ?>
			<?php get_template_part( 'content', 'contactteam_member' ); ?>
			
		<?php endforeach; wp_reset_postdata() ?>