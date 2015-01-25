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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
	

	<span id="backtotop" class="scrollspy"></span><!-- /END OF SCROLLSPY - CONTACT -->	

	<section class="superhero medium-12 ">
		
			<nav class="top-bar navforfixed" data-topbar role="navigation">

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

		<section id="superhero" class="superhero-inside medium-12">
			<ul class="example-orbit" data-orbit>

				<?php
				$args = array(
					'post_type' => 'imageforhero',
					'posts_per_page' => 5
					);

				$the_query = new WP_Query( $args );

				?>

				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>
				
				  <li>
				    <?php the_field( 'image_for_hero' ); ?>
				    <div class="orbit-caption">
				      <?php the_field( 'caption_for_the_hero' ); ?>
				    </div>
				  </li>

				<?php endwhile; else: ?>

				<p>There are no posts or pages here</p>

				<?php endif; ?>

			</ul><!-- /.example-orbit -->	
		</section><!-- /.superhero-inside -->	

	</section><!-- /.superhero -->	



