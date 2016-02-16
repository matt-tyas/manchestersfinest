<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article class="f-article media" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			
			<?php if ( is_single() ) : ?>	

			<!--<?php
				$has_start = get_post_meta($post->ID, '_start_month', true);
				if ( $has_start != '100' ) {
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
				if ( $has_start != '100' && $has_end != '100') {
					// Get end date to display
					$str = date('d m Y H i', strtotime('' . get_post_meta($post->ID, '_end_eventtimestamp', true) .''));
					list($endday,$endmonth,$endyear,$endhour,$endminute) = preg_split('/[ ,]/',$str,false,PREG_SPLIT_NO_EMPTY);
					echo " to " .  $endday . '/' . $endmonth . '/' . $endyear;
					$has_end_time = get_post_meta($post->ID, '_end_hour', true);
					if ( $has_end_time ) {
							echo " &#8211; " . $endhour . ':' . $endminute;
					}
				}
				if ( $has_start != '100' ) {
					$has_location = get_post_meta($post->ID, '_event_location', true);
					if ( $has_location ) {
						echo " " . $has_location . "";
					}
				?>
					</p>
				<?php
				}
				?>-->
			<div class="article-meta">
		    	<time datetime="2012-02-17"><?php the_date(); ?></time>
		    	<div class="author">By <?php the_author_posts_link(); ?></div>
			</div>
			
			<h1><?php the_title(); ?></h1>
			
			<?php else : ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="media__img search--img">
			<?php
				$post_thumbnail_id = get_post_thumbnail_id( );
				$imagesized = wp_get_attachment_image_src( $post_thumbnail_id, 'big-post-thumb');
				if ($imagesized[1] == 224) {
					the_post_thumbnail('big-post-thumb');
				} else {
					the_post_thumbnail('cat-post-thumb');
				}
			?>
		</div>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<a class="read-more" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">Read more &hellip;</a>
			<!--<span>
			<a href="<?php // echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php // printf( __( 'By %s', 'twentytwelve' ), get_the_author() ); ?></a>
			</span>-->
		</div><!-- .entry-summary -->
		
		<?php else : ?>
		<div id="article-content" class="entry-content">
			
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>

			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>			
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php the_category(); ?>
			<?php // twentytwelve_entry_meta(); ?>
			<?php // edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info media">
					<div class="author-avatar media__img">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 120 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( '%s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all articles by %s', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
