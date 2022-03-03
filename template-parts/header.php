<header id="hero">
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
			<div class="col-xs-12 col-md-6">
				<!--titulo p�gina  -->
				<h1><?php single_post_title();?></h1>
				<p class="mb-4"><?php echo get_the_excerpt() ;?></p>
				<div class="wp-block-button">
					<?php 
						$link = get_field('page_button');
						$evento = get_field('onclick_button');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_blank';
						?>
						<a class="wp-block-button__link has-secondary-background-color has-background" onclick="<?php the_field('onclick_button'); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<?php the_post_thumbnail('img-header'); ?>
			</div>	
		</div>

	</div>
</header>
