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
				<p><?php echo get_the_excerpt() ;?></p>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<?php the_post_thumbnail('img-header'); ?>
			</div>
			
		</div>

	</div>
</header>
