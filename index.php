<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="content" role="main">
		
		<div class="gw row">
		
			<div class="g two-thirds palm-one-whole">
				<?php echo get_new_royalslider(1); ?>
			</div>
			
			<div class="g one-third palm-one-whole">
			
				<div class="gw">
				
					<div class="g one-whole palm-one-whole">

							<div class="gw">
							
								<div class="g one-half palm-one-quarter mob-one-half mob-fix">

									<div class="newscta">
										<!-- Begin MailChimp Signup Form -->
											<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

											<style type="text/css">
											  #mce-responses { position: fixed; top: 0px; left: 0; width: 100%; }
												#mc_embed_signup div.response { width: 100%; text-align: center;  padding: 1.5em 1em 1em 1em; }
												#mc_embed_signup #mce-success-response { background: #529214; color: #fff;}
												#mc_embed_signup #mce-error-response { background: #CE0000; color: #fff;}
												#mc_embed_signup div#mce-responses { z-index:9999; }
												#mc_embed_signup #mc-embedded-subscribe-form input.mce_inline_error { border: 1px solid #e85c41; }
												#mc_embed_signup .mc-field-group input { opacity: 0.8;}
												#mc_embed_signup .button { background: #886808; }
												#mc_embed_signup .button:hover { background: #b88d0b; }
												#mc_embed_signup .mc-field-group { min-height:40px; }
												#mc_embed_signup form {padding: 0;}
												#mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error { position: absolute; top: -28px;}
											</style>
											
											<div id="mc_embed_signup">
											<form action="//ManchestersFinest.us2.list-manage.com/subscribe/post?u=80f2869a6d1828e3a9de6548f&amp;id=3b2131b21e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
											    <div id="mc_embed_signup_scroll">
												<h5 id="fit-brand" class="brandface-title">NEWSLETTER</h5>

											<div class="mc-field-group">
												<label for="mce-EMAIL" class="accessibility">Email Address
											</label>
												<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter email">
											</div>
												<div id="mce-responses" class="clear">
													<div class="response" id="mce-error-response" style="display:none"></div>
													<div class="response" id="mce-success-response" style="display:none"></div>
												</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
											    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_80f2869a6d1828e3a9de6548f_3b2131b21e" tabindex="-1" value=""></div>
											    <div class="clear"><input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
											    </div>
											</form>
											</div>
											<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
											<!--End mc_embed_signup-->


										<!-- <h5 id="fit-brand" class="brandface-title">NEWSLETTER</h5>
										<div class="newsletter">
											<?php // echo do_shortcode( '[contact-form-7 id="10674" title="Simple Newsletter"]' ); ?>
										</div> -->
									</div>
								</div>
								<div class="g one-half palm-one-quarter mob-one-half">
									<?php 
										if ( is_active_sidebar( 'homepage-advert-1' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-advert-1' ); ?>
									<?php endif; ?>
								</div>
								<div class="g one-half palm-one-quarter mob-one-half">
									<?php 
										if ( is_active_sidebar( 'twitter-stream' ) ) : ?>
										<?php dynamic_sidebar( 'twitter-stream' ); ?>
									<?php endif; ?>
								</div>
								
								<div class="g one-half palm-one-quarter mob-one-half mob-fix">
									<?php 
										if ( is_active_sidebar( 'homepage-advert-2' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-advert-2' ); ?>
									<?php endif; ?>
								</div>  
								   
						    </div><!-- gw -->
			  		
			  		</div>

			    </div>
			  
			</div>
			
		</div><!-- End of first row -->
		
		<div class="gw row">
		
			<div class="g two-thirds palm-one-whole">
			
				<div class="gw row">
					
					<div class="g one-whole">
					
						<div class="naviagtion-cta-row cf">
						
							<ul class="gw row">
								
								<li class="g one-quarter mob-one-half">
									<?php 
									    if ( is_active_sidebar( 'homepage-cta-1' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-cta-1' ); ?>
									<?php endif; ?>
								</li>		
									
								<li class="g one-quarter mob-one-half">
								    <?php 
									    if ( is_active_sidebar( 'homepage-cta-2' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-cta-2' ); ?>
									<?php endif; ?>
								</li>
										
								<li class="g one-quarter mob-one-half">
									<?php 
									    if ( is_active_sidebar( 'homepage-cta-3' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-cta-3' ); ?>
									<?php endif; ?>
								</li>
									
								<li class="g one-quarter mob-one-half">
									<?php 
									    if ( is_active_sidebar( 'homepage-cta-4' ) ) : ?>
										<?php dynamic_sidebar( 'homepage-cta-4' ); ?>
									<?php endif; ?>
								</li>
							
							</ul>
						
						</div>
					
					</div>
				
				</div>
				
			</div>
			
			<div class="g one-third palm-one-whole">
			
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
			
		</div>
		
		<div class="gw row">
			
			<div class="g two-thirds palm-one-whole">
			
			<div id="sort-container">
				<!-- Featured Articles -->
				<?php $do_not_duplicate = array();  ?>
			
				<!-- Normal Articles Loop -->
			   <?php if (have_posts()) : while (have_posts()) : the_post(); 
				   	 if (in_array($post->ID, $do_not_duplicate)) continue; 
			    ?>
				<article <?php post_class('post-tile'); ?>>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
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
				<?php endwhile; endif; ?>
				
				<!--<?php if(in_category(69)) { ?> 
					<span class="author">By <?php the_author(); ?></span>
					<?php } else {?>
					<?php the_excerpt(); ?>
					<?php }?>-->

			</div><!-- End sort-container -->
				
			<!-- END RPL -->
			</div>
			
			
			<div class="g one-third palm-one-whole">	
				
				<!-- Events -->
               <div class="events">
	           <h5 class="sub-title">// Upcoming</h5>
			   <?php
						// http://codex.wordpress.org/Function_Reference/current_time
						$current_time = current_time('mysql');
						list( $today_year, $today_month, $today_day, $hour, $minute, $second ) = split( '([^0-9])', $current_time );
						
						// Set the hour and minute to midnight so events today that started between midnight and now are still pulled in
						$midnight_today = $today_year . $today_month . $today_day . '0000'; 
						
						$current_endtimestamp = $today_year . $today_month . $today_day . $hour . $minute; 
						
						// To pull in events that start later than midnight today
						$meta_query = array(
						  'relation'=>'AND',
						   array(
						       'key' => '_start_eventtimestamp',
						       'value' => $midnight_today,
						       'compare' => '>'
						   )
						);
						
						/* To pull in events that end later than now - beta, 
						you may not want this and/or it may not work properly which is why I've not done a pull request yet */
						$meta_query_two = array(
						   'relation'=>'AND',
						   array(
						       'key' => '_end_eventtimestamp',
						       'value' => $current_endtimestamp,
						       'compare' => '>'
						   ),
						   array(
						      'key' => '_start_eventtimestamp',
						       'value' => $midnight_today,
						       'compare' => '<'
						       )
						);
						
						// Do first query
						$args = array(
						   'post_type' => 'post',
						   'meta_key' => '_start_eventtimestamp',
						   'orderby'=> 'meta_value_num',
						   'order' => 'ASC',
						   'meta_query' => $meta_query,
						   'posts_per_page' => 6
						   );
						
						$events = new WP_Query( $args );
						
						// Do second query - beta
						$args = array(
						   'post_type' => 'post',
						   'meta_key' => '_start_eventtimestamp',
						   'orderby'=> 'meta_value_num',
						   'order' => 'ASC',
						   'meta_query' => $meta_query_two,
						   'posts_per_page' => 6
						   );
						$events_end = new WP_Query( $args );
						
						// Merge posts into new object, removing duplicates (beta)
						// This will put events that [started before today and end later than now] first
						$merged = new WP_Query();
						$merged->posts =  array_unique(array_merge((array)$events_end->posts, (array)$events->posts), SORT_REGULAR);
						$merged->post_count = count( $merged->posts );
						//print_r($merged);
						$events = $merged;
						
						if ( $events->have_posts() ) :
						
						while ( $events->have_posts() ) : $events->the_post();
						// Single event
						
						// Start 
						// Get start date to display
						$str = date('D d M H i', strtotime('' . get_post_meta($post->ID, '_start_eventtimestamp', true) .''));
						list($startweekday,$startday,$startmonth,$starthour,$startminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
						
						// Get start time for calculation
						$calc_start = strtotime('' . get_post_meta($post->ID, '_start_eventtimestamp', true) .'');
						
						// Setting month to "None" gives it a value of 100 which we get separately
						$has_start = get_post_meta($post->ID, '_start_month', true);
						   
						// End 
						// Get end date to display
						$str = date('D d M', strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .''));
						list($endweekday,$endday,$endmonth) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
						
						// Get end date for calculation
						$calc_end = strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .'');
						
						// Setting month to "None" gives it a value of 100 which we get separately
						$has_ending = get_post_meta($post->ID, '_end_month', true);
						 
						// Don't display the event at all if
						    // (Start AND End are set to none) OR
						    // (End is NOT none AND End before midnight today) OR
						    // (End is none AND Start before midnight today)
						 
						// This is a terrible way to do it but at least it's quite easy to see what's going on    
						if (!( 
						      ($has_ending == '100' && $has_start == '100') ||
						      ($has_ending != '100' && $calc_end < strtotime('midnight')) ||
						      ($has_ending == '100' && $calc_start < strtotime('midnight'))
						      )) {
						    
						    echo '<article class="media event">';
						    echo '<a class="event-link" href="' . get_permalink() . '">';
						    ?>
						        <div class="event-date multi-date">
						    <?php
						       if ( $has_start !== '100' ) {
						    ?>  
						            <div class="start-date">
						                <div class="event-weekday">
						                    <?php echo $startweekday; ?>
						                </div>
						                <div class="event-day">
						                    <?php echo $startday; ?>
						                </div>
						                <div class="event-month">
						                    <?php echo $startmonth; ?>
						                </div>
						            </div>
						    <?php
						       }
						
						        if ( $has_ending !== '100' ) {
						    ?>
						            <!--<span class="date-separator">-</span>-->
						            <div class="end-date">
						                <div class="event-weekday">
						                <?php echo $endweekday; ?>
						                </div>
						                <div class="event-day">
						                <?php echo $endday; ?>
						                </div>
						                <div class="event-month">
						                <?php echo $endmonth; ?>
						                </div>
						            </div>
						    <?php        
						        }
						    ?>
						       </div>
						    <?php
						       // Title
						       echo '<h6>' . get_the_title() . '</h6>';
						       // Time and location
						       echo '<span class="time-location">';
						       echo $starthour . ':' . $startminute;
						       echo ' ' . get_post_meta($post->ID, '_event_location', true) . '';
						       echo '</span>';
						       echo '</a>';
						       echo '</article>';
						}
						   endwhile;
						endif; ?>
	           </div><!-- .events -->



	          <div class="ad-sense">
			        <h5 class="sub-title ad-title">// Advert</h5>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Home responsive 1 -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-0654331869436657"
							     data-ad-slot="6377296206"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>


	           
	           <div class="gw">
					<div class="g one-half palm-one-half mob-one-half">
						<?php 
							 if ( is_active_sidebar( 'homepage-optional-1' ) ) : ?>
						     <?php dynamic_sidebar( 'homepage-optional-1' ); ?>
						<?php endif; ?>
					</div>	
					<div class="g one-half palm-one-half mob-one-half">
						<h5 class="sub-title ad-title">// Adverts</h5>
						<div class="gw">
							<div class="g one-whole palm-one-half mob-one-whole">
							<?php 
							    if ( is_active_sidebar( 'homepage-advert-3' ) ) : ?>
								<?php dynamic_sidebar( 'homepage-advert-3' ); ?>
							<?php endif; ?>	
							</div>
							<div class="g one-whole palm-one-half mob-one-whole">
							<?php 
							    if ( is_active_sidebar( 'homepage-advert-4' ) ) : ?>
								<?php dynamic_sidebar( 'homepage-advert-4' ); ?>
							<?php endif; ?>
							</div>
							<div class="g one-whole palm-one-half mob-one-whole">
							<?php 
								 if ( is_active_sidebar( 'homepage-optional-2' ) ) : ?>
								 <?php dynamic_sidebar( 'homepage-optional-2' ); ?>
							<?php endif; ?>				
                            </div>
                            <div class="g one-whole palm-one-half mob-one-whole">
							<?php 
								 if ( is_active_sidebar( 'homepage-optional-3' ) ) : ?>
								 <?php dynamic_sidebar( 'homepage-optional-3' ); ?>
							<?php endif; ?>				
                            </div>
						</div>
					</div>
					
					<!--<div class="g one-half palm-one-quarter mob-one-half">
					 	
					</div>-->
				</div>

				<div class="ad-sense">
	        <h5 class="sub-title ad-title">// Advert</h5>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Home responsive 2 -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-0654331869436657"
					     data-ad-slot="7854029405"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				

						
			<div class="columnists">
				<!-- Columists -->
				<!-- <h5 class="sub-title">// Columnist Archives</h5>
					<?php query_posts('orderby=rand&showposts=4'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<article class="columnist media">
					<a href="<?php the_permalink() ?>" rel="bookmark">
					<div class="small-thumb media__img">
					    <?php the_post_thumbnail(array( 120,120 )); ?>
					</div>
					<span><?php the_author(); ?></span>
					<h6><?php the_title(); ?></h6>
					</a>
					</article>
					<?php endwhile;?>
			   </div> -->


			  <div class="ad-sense">
					<h5 class="sub-title ad-title">// Advert</h5>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Home responsive 3 -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-0654331869436657"
					     data-ad-slot="3284229005"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>

			   	
			</div>	

			

			
		</div><!-- End of second row -->

	</div><!-- #content -->

<?php get_footer(); ?>