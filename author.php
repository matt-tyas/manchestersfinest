<?php
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section class="site-content author">
		<div role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			<header>
				<h1 class="page-title"><?php printf( __( 'Articles by: %s', 'twentytwelve' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>
			
			
			<div class="gw">
			
				<div class="g two-thirds palm-one-whole">
					<div id="sort-container">
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class('post-tile'); ?>>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'cat-post-thumb'); ?>
								<span class="category"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
								<h3><?php the_title(); ?></h3>							
								<div class="intro">
								<!--<p class="event-time">
									<?php //
										$has_start = get_post_meta($post->ID, '_start_month', true);
										if ( $has_start ) {
											echo ''.get_post_meta($post->ID, '_start_day', true).'/';
											echo ''.get_post_meta($post->ID, '_start_month', true).'/';
											echo ''.get_post_meta($post->ID, '_start_year', true).' ';
										}
										$has_start_time = get_post_meta($post->ID, '_start_hour', true);
										if ( $has_start_time ) {
											echo ''.get_post_meta($post->ID, '_start_hour', true).':';
											echo ''.get_post_meta($post->ID, '_start_minute', true).'';
										}
										$has_end = get_post_meta($post->ID, '_end_month', true);
										if ( $has_end ) {
											echo ' &#8211; '.get_post_meta($post->ID, '_end_day', true).'/';
											echo ''.get_post_meta($post->ID, '_end_month', true).'/';
											echo ''.get_post_meta($post->ID, '_end_year', true).' ';
										}
										$has_end_time = get_post_meta($post->ID, '_end_hour', true);
										if ( $has_end_time ) {
											echo ''.get_post_meta($post->ID, '_end_hour', true).':';
											echo ''.get_post_meta($post->ID, '_end_minute', true).'';
										}
										$has_location = get_post_meta($post->ID, '_event_location', true);
										if ( $has_location ) {
											echo ' '.get_post_meta($post->ID, '_event_location', true).' ';
										}
										else { 
											echo '';
										}
									?>
								</p>-->				
								<?php the_excerpt(); ?>
								<span>Read more&hellip;</span>
							</div>	
							</a>
						</article> 
					<?php endwhile; ?>
					</div>
				</div>
				
				<div class="g one-third palm-one-whole">
				
					<?php
					// If a user has filled out their description, show a bio on their entries.
					if ( get_the_author_meta( 'description' ) ) : ?>
					<div class="author-info media">
							<div class="author-avatar media__img">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 120 ) ); ?>
							</div><!-- .author-avatar -->
							<div class="author-description-page">
								<h2><?php printf( __( '%s', 'twentytwelve' ), get_the_author() ); ?></h2>
								<p><?php the_author_meta( 'description' ); ?></p>
							</div><!-- .author-description -->
						</div><!-- .author-info -->
					<?php endif; ?>
					

			
				<div class="gw">
				
					<div class="g one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-1' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-1' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-2' ) ) : ?>
						<?php dynamic_sidebar( 'category-page-advert-2' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-3' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-3' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-half palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-4' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-4' ); ?>
				        <?php endif; ?>
					</div>
					
				</div>
				
				<!-- Connect CTAs -->
				<aside class="connect">
					<h5 class="sub-title">Stay connected to Finest</h5>
					<?php echo do_shortcode( '[contact-form-7 id="10674" title="Simple Newsletter"]' ); ?>

						<h5 class="sub-title">// Say hello&hellip;</h5>
						<ul class="nav nav--banner  social">
							<li>
								<a class="btn-circle btn--secondary twitter" href="https://twitter.com/intent/user?screen_name=McrFinest" target="_blank" title="Follow on Twitter"><span aria-hidden="true" class="icon-twitter"></span><span class="accessibility">Twitter</span></a>
							</li>
							<li>
								<a class="btn-circle btn--secondary instagram" href="http://instagram.com/manchestersfinest" target="_blank" title="Follow on Instagram"><span aria-hidden="true" class="icon-instagram"></span><span class="accessibility">Instagram</span></a>
							</li>
							<li>
								<a class="btn-circle btn--secondary foursquare" href="https://foursquare.com/mcrfinest" target="_blank" title="Follow on Foursquare"><span aria-hidden="true" class="icon-foursquare"></span><span class="accessibility">Foursquare</span></a>
							</li>
						</ul>
						
					</aside>
				


				
				</div>

			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		<?php wp_pagenavi(); ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>