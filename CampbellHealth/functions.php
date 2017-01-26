<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	// Load core mods
	if ( !function_exists('core_mods') ) {
		function core_mods() {
			if ( !is_admin() ) {
    //             add_action('')
				// wp_deregister_script('jquery');
				// wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
				// wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

    // Add any scripts you need
    function campbellhealth_scripts() {
        
        // Use a custom version of jQuery on the front-end
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
        wp_enqueue_script('jquery');
        
        // Example for style
        // wp_enqueue_style( 'style-name', get_stylesheet_uri() );
        
        // Example for script
        // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'campbellhealth_scripts' );

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
        //register_sidebar(array(
        //    'name' => __('Our Friends Widgets','html5reset' ),
        //    'id'   => 'sidebar-ourfriends',
        //    'description'   => __( 'These are widgets for the Friends Section.','html5reset' ),
        //    'before_widget' => '<section id="%1$s" class="widget %2$s">',
        //    'after_widget'  => '</section>',
        //    'before_title'  => '<h2>',
        //    'after_title'   => '</h2>'
        //));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
    add_theme_support('post-thumbnails');
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array('main_nav' => 'Main Navigation Menu')
        );
    }
/*
    function the_post_thumbnail_caption() {
      global $post;

      $thumbnail_id    = get_post_thumbnail_id($post->ID);
      $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

      if ($thumbnail_image && isset($thumbnail_image[0])) {
        echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
      }
    }
    */
?>