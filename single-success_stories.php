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

get_template_part( 'template-parts/header', get_post_type() );?>

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

		<aside class="col-xs-12 col-md-4 mt-2">
			<?php if( get_field('success_testimonial_enabled') ): ?>

				<div class="samat-card card_testimonial">
					<div class="samat-card-header">
						<?php
							$image = get_field('success_profile');
							$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
						?>
						<div class="name_success">
							<span class="text-h4"><?php the_field('success_name'); ?></span>
							<div><?php the_field('success_cargo'); ?></div>
							<a href="<?php the_field('success_web'); ?>"><strong><?php the_field('success_company'); ?></strong></a>
						</div>
					</div>

					<div class="samat-card-content">
						<?php if( get_field('success_testimonio') ): ?>
							<blockquote><?php the_field('success_testimonio'); ?></blockquote>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact')) : ?>
	        <?php endif; ?>
		</aside>

	</div>
</div><!-- #primary -->

<?php
get_template_part( 'template-parts/related', 'successstories' );
get_template_part( 'template-parts/section', 'blog' );
get_footer();