<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samat
 */

get_header();
get_template_part( 'template-parts/header', 'archive' ); ?>

	<div id="primary" class="container">
		<div class="row">
			<main id="main" class="col-xs-12 col-md-8">
			<?php
			if ( have_posts() ) :

				echo '<div class="row">';
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/loop', get_post_type() );
				
			endwhile;

				samat_page_navi();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			
			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php

get_footer();
