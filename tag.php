<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<section class="site-content">
		<div role="main">
		<h2 class="page-title"><?php single_cat_title(); ?></h2>
		<?php $counter = 0; $countertwo = 0; $counterthree = 0;?>
		    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>		
			<?php if ( $paged < 2 ) : 
				  if ($counter == 0) {	?>
			<section class="flexslider">
				<ul class="slides">		
					<?php } $counter ++; ?>
		               <?php if( 6 > $wp_query->current_post ) : ?>
		               <li <?php post_class('carousel-article'); ?>>
								<article>
									<a href="<?php the_permalink() ?>" rel="bookmark">
										<div class="carousel-image">
											<?php the_post_thumbnail(); ?>
										</div>
										<?php // echo wp_get_attachment_image($attachment_id, '337x164'); ?>
										<?php// wp_get_attachment_image_src(array(337, 164)) ?>
										<div>
										<div class="title">
											<?php
												$has_start = get_post_meta($post->ID, '_start_month', true);
												if ( $has_start ) {
													echo '<p class="event-time-car">'.get_post_meta($post->ID, '_start_day', true).'/';
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
												if ( $has_start ) {
													echo '</p>';
												}
												else { 
													echo '';
												}
											?>
											<h3><?php the_title(); ?></h3>
										</div>
											<div class="intro">
												<?php the_excerpt(); ?>
												<span>Read more&hellip;</span>
												<?php the_category(); ?>
											</div>
										</div>
									</a>
								</article>
						</li>
					<?php if ($counter == 6) { ?>
				</ul>				 
			</section>
			<div class="gw row">
			<?php if ($counterthree == 0) { ?>
				<div class="g two-thirds palm-one-whole">
					<h3 class="page-title">More in <?php single_cat_title(); ?></h3>
					<div id="sort-container">
					<?php	} $counterthree++; ?>
					
						<?php	} ?>
	
						<?php else : ?>
	
						<article <?php post_class('post-tile'); ?>>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php // the_post_thumbnail( 'cat-post-thumb'); ?>
							<?php
								$post_thumbnail_id = get_post_thumbnail_id( );
								$imagesized = wp_get_attachment_image_src( $post_thumbnail_id, 'big-post-thumb');
								if ($imagesized[1] == 224) {
									the_post_thumbnail('big-post-thumb');
								} else {
									the_post_thumbnail('cat-post-thumb');
								}
							?>
							<h3><?php the_title(); ?></h3>
							<div class="intro">
								<p class="event-time">
									<?php
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
								</p>				
								<?php the_excerpt(); ?>
								<span>Read more&hellip;</span>
							</div>
						</a>
						</article>  
			
						<?php endif; ?>

						<?php else : ?>

					<?php if ($countertwo == 0) { ?>
					<div class="g two-thirds palm-one-whole">
					<div id="sort-container">
					<?php	} $countertwo++; ?>	
						
				  	    <article <?php post_class('post-tile'); ?>>
				  	    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				  			<?php // the_post_thumbnail( 'cat-post-thumb'); ?>
				  			<?php
								$post_thumbnail_id = get_post_thumbnail_id( );
								$imagesized = wp_get_attachment_image_src( $post_thumbnail_id, 'big-post-thumb');
								if ($imagesized[1] == 224) {
									the_post_thumbnail('big-post-thumb');
								} else {
									the_post_thumbnail('cat-post-thumb');
								}
							?>
				  			<h3><?php the_title(); ?></h3>
				  			<div class="intro">	
				  				<?php the_excerpt(); ?>
				  				<span>Read more&hellip;</span>
				  			</div>
				  	    </a>
				  	    </article> 
				  	    
		          <?php endif; ?>
			  
		        <?php endwhile; ?>
		        				
		<?php endif; ?>	
				
			<?php if ( $paged < 1 ) : ?>
				</div>
			</div>		
			<?php endif; ?>
				
			<?php if ( $paged > 1 ) : ?>
					</div><!-- boo -->
				</div>
			<?php endif; ?>
			<?php // if ( $paged < 1 ) : ?>
			
			<div class="g one-third palm-one-whole">
			
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
					<p>Say hello on&hellip;</p>
					<ul class="nav nav--banner nav--fit social">
						<li><a class="btn btn--secondary twitter" href="https://twitter.com/intent/user?screen_name=McrFinest" target="_blank" title="Follow on Twitter">Twitter</a></li>
						<li><a class="btn btn--secondary instagram" href="http://instagram.com/manchestersfinest" target="_blank" title="Follow on Instagram">Instagram</a></li>
						<li><a class="btn btn--secondary foursquare" href="https://foursquare.com/mcrfinest" target="_blank" title="Follow on Foursquare">Foursquare</a></li>
					</ul>
				</aside>
				
			</div>
			
			<?php // endif; ?>
			
		    <?php if ( $paged < 1 ) : ?>
			</div>
					
			<?php endif; ?>
		<?php wp_pagenavi(); ?>
		</div><!-- #content -->
			
	</section><!-- #primary -->
<?php get_footer(); ?>