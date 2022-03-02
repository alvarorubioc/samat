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
          "name" : "Servicios de Ingenieria Mecanica: <?php single_post_title();?>",
          "description" : "<?php the_field('page_intro'); ?>",
          "brand" : {
            "@type" : "Brand",
            "name":"Ingenieria SAMAT Espa&ntilde;a",
            "logo" : "https://ingenieriasamat.es/wp-content/uploads/2019/02/logo.svg"
          }
        }
        </script>  <!-- FIN Marcado  -->  
<section id="subheader" class="container">
	<div class="row">
		<div class="col-xs-12 col-md-5">
			<!-- subtitular -->
        	<h2><?php the_field('page_subtitle'); ?></h2>
			<div class="mt-2 mb-2"><?php 
					$link = get_field('page_button');
					$evento = get_field('onclick_button');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_blank';
						?>
						<a class="btn" onclick="<?php the_field('onclick_button'); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>

		<div class="col-xs-12 col-md-7 page-intro">
    		<!-- descripcion corta -->
			<?php the_field('page_intro'); ?>
		</div>
	</div>
</section>

<?php

global $post;     // if outside the loop

if ( is_single() && $post->post_parent ) { ?>
	<div id="primary" class="container">
		<main id="main">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<?php 
						$image = get_field('services_image_reasons');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
				</div>
				<div class="col-xs-12 col-md-6 five-reasons"> 
					<?php the_field('services_text_reasons'); ?>
				</div>
			</div>

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

	<?php get_template_part( 'template-parts/related', 'casosexito' ); ?>

		<?php if( get_field('services_advantage') ): ?>
			<section id="" class="container mt-8">
				<div class="row">
					<div class="col-xs-12 col-md-4">
							<div class="samat-card box-review">
								<div class="samat-card-content">
									<?php the_field('services_advantage'); ?>
								</div>
							</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="samat-card box-review">
							<div class="samat-card-content">
								<?php the_field('services_disadvantage'); ?>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 mt-2">
						<?php the_field('services_advantage_text'); ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

   


		<?php get_template_part( 'template-parts/related', 'sectors' ); ?>    
		

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

   
<?//php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?//php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?//php get_template_part( 'template-parts/section', 'blog' ); ?>
<?//php endif;?>
<div>&nbsp;</div>
<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>  

<?php

get_footer();
