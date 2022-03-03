<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="samat-card">
		<div class="samat-card-image">
			<?php the_post_thumbnail('img-card'); ?>
		</div>
		
		<div class="samat-card-content">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p><?php echo get_the_excerpt() ;?></p>
		</div>
	</div><!-- /card -->
</article>	
