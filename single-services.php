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

<?php

get_template_part( 'template-parts/header', 'page' );

global $post;     // if outside the loop

if ( is_single() && $post->post_parent ) { ?>
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
		

<?php } else { ?>
	<div id="primary" class="container">
		<div class="row mt-4">
			<div class="col-xs-12"><?php the_title( '<h2>', '</h2>' ); ?><hr></div>
			<?php
					$args = array(
					'post_type'      => 'services', //write slug of post type
						'posts_per_page' => -1,
						'post_parent'    => $id, //place here id of your parent page
						'order'          => 'ASC',
						'post__not_in' => array($post->ID),
						'orderby'        => 'menu_order',
				);
				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

							get_template_part( 'template-parts/loop', 'card' );
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}
			?>
		</div>
	</div><!-- #primary -->
<?php } ?>

<?php get_template_part( 'template-parts/section', 'blog' ); ?>  

<?php
get_footer();
