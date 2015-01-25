<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script( 'jqueryJS', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array('jquery') );
        wp_enqueue_script('jqueryJS');
    }
?>