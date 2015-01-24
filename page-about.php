<?php

/*
   Template Name: About Homepage
*/

?>

<?php get_header('about'); ?>

	<header class="headerAbout">
		<div class="headerTextContainer">
			<h1>About Our Team</h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
			<div class="searchBar"><?php get_search_form(); ?></div>
		</div><!--/.headerTextContainer -->
	</header><!--/.headerHome -->

	<section class="bodyMain">

		<section class="bodyMain_left">

			<div class="bodyMain_left_top bodyMain_left_top_aboutUs">
				<h1>Ran Davis</h1>
				<h5>Principal Architect/Founder</h5>
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/ran_photo.png" alt="Ran Davis Photo"/>

				<p>Mr. Davis is a business professional and principal systems architect with over 24 years of experience in the computer software industry helping companies utilize technology to enable their strategic capabilities.   Mr. Davis is a 2011 Texas A&M Distinguished Former Student of the Computer Science and Engineering Department recipient.</p>


				<p>Mr. Davis has been an individual technologist, Team Lead, Application Designer, System Architect, business owner, and strategic business consultant.  Since 1998, Mr. Davis has been an entrepreneur focused on running businesses based upon larger profits over higher revenue.  He has started multiple technology companies of various business models including a traditional brick & mortar technology consulting firm; a “near-shore” product development consulting firm; and a product incubator / product development firm.  Through 2011, all of Mr. Davis’ businesses have been self-funded and experienced consistent revenue growth and profitability.</p>

				<p>Mr. Davis has a long history of industry firsts in delivering business applications suites based upon next-generation technologies. He has successfully been resolving business problems through the delivery of software products utilizing client/server, web-enabled, and service-oriented architectures.</p>

				<p>Mr. Davis has held senior systems architect positions on several client/server and Internet-based projects for industry leading financial services companies, including Fidelity Investments’ acclaimed on-line Internet trading system. These products have received broad praise and several industry awards from publications such as the Wall Street Journal and the Financial News Network. Mr. Davis is an experienced technology mentor who consistently leads his teams to deliver high-value products and solutions for his clients.</p>

				<p>In addition to assisting companies achieve their strategic capabilities through technology, Mr. Davis has created and maintains a suite of products aimed primarily at the clay target shooting communities.</p>

				<hr>

				<h4>Achievements</h4>

				<ul>
					<li>2011 Texas A&M Distinguished Former Student of the Computer Science and Engineering Department recipient.</li>

					<li>Grew a brick & mortar technology consulting firm from a 2 person startup to a 56 person, $10MM annual revenue consulting firm.</li>

					<li>Developed and manages the largest skeet, trap, and sporting clays league software in America with ~1,000,000 targets tracked thru the software.</li>
				</ul>

			</div><!--/.bodyMain_left_top -->

		</section><!--/.bodyMain_left -->

		<aside class="bodyMain_right">
			<article>
				<h3>Browse Our Latest Jobs</h3>
				<div><?php get_sidebar(); ?></div>
			</article>
		</aside><!--/.bodyMain_right -->

	</section><!--/.bodyMain -->

<?php get_footer(); ?>
