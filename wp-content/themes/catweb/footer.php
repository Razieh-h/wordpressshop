			<div class="support">
				<div class="container">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('support')) : ?><?php endif; ?>
				</div>
			</div>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="footer4 col-md-3 col-sm-6 col-xs-12">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4')) : ?><?php endif; ?>
						</div>	
						<div class="footer3 col-md-3 col-sm-6 col-xs-12">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3')) : ?><?php endif; ?>
						</div>	
						<div class="footer2 col-md-3 col-sm-6 col-xs-12">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2')) : ?><?php endif; ?>
						</div>
						<div class="footer1 col-md-3 col-sm-6 col-xs-12">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1')) : ?><?php endif; ?>
						</div>											
					</div>
					<!-- copyright -->
					<div class="copyright">						
							<p>
								کلیه حقوق این سایت متعلق به فروشگاه آنلاین <?php bloginfo('name'); ?> می‌باشد.
							</p>	
					</div>
					<!-- /copyright -->
				</div>				
			</footer>
			<!-- /footer -->
			<div id="toTop" style="display: block;">
			<a href="#"><span></span></a>
			</div>

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

