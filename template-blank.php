<?php
/** Template Name: Blank Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samat
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
		
	<!-- Icons & Favicons -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-touch.png" rel="apple-touch-icon" />
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->	    

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name="theme-color" content="#e6ebf1">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <main id="main" class="container">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php wp_footer(); ?>

</body>
</html>