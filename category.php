<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
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
		<h1 class="beta  page-title"><?php single_cat_title(); ?></h1>
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
										
										<!--	<?php
											$has_start = get_post_meta($post->ID, '_start_month', true);
											if ( $has_start != '100' && $has_start != '' ) {
												// Get start date to display
												$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_start_eventtimestamp', true) .''));
												list($startday,$startmonth,$startyear,$starthour,$startminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
											?>
												<p class="event-time-car">
											<?php
												echo $startday . '/' . $startmonth . '/' . $startyear;
												$has_start_time = get_post_meta($post->ID, '_start_hour', true);
												if ( $has_start_time ) {
													echo " &#8211; " . $starthour . ':' . $startminute;
												}
											}
											
											$has_end = get_post_meta($post->ID, '_end_month', true);
											if ( $has_start != '100' && $has_end != '100' && $has_start !='' && $has_end != '') {
												// Get end date to display
												$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .''));
												list($endday,$endmonth,$endyear,$endhour,$endminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
												echo " to " .  $endday . '/' . $endmonth . '/' . $endyear;
												$has_end_time = get_post_meta($post->ID, '_end_hour', true);
												if ( $has_end_time ) {
														echo " &#8211; " . $endhour . ':' . $endminute;
												}
											}
											if ( $has_start != '100' && $has_start != '') {
												$has_location = get_post_meta($post->ID, '_event_location', true);
												if ( $has_location ) {
													echo ' ' . $has_location . ' ';
												}
												
												if ( $has_start != '100' && $has_start != '' ) {
											?>
												</p>
											<?php }
											}
											?>-->
								
										<h2><?php the_title(); ?></h2>
										</div>
											<div class="intro">
												<?php the_excerpt(); ?>
												<span>Read more&hellip;</span>
												<?php // the_category(); ?>
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
					<h2 class="gamma page-title">More in <?php single_cat_title(); ?></h2>
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
								
									<!--<?php
									$has_start = get_post_meta($post->ID, '_start_month', true);
									if ( $has_start != '100' && $has_start != '' ) {
										// Get start date to display
										$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_start_eventtimestamp', true) .''));
										list($startday,$startmonth,$startyear,$starthour,$startminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
									?>
										<p class="event-time-car">
									<?php
										echo $startday . '/' . $startmonth . '/' . $startyear;
										$has_start_time = get_post_meta($post->ID, '_start_hour', true);
										if ( $has_start_time ) {
											echo " &#8211; " . $starthour . ':' . $startminute;
										}
									}
									
									$has_end = get_post_meta($post->ID, '_end_month', true);
									if ( $has_start != '100' && $has_end != '100' && $has_start !='' && $has_end != '') {
										// Get end date to display
										$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .''));
										list($endday,$endmonth,$endyear,$endhour,$endminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
										echo " to " .  $endday . '/' . $endmonth . '/' . $endyear;
										$has_end_time = get_post_meta($post->ID, '_end_hour', true);
										if ( $has_end_time ) {
											echo " &#8211; " .  $endhour . ':' . $endminute;
										}
									}
									if ( $has_start != '100' && $has_start != '') {
										$has_location = get_post_meta($post->ID, '_event_location', true);
										if ( $has_location ) {
											echo ' ' . $has_location . ' ';
										}
										
										if ( $has_start != '100' && $has_start != '' ) {
									?>
										</p>
									<?php }
									}
									?>-->
											
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
				  				
							<!--		<?php
									$has_start = get_post_meta($post->ID, '_start_month', true);
									if ( $has_start != '100' && $has_start != '' ) {
										// Get start date to display
										$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_start_eventtimestamp', true) .''));
										list($startday,$startmonth,$startyear,$starthour,$startminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
									?>
										<p class="event-time-car">
									<?php
										echo $startday . '/' . $startmonth . '/' . $startyear;
										$has_start_time = get_post_meta($post->ID, '_start_hour', true);
										if ( $has_start_time ) {
											echo " &#8211; " . $starthour . ':' . $startminute;
										}
									}
									
									$has_end = get_post_meta($post->ID, '_end_month', true);
									if ( $has_start != '100' && $has_end != '100' && $has_start !='' && $has_end != '') {
										// Get end date to display
										$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .''));
										list($endday,$endmonth,$endyear,$endhour,$endminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
										echo " to " .  $endday . '/' . $endmonth . '/' . $endyear;
										$has_end_time = get_post_meta($post->ID, '_end_hour', true);
										if ( $has_end_time ) {
												echo " &#8211; " . $endhour . ':' . $endminute;
										}
									}
									if ( $has_start != '100' && $has_start != '') {
										$has_location = get_post_meta($post->ID, '_event_location', true);
										if ( $has_location ) {
											echo ' ' . $has_location . ' ';
										}
										
										if ( $has_start != '100' && $has_start != '' ) {
									?>
										</p>
									<?php }
									}
									?>-->
									
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

				<div class="ad-sense">
					<h5 class="sub-title ad-title">// Advert</h5>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Category side responsive 1 -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-0654331869436657"
					     data-ad-slot="9330762606"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			
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
					
					<div class="g one-half palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-5' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-5' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-half palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-6' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-6' ); ?>
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
								<a class="btn-circle btn--secondary foursquare" href="https://foursquare.com/mcrfinest" target="_blank" title="Follow on Foursquare"><span aria-hidden="true" class="icon-foursquare"></span><span class="accessibility">Foursquare</span></a>
							</li>
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