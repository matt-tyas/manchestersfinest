<!-- Random Posts loop -->
				
				<!-- Add random class to posts to style them -->
			<?php
				function random($max){
				$random = rand(1, $max);
				$Class = "post_style_".$random;
				return $Class;
				}
				/* Usage <?php echo random(3); ?> */
			?>
				
			<!-- Start the Loop -->
			<?php // query_posts('posts_per_page=10'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $articleClass = null; ?>
			 			
			<!-- Give unique style to each category -->
			<?php if(in_category(69)) { ?> 
	
				<article class="post articles">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Articles</h4>-->
			    <?php // the_post_thumbnail( 'cat-post-thumb'); ?>
			    <a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">By <?php the_author(); ?></a>
				
			<?php } elseif(in_category(27)) {?>
			
				<article class="post arts <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Arts</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(56)) {?>
			
				<article class="post charity <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Charity</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> 
			    
			<?php } elseif(in_category(15)) {?>
			
				<article class="post drinking <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
				<!--<h4>Drinking</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(20)) {?>
			
				<article class="post eating <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Eating</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(37)) {?>
			
				<article class="post northern-quarter">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Northern Quarter</h4>-->

			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(8)) {?>
			
				<article class="post areas <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Areas</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(7)) {?>
			
				<article class="post music <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Music</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } elseif(in_category(10)) {?>
			
				<article class="post lifestyle <?php $articleClass = random(3); echo $articleClass;?>">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>Lifestyle</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></h3></h3>
			    
			<?php } elseif(in_category(129)) {?>
			
				<article class="post people">
				<?php the_post_thumbnail( 'cat-post-thumb'); ?>
			    <!--<h4>People</h4>-->
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    
			<?php } else {?>
			
			    <article class="post misc <?php $articleClass = random(3); echo $articleClass;?>">
			    <?php the_post_thumbnail( 'cat-post-thumb'); ?>
				<!--<h4>Misc</h4>-->
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

			<?php }?>
			
			
			
			<!-- Different style of image for each category -->
			<?php if($articleClass == 'post_style_1') { ?>
			<!-- Get the time -->
			<!--<time datetime="<?php echo the_time('j-m-Y'); ?>" pubdate>
				<?php// echo ''.get_the_time('j').' '.''.get_the_time('M').' '.get_the_time('Y').''; ?>
			</time>-->
			
			
			<?php } elseif($articleClass == 'post_style_2') { ?>
			<!-- Get the time -->
			<!--<time datetime="<?php echo the_time('j-m-Y'); ?>" pubdate>
				<?php// echo ''.get_the_time('j').' '.''.get_the_time('M').' '.get_the_time('Y').''; ?>
			</time>-->
			
			
			<?php } elseif($articleClass == 'post_style_3') { ?>
			<!-- Get the time -->
			<!--<time datetime="<?php echo the_time('j-m-Y'); ?>" pubdate>
				<?php // echo ''.get_the_time('j').' '.''.get_the_time('M').' '.get_the_time('Y').''; ?>
			</time>-->
			
			<?php } else {?>
			
			<?php }?>
			
			<!-- Different style of image for each category -->
			
			<?php if($articleClass == 'post_style_1') { ?>
			<?php the_excerpt(); ?>
			
			<?php } elseif($articleClass == 'post_style_2') { ?>
			<?php the_excerpt(); ?>
			
			<?php } elseif($articleClass == 'post_style_3') { ?>
			
			<?php } elseif(in_category(69)) { ?> 
			
			<?php } else {?>
				<?php the_excerpt(); ?>
			<?php }?>
			
			<!-- Show Child Categories or not -->
			
			<?php if(in_category(69)) { ?>
			
			<?php } else {?>
				
			<?php }?>
	
			
			
			</article> <!-- close article -->
			
			
			<?php endwhile; else: ?>
			
			<p>Sorry, no posts matched your criteria.</p>
			
			<?php endif; ?>
