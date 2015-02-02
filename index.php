<?php get_header(); ?>

<section id="" class="about-body medium-12 columns">

	<span id="about" class="scrollspy"></span><!-- /END OF SCROLLSPY - ABOUT -->	

	<aside class="about-body-left medium-3 columns">
		<img src="<?php bloginfo( 'template_directory' ); ?>/img/kristi_photo_grunge.png">

		<div class="contact-me-box">
			<p class="chef-name">Kristi Aragon</p></br> 
			<p class="chef-title">Chef/Owner</p>
		</div>
	</aside><!-- /.about-body-left -->

	<div class="about-body-right medium-9 columns">
	
		<?php
			$args = array(
				'post_type' => 'about',
				'posts_per_page' => 1
				);

			$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>
			
			<h1><?php the_field( 'about_header' ); ?></h1>

			<blockquote>
				<?php the_field( 'about_blockquote' ); ?> 
			</blockquote>
			<p>
				<?php the_field( 'about_body_text' ); ?></br></br>
			</p>

		<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

		<?php endif; ?>

	</div><!-- /.about-body-right -->	

</section><!-- /.about-body -->	

<section class="classes-body medium-12 columns">

	<span id="calendar" class="scrollspy"></span><!-- /END OF SCROLLSPY - CLASSES -->	

	<div class="calendar-header medium-12 columns">
	<h2 class="page-header medium-4 columns">Upcoming Calendar</h2>
	</div><!-- /.calendar-header -->	

	<div class="calendar-listing">

		<?php
		$args = array(
			'post_type' => 'events',
			'order' => 'ASC',
			'posts_per_page' => 8
			);

		$the_query = new WP_Query( $args );

		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

			<section class="calendar-card-container medium-12 columns">

				<div class="calendar-card">

					<div class="calendar-card-left">

						<div class="calendar-card-photo">
							<img src="<?php the_field( 'image' ); ?>" alt=""> 
						</div><!-- /.calendar-card-photo -->	

					</div><!-- /.calendar-card-left -->	

					<div class="calendar-card-center">

						<div class="calendar-card-header medium-12 columns">
							<?php the_field( 'title_of_class' ); ?>
						</div><!-- /.calendar-card-header -->	

						<div class="calendar-card-date">
							<?php the_field( "date_of_class" ); ?>
						</div>

						<div class="calendar-card-text medium-12 columns">
							<?php the_field( "description_of_class" ); ?>
						</div><!-- /.calendar-card-text -->	

						<div>
							<?php the_field( 'paypal_button' ); ?>
						</div>

					</div><!-- /.calendar-card-center -->

					<div class="class-card-right">

					</div><!-- /.calendar-card-right -->

				</div><!-- /.calendar-card -->

				</section><!-- /.calendar-card-container -->


		<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

		<?php endif; ?>

	</div><!-- /.calendar-listing -->	

</section><!-- /.calendar-body -->	

<section class="ourclasses-body medium-12 columns">

	<aside id="ourclasses" class="scrollspy">
		<div class="ourclasses-header medium-12 columns">
			<h2 class="page-header">Our Classes</h2>
		</div><!-- /.ourclasses-header -->	

		<div class="medium-12 large-4 ourclasses-list columns">
			<ul>
				<?php
				$args = array(
				'post_type' => 'classes-column-1',
				'posts_per_page' => 8					)

				;

				$the_query = new WP_Query( $args );

				?>

				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

				<li><?php the_field( 'class_name_for_column_1' ); ?></li>

				<?php endwhile; else: ?>

				<p>There are no posts or pages here</p>

				<?php endif; ?>
			</ul>
			
		</div><!-- /.medium-6 columns -->

		<div class="medium-12 large-4 ourclasses-list columns">

			<ul>
					<?php
					$args = array(
					'post_type' => 'classes-column-2',
					'posts_per_page' => 8					)

					;

					$the_query = new WP_Query( $args );

					?>

					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

					<li><?php the_field( 'class_name_for_column_2' ); ?></li>

					<?php endwhile; else: ?>

					<p>There are no posts or pages here</p>

					<?php endif; ?>
				</ul>

		</div><!-- /.medium-6 columns -->

		<div class="medium-12 large-4 ourclasses-list columns">
			<ul>
				<?php
				$args = array(
				'post_type' => 'classes-column-3',
				'posts_per_page' => 8					)

				;

				$the_query = new WP_Query( $args );

				?>

				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

				<li><?php the_field( 'class_name_for_column_3' ); ?></li>

				<?php endwhile; else: ?>

				<p>There are no posts or pages here</p>

				<?php endif; ?>
			</ul>
		</div><!-- /.medium-6 columns -->

	</aside><!-- /END OF SCROLLSPY - CALENDAR -->	
</section><!-- /.calendar-body -->	

<div class="services-checkers"></div>

