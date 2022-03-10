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

<header id="hero">
	<div class="container scene_element scene_element--top-bottom">
		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
				<?php if (function_exists('rank_math_the_breadcrumbs')) {
				  echo '<div id="breadcrumbs" class="bg-primary">';
				  rank_math_the_breadcrumbs();
				  echo '</div>';
				}?>
			</div>
    </div>
    <div class="row">
			<div class="col-xs-12 col-md-6">
				<h1><?php the_field('success_stories_title', 'options'); ?></h1>
				<?php the_field('success_stories_excerpt', 'options') ;?>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<?php if( get_field('success_img', 'options') ): ?>
					<img src="<?php the_field('success_img', 'options'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>

<section id="subheader" class="container mt-4">
	<div class="row">
		<div class="col-xs-12 col-md-5">
				<h2><?php the_field('success_stories_subtitle', 'options'); ?></h2>
			</div>

		<div class="col-xs-12 col-md-7 page-intro">
			<?php the_field('success_stories_intro', 'options'); ?>
		</div>
	</div>
</section>


<main id="main" class="container">
	<div class="row-filters">
		<div><span class="text-h4"><?php esc_html_e( 'Filtrar por:', 'samat' ); ?></span></div>
		<?php echo facetwp_display( 'facet', 'servicios' ); ?>
		<?php echo facetwp_display( 'facet', 'sectores' ); ?>
		<?php echo facetwp_display( 'facet', 'software' ); ?>
		<?php echo facetwp_display( 'facet', 'empresas' ); ?>
	</div>

	<div class="grid-columns-3 mt-4 mb-8">
		<?php if (have_posts()) : while (have_posts()) : the_post();

			get_template_part( 'template-parts/loop', 'card' );

		endwhile;
		
		endif; ?>
	</div>
	<div class="row center-xs">
	 	<?php echo facetwp_display( 'facet', 'pager_load_more' ); ?>
	</div>
</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php endif;?>
<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>

<?php
get_footer();
