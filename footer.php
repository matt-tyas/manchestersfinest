<?php ?>
	</div><!-- #main .wrapper -->
	<footer role="contentinfo">
		<div class="gw">
			<div class="g one-half palm-one-whole">
				<?php if ( is_active_sidebar( 'site-footer' ) ) : ?>
					<?php dynamic_sidebar( 'site-footer' ); ?>
				<?php endif; ?>
			</div>
			<div class="g one-half palm-one-whole">
				<div class="gw">
					<div class="g one-third">
							<?php 
							    if ( is_active_sidebar( 'site-sponsor-1' ) ) : ?>
								<?php dynamic_sidebar( 'site-sponsor-1' ); ?>
							<?php endif; ?>
					</div>	
					<div class="g one-third">
							<?php 
							    if ( is_active_sidebar( 'site-sponsor-2' ) ) : ?>
								<?php dynamic_sidebar( 'site-sponsor-2' ); ?>
							<?php endif; ?>
					</div>
					<div class="g one-third">
						<?php 
						    if ( is_active_sidebar( 'site-sponsor-3' ) ) : ?>
							<?php dynamic_sidebar( 'site-sponsor-3' ); ?>
						<?php endif; ?>					
					</div>
				</div>	
			</div>
		</div>
		<div class="nav footer-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav nav--banner' )); ?>
		</div>	
		<!--<div class="back-to-top">
			<a href="#" class="icon-angle-up btn btn--secondary top-link"> Back to the top</a>
		</div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/imgsizer-min.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/selectivizr-min.js"></script>
<![endif]-->
<!-- Plugins -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script>
/*
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script')); 
*/
</script> 
</body>
</html>