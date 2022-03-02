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

get_template_part( 'template-parts/header', 'page' ); ?>
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

<div id="primary" class="container">
	<div class="row">
		<main id="main" class="col-xs-12 col-md-8">

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

		<aside class="col-xs-12 col-md-4">
			<div class="samat-card">
				<div class="samat-card-header">
					<?php
						$image = get_field('software_profile');
						$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					<div class="name_software">
						<h4><?php the_field('software_name'); ?></h4>
						<div><?php the_field('software_cargo'); ?></div>
					</div>
				</div>

				<div class="samat-card-content">
					<?php if( get_field('software_testimonio') ): ?>
						<blockquote><?php the_field('software_testimonio'); ?></blockquote>
					<?php endif; ?>
				</div>
			</div>

			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact')) : ?>
	        <?php endif; ?>
		</aside>

	</div>
</div><!-- #primary -->

<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php endif;?>
<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>  

<?php

get_footer();
