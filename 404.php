<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package samat
 */

get_header();
?>
<header id="hero" class="header-archives scene_element scene_element--bottom-top">
	<div class="container">
		
		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
	 			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			</div>		
        </div>
        
        <div class="row">
			<div class="col-xs-12 col-md-6">
				<p></p><h1 class="page-title"><?php esc_html_e( 'Oops! Un error 404 lo tiene cualquiera ;)', 'samat' ); ?></h1>
			</div>
		</div>

	</div>	
</header>	


	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<section class="error-404 not-found col-xs-12">
				<header class="page-heade mt-4">
					<h2 class="page-title"><?php esc_html_e( 'Lo sentimos, la página que estás buscando no existe', 'samat' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Parece que no podemos encontrar lo que buscas. Prueba con otra búsqueda diferente o contáctanos', 'samat' ); ?></p>

					<?php
					get_search_form();

					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>

<?php
get_footer();
