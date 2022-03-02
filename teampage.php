<?php
/** Template Name: Quienes Somos
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

<header id="hero">
	<div class="container scene_element scene_element--top-bottom">
		
		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
	 			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			</div>		
        </div>
        
        <div class="row">
			<div class="col-xs-12 col-md-5">
				<h1><?php single_post_title();?></h1>
				<p><?php echo get_the_excerpt() ;?></p>
			</div>
			<div class="col-xs-12 col-md-7">
				<?php the_post_thumbnail('img-header'); ?>
			</div>	
		</div>

	</div>	
</header>

	<main id="main" class="container">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );
		get_template_part( 'template-parts/section', 'team' );

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>
<?php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php endif;?>

<?php
get_footer();
