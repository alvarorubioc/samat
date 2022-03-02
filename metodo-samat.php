<?php

/*** Template Name: Metodo Samat */

get_header(); ?>

<?php get_template_part( 'template-parts/header', 'page' ); ?>
<?php get_template_part( 'template-parts/section', 'metodocards' ); ?>


	<main id="main" class="site-main container metodo-samat">
		<div class="row">
			<div class="col-xs-12"><h2><?php _e( 'Automatización de procesos', 'samat' ); ?></h2></div>
			<div class="col-xs-12 col-md-4"><?php the_field('metodo_faqs_1');?></div>
			<div class="col-xs-12 col-md-4"><?php the_field('metodo_faqs_2');?></div>
			<div class="col-xs-12 col-md-4"><?php the_field('metodo_faqs_3');?></div>
		</div>

	</main><!-- #main -->

	<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>
	<?php if(ICL_LANGUAGE_CODE=='es'): ?>
		<?php get_template_part( 'template-parts/section', 'blog' ); ?>
	<?php endif;?>

<?php
get_footer();
