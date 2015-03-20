<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <!-- Mobile viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<?php wp_head(); ?>

		<!-- Ancient Scrolls -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/css/foundation.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/application.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>

<body <?php body_class(); ?>>

	<section class="events-container">

		<a href="http://www.paragonkitchen.com" class="events-paragon-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png"></a>

		<a href="http://www.paragonkitchen.com" class="button month-view-home-btn"><i class="fa fa-home"></i> Back to Home</a>
		<a href="http://paragonkitchen.com/calendar" class="button month-view-calendar-btn"><i class="fa fa-calendar-o"></i> Back to Calendar</a>

