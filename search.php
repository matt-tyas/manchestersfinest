<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section class="site-content">
		<div class="gw" role="main">
		
			<div class="g two-thirds palm-one-whole">

				<?php if ( have_posts() ) : ?>
				<!--<div class="search-page"><?php // include( TEMPLATEPATH . '/searchform-extended.php'); ?></div>-->
				
				<header>
					<h2 class="sub-title"><?php printf( __( 'Search results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				</header>

				<?php // twentytwelve_content_nav( 'nav-above' ); ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', get_post_format() ); ?>
	
				<?php endwhile; ?>
	
				<?php // twentytwelve_content_nav( 'nav-below' ); ?>

				<?php else : ?>
				
				<div class="search-page"><?php include( TEMPLATEPATH . '/searchform-extended.php'); ?></div>
				<h2 class="page-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h2>
				<div class="entry-content">
					<p class="text--center muted"><?php _e( 'Sorry, we could not find anything that matched that. Maybe try searching again.', 'twentytwelve' ); ?></p>
					<?php // get_search_form(); ?>
				</div><!-- .entry-content -->
			
				<?php endif; ?>
		
		</div>
		
		<div class="g one-third palm-one-whole">

			<h5 class="sub-title ad-title">Adverts</h5>
			
			<div class="gw">
				
					<div class="g mob-one-half one-half palm-one-quarter ">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-1' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-1' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g mob-one-half one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-2' ) ) : ?>
						<?php dynamic_sidebar( 'category-page-advert-2' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g mob-one-half one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-3' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-3' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g mob-one-half one-half palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-4' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-4' ); ?>
				        <?php endif; ?>
					</div>

					<div class="g mob-one-half one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-5' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-5' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g mob-one-half one-half palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-6' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-6' ); ?>
				        <?php endif; ?>
					</div>

					<div class="g one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-7' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-7' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-half palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-8' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-8' ); ?>
				        <?php endif; ?>
					</div>
					
				</div>
				
				<!-- Connect CTAs -->
				<aside class="connect">
					
					<h5 class="sub-title">// Say hello&hellip;</h5>
					<ul class="nav nav--banner  social">
						<li>
							<a class="btn-circle btn--secondary twitter" href="https://twitter.com/intent/user?screen_name=McrFinest" target="_blank" title="Follow on Twitter"><span aria-hidden="true" class="icon-twitter"></span><span class="accessibility">Twitter</span></a>
						</li>
						<li>
							<a class="btn-circle btn--secondary instagram" href="https://www.instagram.com/mcrfinest/" target="_blank" title="Follow on Instagram"><span aria-hidden="true" class="icon-instagram"></span><span class="accessibility">Instagram</span></a>
						</li>
						<li>
							<a class="btn-circle btn--secondary facebook" href="https://facebook.com/MCRfinest" target="_blank" title="Follow on Facebook"><span aria-hidden="true" class="icon-facebook"></span><span class="accessibility">Facebook page</span></a>
						</li>
					</ul>
				</aside>
			
		</div>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>