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
				<h1><?php the_field('software_title', 'options'); ?></h1>
				<?php the_field('software_excerpt', 'options') ;?>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<?php if( get_field('software_img', 'options') ): ?>
					<img src="<?php the_field('software_img', 'options'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>

<section id="subheader" class="container">
	<div class="row">
		<div class="col-xs-12 col-md-5">
				<h2><?php the_field('software_subtitle', 'options'); ?></h2>
			</div>

		<div class="col-xs-12 col-md-7 page-intro">
			<?php the_field('software_intro', 'options'); ?>
		</div>
	</div>
</section>


<main id="main" class="container">

	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div class="col-xs-12 col-md-3">
				<div class="samat-card">
					<div class="samat-card-image">
						<?php the_post_thumbnail(''); ?>
					</div>

					<div class="samat-card-content">
						<h3 class=""><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo get_the_excerpt() ;?></p>
					</div>
				</div><!-- /card -->
			</div>

		<?php endwhile; endif; ?>

	</div>
</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?//php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?//php get_template_part( 'template-parts/section', 'blog' ); ?>
<?//php endif;?>
<div>&nbsp;</div>
<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>

<?php
get_footer();
