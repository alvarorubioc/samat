<?php

/*** Template Name: Homepage */

get_header(); ?>

<!-- <?php get_template_part( 'template-parts/header', 'home' ); ?> -->

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

<?php // get_template_part( 'template-parts/section', 'casosexito' ); ?>


<?php
get_footer();
