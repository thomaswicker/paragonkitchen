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
		<h1>Welcome to the Paragon Kitchen</h1>

		<blockquote>
			The word Paragon literally translates to perfect, very best, or excellent. My philosophy is to have the very best kitchen, and by “kitchen” I mean culinary skills and techniques to create the very best meals for my clients. 
		</blockquote>
		<p>
			The Paragon Kitchen is a small private chef service, because I want to retain a personal relationship with my clients and cater to your special needs and styles. Every event, whether big or small is unique so together we put together the perfect menu and then I make it easy by coming to your location and I provide all of the necessary services to create a delicious, gourmet event that everyone will enjoy!</br></br>

			Interested in taking one of our classes? Class menus and descriptions can be found under the “Calendar” and “Classes” tabs above. You can email or call me directly to register for an upcoming class. If you have any suggestions or comments, I would love to hear them. Or if there’s a class you can’t wait for us to offer, please don’t hesitate to email me.</br></br>

			Hope to see you soon!</br></br>
		</p>

	</div><!-- /.about-body-right -->	

</section><!-- /.about-body -->	

<section class="classes-body medium-12 columns">

	<span id="calendar" class="scrollspy"></span><!-- /END OF SCROLLSPY - CLASSES -->	

	<div class="calendar-header medium-12 columns">
		<h2 class="page-header medium-4 columns">Upcoming Calendar</h2>
			<!-- <div class="class-select medium-8 columns">
				<select>
					<option selected="true" disabled="disabled">Select another class</option>
				  <option value="frenchclassics">French Classics</option>
				  <option value="comfortfoodclassics">Comfort Food Classics</option>
				  <option value="essentials">Essentials I & II</option>
				  <option value="Italian Classics">Italian Classics</option>
			  	<option value="freshsausagemaking">Fresh Sausage Making</option>
				  <option value="letsgetgrilling">Let's Get Grilling</option>
				  <option value="mothersauces">Mother Sauces</option>
				  <option value="mexicanstreettacos">Mexican Street Tacos</option>
				</select>
			</div> -->
		</div><!-- /.calendar-header -->	

		<div class="calendar-listing">

			<?php
			$args = array(
				'post_type' => 'classes',
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
								<?php the_field( 'image' ); ?>
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
				<li>French Classes</li>
				<li>Comfort Food Classics</li>
				<li>Essentials I and II</li>
				<li>Italian Classics</li>
				<li>Fresh Sausage Making</li>
				<li>Let's Get Grilling</li>
				<li>Mother Sauces</li>
				<li>Mexican Street Tacos</li>
				<li>Seafood 101</li>
			</ul>
		</div><!-- /.medium-6 columns -->

		<div class="medium-12 large-4 ourclasses-list columns">
			<ul>
				<li>Knife Skills</li>
				<li>Brunch Munch</li>
				<li>Wood Fired Pizza</li>
				<li>All Things Pumpkin</li>
				<li>Cullinary Date Night</li>
				<li>Pork... It's What's for Dinner</li>
				<li>Mommy Boot Camp</li>
				<li>Bountiful Harvest</li>
				<li>Homemade Ice Cream</li>
			</ul>
		</div><!-- /.medium-6 columns -->

		<div class="medium-12 large-4 ourclasses-list columns">
			<ul>
				<li>Food and Wine Pairing</li>
				<li>World Taste Germany</li>
				<li>Taste of Thai</li>
				<li>New Orleans Style</li>
				<li>The Art of Entertaining</li>
				<li>Artisan Bread Making</li>
				<li>Holiday Candy</li>
				<li>So Many Salads</li>
				<li>Farm to Table</li>
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
						<h4>Our Catering Services</h4>
						Drop off/Pick up meals are perfect for you if you are looking for an easier way to balance your work and family life and still feed your family a healthy and nutritious meal. There are many options to choose from such as….
						<ul>
							<li>Emilia Romagna Lasagna</li>
							<li>Beef Bourguignon</li>
							<li>Rustic chicken and garlic gravy served over pommes puree</li>
							<li>Balsamic grilled vegetables with basil quinoa</li>
							<li>Pork tenderloin and ratatouille</li>
							<li>Minestrone soup and grilled cibatta bread</li>
						</ul>
						<p>There is no charge per hour for chef just per entrée.</p>
					</div><!-- /.panela-right -->
				</div><!-- /.content -->
			</section><!-- /section -->

			<section>
				<header class="accordion-header"><h3>Private Chef</h3></header>
				<div class="accordion-content">
					<div class="panel-left medium-4"><img src="<?php bloginfo( 'template_directory' ); ?>/img/services_pic_2.jpg" alt="Our Services - Private Chef Services"></div><!-- /.panel-left -->	
					<div class="panel-right">
						<h4>Private Chef</h4>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </br></br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div><!-- /.panel-right -->
				</div><!-- /.content -->
			</section><!-- /section -->

			<section>
				<header class="accordion-header"><h3>Wines & Pairing</h3></header>
				<div class="accordion-content">  
					<div class="panel-left"><img src="<?php bloginfo( 'template_directory' ); ?>/img/services_pic_3.jpg" alt="Our Services - Wine pairing"></div><!-- /.panel-left -->	
					<div class="panel-right">
						<h4>Wine & Pairings</h4>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </br></br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

				<form action="demo_form.asp">
					<label for="name">First name:</label>
					<input type="text" id="name" name="name"><br>

					<label for="email">Email:</label>
					<input type="text" id="email" name="email"><br>

					<label for="name">Phone:</label>
					<input type="text" id="phone" name="phone"><br>

					<label for="name">Message:</label>
					<textarea type="text" id="message" name="message"></textarea><br>

					<input class="button send-button" type="submit" value="submit">	
					<input class="button cancel-button" type="reset" value="reset">	
				</form>

			</section><!-- /.contact-form -->
			
		</div><!-- /.contact-inner-right -->

	</section><!-- /.contact-inner -->	

</section><!-- /.contact-body -->	

<a href="#backtotop" class="button scrolltotop-button" id="backtotop">BACK TO TOP</a>


<?php get_footer(); ?>
