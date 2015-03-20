<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script( 'jqueryJS', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array('jquery') );
        wp_enqueue_script('jqueryJS');
    }

function paragon_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="sidebar-widget" class="widget sidebar-widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="footer-widget" class="widget footer-widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'paragon_widgets_init' );
?>