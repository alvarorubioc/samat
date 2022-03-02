<header id="hero" class="header-archives">
	<div class="container scene_element scene_element--top-bottom">

		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
				<?php if (function_exists('rank_math_the_breadcrumbs')) {
				  echo '<div id="breadcrumbs" class="bg-primary">';
				  rank_math_the_breadcrumbs();
				  echo '</div>';
				}?>
			</div>
    </div>

    <div class="row">

			<?php if ( is_archive() ) : ?>
				<div class="col-xs-12 col-md-8">
					<h1 class="page-title"><?php the_archive_title();?></h1>
			        <?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
			    </div>

			<?php elseif ( is_home() ) : ?>
				<div class="col-xs-12 col-md-8">
					<h1 class="page-title"><?php single_post_title();?></h1>
					<p><?php echo get_the_excerpt('25') ;?></p>
			    </div>

			<?php elseif ( is_search() ) : ?>
				<div class="col-xs-12 col-md-8">
					<h1><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'samat' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
					<p><?php echo get_the_excerpt('25') ;?></p>
			    </div>

			<?php else : ?>
				<div class="col-xs-12 col-md-8">
					<h1 class="page-title"><?php single_post_title();?></h1>
					<p><?php echo get_the_excerpt() ;?></p>
			    </div>

			<?php endif; ?>

		</div>

	</div>
</header>
