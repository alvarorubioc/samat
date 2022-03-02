

<div class="row">
<?php if( have_rows('team_cards') ): ?>

	<?php while( have_rows('team_cards') ): the_row();

		// vars
		$image = get_sub_field('team_card_image');
		$name = get_sub_field('team_card_name');
		$cargo= get_sub_field('team_card_cargo');
		$description = get_sub_field('team_card_descripcion');
		$email = get_sub_field('team_card_email');
		$twitter = get_sub_field('team_card_twitter');
		$linkedin = get_sub_field('team_card_linkedin');

	?>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="samat-card">

			<div class="samat-card-image">
				<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
			</div>

			<div class="samat-card-content">
				<h3 class="text-h4"><?php echo $name; ?></h3>
				<strong><?php echo $cargo; ?></strong>
				<p><?php echo $description; ?></p>

				<div class="icon-xl samat-card-footer">

					<?php if( $twitter ): ?>
						<a href="<?php echo $twitter; ?>" rel="nofollow">
					        <span class="social-twitter">
					            <svg class="icon" width="20" height="20" viewBox="0 0 20 20">
					                <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#twitter" />
					            </svg>
					        </span>
					     </a>
					<?php endif; ?>

					<?php if( $linkedin ): ?>
						<a href="<?php echo $linkedin; ?>" rel="nofollow">
					        <span class="social-likedin">
					            <svg class="icon" width="20" height="20" viewBox="0 0 20 20">
					                <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#linkedin" />
					            </svg>
					        </span>
					     </a>
					<?php endif; ?>

					<?php if( $email ): ?>
						<a href="mailto:<?php echo $email; ?>">
									<span class="social-facebook">
											<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#mail" />
											</svg>
									</span>
							 </a>
					<?php endif; ?>
				</div>

			</div>

		</div>
	</div>

	<?php endwhile; ?>

<?php endif; ?>
</div>

<div class="row">
<div class="col-xs-12 mt-4 center-xs"><h2><?php esc_html_e( 'Colaboradores externos', 'samat' );?></h2></div>
<?php if( have_rows('team_partners') ): ?>

	<?php while( have_rows('team_partners') ): the_row();

		// vars
		$image = get_sub_field('team_partner_image');
		$name = get_sub_field('team_partner_name');
		$description = get_sub_field('team_partner_descripcion');
		$web = get_sub_field('team_partner_web');
	?>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="samat-card">

			<div class="samat-card-image">
				<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
			</div>

			<div class="samat-card-content">
				<h3 class="text-h4"><?php echo $name; ?></h3>
				<p><?php echo $description; ?></p>

				<div class="samat-card-footer">
					<?php if( $web ): ?>
						<a href="<?php echo $web; ?>" rel="nofollow"><?php esc_html_e( 'Visitar web', 'samat' );?></a>
					<?php endif; ?>
				</div>

			</div>

		</div>
	</div>

	<?php endwhile; ?>

<?php endif; ?>
</div>
