<?php $team_members = get_posts(array('post_type' => 'team_members')) ?>

		<?php foreach ($team_members as $post) 
			: setup_postdata($post) ?>
			<?php get_template_part( 'content', 'contactteam_member' ); ?>
			
		<?php endforeach; wp_reset_postdata() ?>