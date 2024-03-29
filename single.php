<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package samat
 */

get_header();

get_template_part( 'template-parts/header', 'archive' ); ?>

<div id="primary" class="container">
	<div class="row">
		<main id="main" class="col-xs-12 col-md-8">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
		<?php get_sidebar(); ?>

	</div>	
</div><!-- #primary -->

<?php
get_footer();