<section class="services-body medium-12 columns">

	<span id="services" class="scrollspy"></span><!-- /END OF SCROLLSPY - SERVICES -->	

	<div class="services-header medium-12 columns">
		<h2 class="page-header">Our Services</h2>
	</div><!-- /.services-header -->	

	<div class="services-inner">

		<article class="accordion">
			<section>
				<header class="accordion-header accordion-selected"><h3 class="accordion-h3">Catering</h3></header>
				<div class="accordion-content accordion-content-1" style="display: block">
					<div class="panel-left"><img src="<?php bloginfo( 'template_directory' ); ?>/img/services_pic_1.jpg" alt="Our Services - Picture of people serving food"></div><!-- /.panel-left -->	
					<div class="panel-right">

						<?php
						$args = array(
						'post_type' => 'services-catering',
						'posts_per_page' => 1					)

						;

						$the_query = new WP_Query( $args );

						?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

							<h4><?php the_field( 'header_text_for_catering' ); ?></h4>
							<p><?php the_field( 'body_text_for_catering' ); ?></p>

						<?php endwhile; else: ?>

						<p>There are no posts or pages here</p>

						<?php endif; ?>
						
					</div><!-- /.panela-right -->
				</div><!-- /.content -->
			</section><!-- /section -->

			<section>
				<header class="accordion-header"><h3>Private Chef</h3></header>
				<div class="accordion-content">
					<div class="panel-left medium-4"><img src="<?php bloginfo( 'template_directory' ); ?>/img/services_pic_2.jpg" alt="Our Services - Private Chef Services"></div><!-- /.panel-left -->	
					<div class="panel-right">
						<?php
						$args = array(
						'post_type' => 'services-privatechef',
						'posts_per_page' => 1					)

						;

						$the_query = new WP_Query( $args );

						?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

							<h4><?php the_field( 'header_text_for_private_chef' ); ?></h4>
							<p><?php the_field( 'body_text_for_private_chef' ); ?></p>

						<?php endwhile; else: ?>

						<p>There are no posts or pages here</p>

						<?php endif; ?>
					</div><!-- /.panel-right -->
				</div><!-- /.content -->
			</section><!-- /section -->

			<section>
				<header class="accordion-header"><h3>Wines & Pairing</h3></header>
				<div class="accordion-content">  
					<div class="panel-left"><img src="<?php bloginfo( 'template_directory' ); ?>/img/services_pic_3.jpg" alt="Our Services - Wine pairing"></div><!-- /.panel-left -->	
					<div class="panel-right">
						<?php
						$args = array(
						'post_type' => 'services-wine',
						'posts_per_page' => 1					)

						;

						$the_query = new WP_Query( $args );

						?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

							<h4><?php the_field( 'header_text_for_wine_pairing' ); ?></h4>
							<p><?php the_field( 'body_text_for_wine_pairing' ); ?></p>

						<?php endwhile; else: ?>

						<p>There are no posts or pages here</p>

						<?php endif; ?>
					</div><!-- /.panel-right -->
				</div><!-- /.content -->
			</section><!-- /section -->
		</article><!-- /article accordion -->

	</div><!-- /.services-inner -->	

</section><!-- /.services-body -->	

<div class="services-checkers"></div>

<section class="contact-body medium-12 columns">

	<span id="contact" class="scrollspy"></span><!-- /END OF SCROLLSPY - CONTACT -->	

	<div class="contact-header medium-12 columns">
		<h2 class="page-header">Contact Us</h2>
	</div><!-- /.services-header -->	

	<section class="contact-inner">

		<div class="contact-inner-left">

			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26079.790367741716!2d-101.8102190371979!3d35.20712166548833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x870148d4b245cf03%3A0xd0f3d11c6836d2af!2sAmarillo%2C+TX!5e0!3m2!1sen!2sus!4v1421540157766" width="100%" height="250" frameborder="0" style="border: 2px solid #003B3D"></iframe>

				<div class="contact-info">
					<span>The Paragon Kitchen</span></br>
					12345 That Street</br>
					Amarillo, TX 82321</br>
					<a href="mailto:kristi@theparagonkitchen.com ">kristi@theparagonkitchen.com</a>
				</div><!-- /.contact-info -->
			</div><!-- /.google-map -->
		</div><!-- /.contact-inner-left -->

		<div class="contact-inner-right">

			<section class="contact-form">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <hr>

        <?php endwhile; else: ?>

        <p>There are no posts or pages here</p>

        <?php endif; ?>

			</section><!-- /.contact-form -->
			
		</div><!-- /.contact-inner-right -->

	</section><!-- /.contact-inner -->	

</section><!-- /.contact-body -->	

<a href="#backtotop" class="button scrolltotop-button" id="backtotop">BACK TO TOP</a>


<?php get_footer(); ?>
