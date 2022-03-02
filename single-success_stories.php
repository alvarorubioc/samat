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

get_header(); ?>

<header id="hero">
	<div class="container">
		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
	 			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			</div>
        </div>
        <div class="row text-header">
			<div class="col-xs-12 col-md-8">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p><?php echo get_the_excerpt() ;?></p>
			</div>
		</div>
	</div>
</header>

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

			<div class="samat-card">
				<div class="samat-card-content">
					<h2 class="text-h4"><?php _e('Servicios de ingeniería', 'samat');?></h2>

						<?php
						$post_objects = get_field('success_services');

						if( $post_objects ): ?>
						    <ul class="text-h6">
						    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <li>
						            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						        </li>
						    <?php endforeach; ?>
						    </ul>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif;?>

					<h2 class="text-h4"><?php _e('Equipo', 'samat');?></h2>
						<?php

							$rows = get_field('success_team_members');
							if($rows)
							{
								echo '<ul class="text-h6">';

								foreach($rows as $row)
								{
									echo '<li>' . $row['success_team'] . '</li>';
								}

								echo '</ul>';
							} ?>
					<h2 class="text-h4"><?php _e('Software', 'samat');?></h2>
						<?php
						$post_objects = get_field('success_software');

						if( $post_objects ): ?>
						    <ul class="text-h6">
						    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <li>
						            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						        </li>
						    <?php endforeach; ?>
						    </ul>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif;?>

					<h2 class="text-h4"><?php _e('Sectores', 'samat');?></h2>
						<?php
						$post_objects = get_field('success_sectors');

						if( $post_objects ): ?>
						    <ul class="text-h6">
						    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <li>
						            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						        </li>
						    <?php endforeach; ?>
						    </ul>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif;?>

				</div>
			</div>

			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact')) : ?>
	                <?php endif; ?>
		</aside>

	</div>
</div><!-- #primary -->

<?php get_template_part( 'template-parts/related', 'successstories' ); ?>
<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php endif;?>


<?php

get_footer();
