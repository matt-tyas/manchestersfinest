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
		<?php $do_not_duplicate = array(); ?>
		<div class="gw row">
		
			<div class="g one-whole palm-one-whole">
			
						
			<?php 
				 // $my_query = new WP_Query(array('category_name' => 'music, arts, eating, drinking, shopping, Manchester', 'posts_per_page' =>40, 'post__not_in' => $do_not_duplicate));
				//  while ($my_query->have_posts()) : $my_query->the_post();
				//  $do_not_duplicate[] = $post->ID; 
		    ?>
		    
				 <!--   <article class="medium <?php foreach((get_the_category()) as $category ) { echo $category->cat_name . ' ' . ' '; } ?>">
				    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				    <div class="small-thumb media__img">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
					</div>
					Posted in <?php the_category(', ') ?>
					<?php the_excerpt(); ?>
					</article>-->
				
				
				<?php // endwhile; ?>
			 <?php// $do_not_duplicate = array(); ?>
			 <?php 
				//$my_query = new WP_Query(array(
				//			'category_name' => '', 
				//			'posts_per_page' =>40, 
				//			'post__not_in' => $do_not_duplicate
			//	));
						
			//	while ( $my_query->have_posts()) : 
			  //          $my_query->the_post();
				//        $do_not_duplicate[] = $post->ID;
			 ?>

				
				
			 <!-- Start the Loop -->
			 <?php query_posts('posts_per_page=40'); ?>
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 			
			<!-- Give unique class to each category -->
			<?php if(in_category(69)) { ?> 
				<article class="articles">
			    Articles
			<?php } elseif(in_category(27)) {?>
				<article class="arts">
			    Arts
			<?php } elseif(in_category(56)) {?>
				<article class="charity">
			    Charity  
			<?php } elseif(in_category(15)) {?>
				<article class="drinking">
			    Drinking
			<?php } elseif(in_category(20)) {?>
				<article class="eating">
			    Eating
			<?php } elseif(in_category(12)) {?>
				<article class="events">
			    Events
			<?php } elseif(in_category(8)) {?>
				<article class="areas">
			    Areas
			<?php } elseif(in_category(7)) {?>
				<article class="music">
			    Music
			<?php } elseif(in_category(10)) {?>
				<article class="lifestyle">
			    Lifestyle
			<?php } elseif(in_category(129)) {?>
				<article class="people">
			    People
			<?php } else {?>
			     <article class="misc">
				Misc
			<?php }?>
			
			<!-- If an event show the date(s) and time(s) -->
			<?php if(in_category(12)) { ?> 
			<?php 
				$has_date = get_post_meta($post->ID, 'start_date', true);
				$has_ending = get_post_meta($post->ID, 'end_date', true);
					if ( $has_date ) {
						echo ''.get_post_meta($post->ID, 'start_date', true).' ';
					    echo ' '.get_post_meta($post->ID, 'start_time', true).' ';
					}
					if ( $has_ending ) {
					    echo ' &#8211; '.get_post_meta($post->ID, 'end_date', true).' ';
						echo ' '.get_post_meta($post->ID, 'end_time', true).' ';
					}
					else { 
						echo '';
					}
			?>
			<?php } else {?>
			<!-- Shows no date -->
			<?php }?>

			<!-- Give unique title style to each category -->
			<?php if(in_category(69)) { ?> 
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(27)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(56)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>  
			<?php } elseif(in_category(27)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(15)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(20)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(12)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(8)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(7)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } elseif(in_category(10)) {?>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php } else {?>
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<?php }?>
			
			<!-- Get the time -->
			<time datetime="<?php echo the_time('j-m-Y'); ?>" pubdate><?php echo ''.get_the_time('j').' '.''.get_the_time('M').' '.get_the_time('Y').''; ?></time>
			
			<!-- If Article or Review show who it is by -->
			<?php if(in_category(69)) { ?> 
			<span><?php the_author(); ?></span>
			<?php } else {?>
			
			<?php }?>
			
			<!-- Different style of image for each category -->
			<?php if(in_category(69)) { ?> 
			<div class="media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'cat-post-thumb'); ?></a>
			</div>
			<?php } elseif(in_category(27)) {?>
			<div class="media__img">
				 <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,70 )); ?></a>
			</div>
			<?php } elseif(in_category(56)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div> 
			<?php } elseif(in_category(27)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 172,88 )); ?></a>
			</div>
			<?php } elseif(in_category(15)) {?>
			<div class="media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,70 )); ?></a>
			</div>
			<?php } elseif(in_category(20)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div>
			<?php } elseif(in_category(12)) {?>
			<div class="media__img">
		       <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,70 )); ?></a>
			</div>
			<?php } elseif(in_category(8)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div>
			<?php } elseif(in_category(7)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div>
			<?php } elseif(in_category(10)) {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div>
			<?php } else {?>
			<div class="small-thumb media__img">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array( 120,120 )); ?></a>
			</div>
			<?php }?>
			 
			 <?php the_excerpt(); ?>
			 
			 <p class="postmetadata"><?php the_category(' '); ?></p>
			 
			 </article> <!-- closes article -->
			
			
			 <?php endwhile; else: ?>
			
			 <p>Sorry, no posts matched your criteria.</p>
			

			 <?php endif; ?>
			
			
				
			</div>
						
		</div><!-- End of forth row -->
		
	</div><!-- #content -->


<?php get_footer(); ?>