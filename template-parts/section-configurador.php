<div class="row">
<?php if( have_rows('configurador_cards') ): ?>

	<?php while( have_rows('configurador_cards') ): the_row();

		// vars
		$image = get_sub_field('configurador_card_image');
		$title = get_sub_field('configurador_card_title');
		$description = get_sub_field('configurador_card_descripcion');
		$video = get_sub_field('configurador_card_video');
		$buttom = get_sub_field('configurador_card_buttom');
	?>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="samat-card">

			<div class="samat-card-image">
				<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
			</div>

			<div class="samat-card-content">
				<h3 class="text-h4"><?php echo $title; ?></h3>
				<p><?php echo $description; ?></p>

				<div class="row samat-card-footer">

					<?php if( $video ): ?>
						<div class="col-xs-6">
                            <br><a class="btn btn-full" href="<?php echo $video; ?>" rel="nofollow" target="_blank">
                            <?php esc_html_e( 'Video', 'samat' ); ?>
                            </a>
                        </div>
					<?php endif; ?>

                    <?php if( $buttom ): ?>
                        <div class="col-xs-6">
                            <br><a class="btn btn-secundary btn-full" href="<?php echo $buttom; ?>" rel="nofollow" target="_blank">
                                <?php esc_html_e( 'Abrir Demo', 'samat' ); ?>
                            </a>
                        </div>    
					<?php endif; ?>

				</div>

			</div>

		</div>
	</div>

	<?php endwhile; ?>

<?php endif; ?>
</div>



