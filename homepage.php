<?php

/*** Template Name: Homepage */

get_header(); ?>

<?php get_template_part( 'template-parts/header', 'home' ); ?>

<main id="main" class="container">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'casosexito' ); ?>


<section id="homepage-faqs">
	<main id="main" class="site-main container">
		<div class="row">
			<div class="col-xs-12 col-md-6 mb-2">
				<input type="checkbox" class="read-more-state" id="homepage-faqs-left" />
				<p class="text-h2"><?php _e( '¿Qué somos SAMAT?', 'samat' ); ?></p>
				<div class="read-more-wrap">
					<?php the_field ('home_faqs_left');?>
					<div class="read-more-target">
					 	<?php the_field ('home_faqs_left_more');?>
					</div>
				</div>
				<?php if( get_field('home_faqs_left_more') ): ?>
						<label for="homepage-faqs-left" class="read-more-trigger btn"></label>
				<?php endif; ?>
			</div>

			<div class="col-xs-12 col-md-6">
				<input type="checkbox" class="read-more-state" id="homepage-faqs-rigth" />
				<p class="text-h2"><?php _e( '¿Qué NO somos SAMAT?', 'samat' ); ?></p>
				<div class="read-more-wrap">
					<?php the_field ('home_faqs_rigth');?>
					<div class="read-more-target">
					 	<?php the_field ('home_faqs_rigth_more');?>
					</div>
				</div>
				<?php if( get_field('home_faqs_rigth_more') ): ?>
					<label for="homepage-faqs-rigth" class="read-more-trigger btn"></label>
				<?php endif; ?>
			</div>
		</div>

	</main><!-- #main -->
</section>



<?php get_template_part( 'template-parts/section', 'blog' ); ?>


<?php
get_footer();
