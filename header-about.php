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
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="css/styles.css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; maximum-scale=1">

     <!-- BEGIN FAVICONS & ICONS -->
     <link rel="shortcut icon" href="images/favicon.ico">
     <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
     <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
     <!-- END FAVICONS & ICONS -->

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="http://www.redhook-etech.com" alt="Redhook Logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="Redhook Logo"/></a>
			</div><!--/.navbar-header -->
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li><a href="http://www.redhook-etech.com">home</a></li>
			    <li class="active"><a href="http://www.redhook-etech.com/?page_id=4">about us</a></li>
			    <li><a href="http://www.redhook-etech.com/?page_id=6">staffing</a></li>
			    <li><a href="http://www.redhook-etech.com/?page_id=8">technology</a></li>
			    <li><a href="http://www.redhook-etech.com/?page_id=10">contact</a></li>
			  </ul><!--/.nav navbar-nav -->
			</div><!--/.nav-collapse -->
		</div><!--/.container -->
	</nav><!--/.navbar -->
