<footer class="clear footer bg-primary" role="contentinfo">
	<div class="l-wrapper l-grid1-3">			
			
		<div class="copyright-content">
			<p class="copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
			</p>
		</div>
		
		<div class="menu-content">
			<?php html5blank_footer(); ?>
		</div>
		
		<div class="social-content">
			<?php html5blank_footer_social(); ?>
		</div>
		
	</div>
</footer>

			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
