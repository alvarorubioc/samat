<div class="col-xs-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="samat-card card-horizontal">
			<div class="samat-card-image">
				<?php the_post_thumbnail('img-card'); ?>
			</div>

			<div class="samat-card-content">
				<h2 class="text-h4"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<?php
					samat_posted_on();
					?>
				</div><!-- .entry-meta -->
				<?php echo get_the_excerpt() ;?>
			</div>
		</div><!-- /card -->
	</article>
</div>
