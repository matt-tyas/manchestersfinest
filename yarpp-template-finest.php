<aside class="related-post">
<h5 class="sub-title">// More like this&hellip;</h5>
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
	<article role="complementary" class="media">
		<a href="<?php the_permalink() ?>" rel="bookmark">
    	<div class="small-thumb media__img">
			 <?php the_post_thumbnail(array( 120,120 )); ?>
		</div>
		<h6><?php the_title(); ?></h6>
		<?php the_excerpt(); ?>
		</a>
	</article>
	<?php endwhile; ?>
<?php else: ?>
<p class="note">This article is so unique, there is nothing quite like it.</p>
<?php endif; ?>
</aside>