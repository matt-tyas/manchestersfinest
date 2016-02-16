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

			<?php if ( have_posts() ) : ?>
				
				<?php if ( $paged < 2 ) : ?>
				<!-- START PAGE ONE -->
				
				<?php 
				/*$cat_args = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'child_of' => 0
				);
				
				$categories =   get_categories($cat_args); 
				
				foreach($categories as $category) { 
				    echo '<dl>';
				    echo '<dt> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></dt>';
					
				     $post_args = array(
				      'numberposts' => 5,
				      'category' => $category->term_id 
				    );
				
				    $posts = get_posts($post_args);
					
					foreach($posts as $post) {
					?>
						<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php 
					} 
					echo '<dd class="view-all"> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>View all posts in ' . $category->name.'</a></dd>';
					echo '</dl>';
				} */
				?>

				<?php if(is_category('articles')) { ?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
					<div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'articles', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('arts')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'arts', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
				
				<?php } elseif(is_category('galleries')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'galleries', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('exhibitions')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'exhibitions', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('theatre')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'theatre', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('film-reviews')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'film-reviews', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('comedy')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'comedy', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('charity')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'charity', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('drinking-in-manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'drinking-in-manchester', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
					<?php } elseif(is_category('pubs-in-manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'pubs-in-manchester', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
					<?php } elseif(is_category('bars')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'bars', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
				    
				<?php } elseif(is_category('eating-in-manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'eating-in-manchester', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('restaurants')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>    
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'restaurants', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('cafes-in-manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'cafes-in-manchester', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('delis')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'delis', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(is_category('takeaways-in-manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'takeaways-in-manchester', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
				    
				<?php } elseif(is_category('featured')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'featured', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
				    			    
				<?php } elseif(in_category('music')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'music', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(in_category('gigs')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'gigs', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(in_category('bands')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'bands', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(in_category('nights')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'nights', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(in_category('venues')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'venues', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
					
				<?php } elseif(in_category('manchester')) {?>
				    <h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'comedy', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
 			    
				
					
				
				    			    
				<?php } else {?>
					<h2 class="page-title"><?php single_cat_title(); ?></h2>

									
				<?php }?>
				
				<?php if ( have_posts() ) : ?>




				<!-- New go -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<!-- integrate slider -->
			
			<h2 class="page-title"><?php single_cat_title(); ?></h2>
				    <div class="flexslider">
						<ul class="slides">
							<?php $my_query = new WP_Query(array(
								'category_name' => 'comedy', 
								'posts_per_page' =>6, 
								'post__not_in' => $do_not_duplicate
							));
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate[] = $post->ID; ?>
								<li  class="carousel-article">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<article>
										<?php the_post_thumbnail(); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<?php the_category(); ?>
										</div>
									</article>
								</a>
								</li>
							<?php endwhile;?>
						</ul>
					</div>
			
			
			
			
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>
				
				
				<!-- END PAGE 1 -->
				
				
				
				<?php else : ?>
				<p>this on all other pages</p>
				
				<?php endif; ?>
				
			    <?php // if ( category_description() ) : // Show an optional category description ?>
				<!--<div class="archive-meta"><?php // echo category_description(); ?></div>-->
			    <?php // endif; ?>

			<?php
			/* Start the Loop */
		    // while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
		    //	get_template_part( 'content', get_post_format() );

		    //	endwhile; 

		    //	 twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
		<?php wp_pagenavi(); ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>