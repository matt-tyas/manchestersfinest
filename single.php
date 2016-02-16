<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="site-content">
		<div class="gw" role="main">
		
			<div class="g one-quarter palm-one-whole responsive-flip readability-left">
				
				<?php if ( is_active_sidebar( 'inner-page-optional' ) ) : ?>
				<?php dynamic_sidebar( 'inner-page-optional' ); ?>
				<?php endif; ?>
				
				<!-- Connect CTAs -->
				<aside class="connect">
					<h5 class="sub-title">// Newsletter</h5>
					<?php echo do_shortcode( '[contact-form-7 id="10674" title="Simple Newsletter"]' ); ?>
					<h5 class="sub-title">// Say hello&hellip;</h5>
					<ul class="nav nav--banner social">
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

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="g one-half palm-one-whole">
			
				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php comments_template( '', true ); ?>

			</div>

			<?php endwhile; // end of the loop. ?>
			
			<div class="g one-quarter palm-one-whole readability-right">
			
				<aside class="social-links">
					<h5 class="sub-title">// Share this on&hellip;</h5>
					<ul class="nav nav--banner">
						<li>
						<a title="<?php the_title(); ?>" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>source=tweetbutton&amp;text=<?php the_title(); ?> <?php the_permalink(); ?>&amp;url=<?php the_permalink(); ?>&amp;<?php the_permalink(); ?>via=Manchesters_Finest" target="_blank" rel="nofollow" class="btn btn--twitter">Twitter</a>
						</li>
						<li><a title="<?php the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="nofollow" class="btn btn--facebook">Facebook</a></li>
						<li><a class="btn btn--finest" href="mailto:?subject=Article from Manchester's Finest - <?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" title="Send to a friend">Email</a></li>
					</ul>
				</aside>

				<div class="ad-sense">
					<h5 class="sub-title ad-title">// Advert</h5>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Article Custom size 2 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:248px;height:248px"
					     data-ad-client="ca-pub-0654331869436657"
					     data-ad-slot="1388693406"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			
				<?php if (function_exists('related_posts') ) : related_posts(); endif; ?>
				
			</div>
			
			<div class="g one-quarter palm-one-whole">
			
				<div class="gw">
					<div class="g one-whole palm-one-whole mob-one-whole">
						<h5 class="sub-title ad-title">// Adverts</h5>
					</div>
					<div class="g one-whole palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-1' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-1' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-whole palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-2' ) ) : ?>
						<?php dynamic_sidebar( 'category-page-advert-2' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-whole palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-3' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-3' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-whole palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-4' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-4' ); ?>
				        <?php endif; ?>
					</div>
					
					<div class="g one-whole palm-one-quarter mob-one-half">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-5' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-5' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-whole palm-one-quarter mob-one-half">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-6' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-6' ); ?>
				        <?php endif; ?>
					</div>
					
				</div>
				
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>