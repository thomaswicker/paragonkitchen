
	<!-- Magical Spells -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/js/foundation.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/js/foundation/foundation.accordion.js"></script>

	<script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/application.min.js"></script>

	<footer class="footer">
		<div class="footer-left">SITE BY: <a href="http://www.xiri.io" target="blank" class="xiri_link">XIRI</a></div>
		<div class="footer-right">Copyright &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> - All rights reserved.</div>
	</footer>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58883367-1', 'auto');
  ga('send', 'pageview');

	</script>

	<?php wp_footer(); ?>

</body>

</html>
