<?php
/**
 * The template for displaying all pages
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

get_header(); ?>
<!-- Marcado  -->
<script type="application/ld+json">
   {
	   "@context" : "http://schema.org",
	   "@type" : "Service",
	   "name" : "Expertos en Software para Automatizar Dise&ntilde;os en Ingenieria: <?php single_post_title();?>",
	   "description" : "<?php echo get_the_excerpt() ;?>",
	   "brand" : {
	   "@type" : "Brand",
	   "name":"Ingenieria SAMAT Espa&ntilde;a",
	   "logo" : "https://ingenieriasamat.es/wp-content/uploads/2019/02/logo.svg"
	   }
   }
</script>  <!-- FIN Marcado  --> 

<?php get_template_part( 'template-parts/header', get_post_type() );?>

<div id="primary" class="container">
	<div class="row">
		<main id="main" class="col-xs-12">

		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

	</div>
</div><!-- #primary -->

<?php
get_template_part( 'template-parts/section', 'blog' );
get_footer();
