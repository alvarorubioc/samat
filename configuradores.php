<?php
/** Template Name: Configuradores
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samat
 */

get_header();

get_template_part( 'template-parts/header', 'page' ); ?>

	<main id="main" class="container">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );
		get_template_part( 'template-parts/section', 'configurador' );

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>

<?php
get_footer();