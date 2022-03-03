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

get_header();
?>

<!-- Marcado  -->
<script type="application/ld+json">
	{
		"@context" : "http://schema.org",
		"@type" : "Service",
		"name" : "Servicios de Ingenieria Mecanica: <?php single_post_title();?>",
		"description" : "<?php the_field('page_intro'); ?>",
		"brand" : {
		"@type" : "Brand",
		"name":"Ingenieria SAMAT Espa&ntilde;a",
		"logo" : "https://ingenieriasamat.es/wp-content/uploads/2019/02/logo.svg"
		}
	}
</script>
<!-- FIN Marcado  -->  

<?php get_template_part( 'template-parts/header', get_post_type() );?>

	<div id="primary" class="container">
		<main id="main">
			<div class="row">
				<div class="col-xs-12 mt-4">

					<?php
						while ( have_posts() ) :
							the_post();

							the_content();

						endwhile; // End of the loop.
					?>

				</div>
			</div>
		</main><!-- #main -->
	</div>

<?php get_template_part( 'template-parts/section', 'blog' ); ?>  

<?php
get_footer();
