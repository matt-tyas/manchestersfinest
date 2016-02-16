<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="site-content">
			<div class="gw" role="main">
			
				<div class="g two-thirds palm-one-whole">
	
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php // comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
				
				</div>
				
				<div class="g one-third palm-one-whole">
				
				<aside class="social-links">
					<h5 class="sub-title">Share on&hellip;</h5>
					<ul class="nav nav--banner">
						<li><a title="<?php the_title(); ?>" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>source=tweetbutton&amp;text=<?php the_title(); ?> <?php the_permalink(); ?>&amp;url=<?php the_permalink(); ?>&amp;<?php the_permalink(); ?>via=Manchesters_Finest" target="_blank" rel="nofollow" class="btn btn--twitter">Twitter</a></li>
						<li><a title="<?php the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="nofollow" class="btn btn--facebook">Facebook</a></li>
						<li><a class="btn  btn--finest" href="mailto:?subject=Article from Manchester's Finest - <?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" title="Send to a friend">Email</a></li>
					</ul>
				</aside>
				
				</div>
				
				<div class="g one-third palm-one-whole">
			
				<div class="gw">
				
					<div class="g one-half palm-one-whole">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-1' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-1' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-half palm-one-whole">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-2' ) ) : ?>
						<?php dynamic_sidebar( 'category-page-advert-2' ); ?>
						<?php endif; ?>
					</div>
					
					<div class="g one-half palm-one-whole">
						<?php 
						if ( is_active_sidebar( 'category-page-advert-3' ) ) : ?>
				        <?php dynamic_sidebar( 'category-page-advert-3' ); ?>
				        <?php endif; ?>					
				    </div>
					
					<div class="g one-half palm-one-whole">
					 	<?php 
				        if ( is_active_sidebar( 'category-page-advert-4' ) ) : ?>
                        <?php dynamic_sidebar( 'category-page-advert-4' ); ?>
				        <?php endif; ?>
					</div>
					
				</div>
				
			</div>
			
			<div class="g one-third palm-one-whole">
			
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
	
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>