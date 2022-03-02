<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'samat' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'samat' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->


<div class="row">
	<div class="col-xs-12">
		<div id="socialshare"><span class="text-h4">Hemos redactado más artículos para ti</span></div>
	</div>
	<div class="col-xs-6">
		<span class="tag-metas">
			<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
				<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#chevron-left" />
			</svg>
			<?php _e('Anterior', 'samat');?>
		</span>
		 <?php previous_post_link('<h5>%link</h5>');
		 $prevPost = get_previous_post();
		 $prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
		 previous_post_link( '%link', $prevThumbnail );?>
	</div>
	<div class="col-xs-6 end-xs">
		<span class="tag-metas">
			<?php _e('Próxima', 'samat');?>
			<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
				<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#chevron-right" />
			</svg>
		</span>
		<?php next_post_link('<h5>%link</h5>');
			$nextPost = get_next_post();
			$nextThumbnail = get_the_post_thumbnail( $nextPost->ID );
			next_post_link( '%link', $nextThumbnail );
		?>
	</div>
</div>

<?php get_template_part( 'template-parts/social', 'share' ); ?>
