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
  <meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; maximum-scale=1">

	<?php wp_head(); ?>

		<!-- Ancient Scrolls -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/css/foundation.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/application.min.css">
	
</head>

<body <?php body_class(); ?>>
	

	<span id="backtotop" class="scrollspy"></span><!-- /END OF SCROLLSPY - CONTACT -->	

	<section class="superhero medium-12 ">
		
		<div class="sticky">
			<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">

			  <ul class="title-area">
			    <li class="name">
			      <a href="#backtotop"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png"></a>
			    </li>
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul><!-- /.title-area -->

			  <section class="top-bar-section">
			    <!-- Right Nav Section -->
			    <ul class="right">
			      <li id="nav_about" class="nav_elements"><a href="#about">About</a></li>
			   	  <li id="nav_classes" class="nav_elements"><a href="#calendar">Calendar</a></li>
			      <li id="nav_calendar" class="nav_elements"><a href="#ourclasses">Classes</a></li>
			      <li id="nav_services" class="nav_elements"><a href="#services">Services</a></li>
			      <li id="nav_contact" class="nav_elements"><a href="#contact">Contact</a></li>
			    </ul><!-- /.right -->
			  </section><!-- /.top-bar-section -->
			</nav><!-- /.top-bar -->
		</div><!-- /.sticky -->

		<section class="superhero-inside medium-12">
			<ul class="example-orbit" data-orbit>
			  <li>
			    <img src="<?php bloginfo( 'template_directory' ); ?>/img/hero_photos_split.jpg" alt="slide 1" />
			    <div class="orbit-caption">
			      Caption One.
			    </div>
			  </li>
			  <li class="active">
			    <img src="<?php bloginfo( 'template_directory' ); ?>/img/hero_photos_catering.jpg" alt="slide 2" />
			    <div class="orbit-caption">
			      Caption Two.
			    </div>
			  </li>
			  <li>
			    <img src="<?php bloginfo( 'template_directory' ); ?>/img/hero_photos_wine.jpg" alt="slide 3" />
			    <div class="orbit-caption">
			      Caption Three.
			    </div>
			  </li>
			  <li>
			    <img src="<?php bloginfo( 'template_directory' ); ?>/img/hero_photos_1.jpg" alt="slide 4" />
			    <div class="orbit-caption">
			      Caption Four.
			    </div>
			  </li>
			</ul><!-- /.example-orbit -->	
		</section><!-- /.superhero-inside -->	

	</section><!-- /.superhero -->	



