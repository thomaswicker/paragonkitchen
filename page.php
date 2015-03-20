<?php get_header('alt'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

</section><!-- END OF events-container -->

	<script type="text/javascript">
		
		//Hides the left month nav button on the calendar page if the prev month val is empty

		$(document).ready(function() {
		   str = $('.tribe-events-nav-previous').text();
		   if($.trim(str) === "") {
		     $('.tribe-events-nav-previous').hide();
		   }


		   var currentHash = window.location.href;
			 
			 if (currentHash=="http://paragonkitchen.com/calendar/") {
				   $('.month-view-calendar-btn').hide();
			 }

		});

	</script>

<?php get_footer(); ?>
