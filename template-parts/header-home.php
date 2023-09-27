<header id="hero" class="header-homepage">
	<?php if( have_rows('hero_slider') ): ?>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php while( have_rows('hero_slider') ): the_row(); 
					// Get sub field values.
					$image = get_sub_field('home_image_hero');
					$video = get_sub_field('home_video_hero');
					?>
					<div class="swiper-slide">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-6 text-hero scene_element scene_element--top-bottom">
									<?php the_sub_field('home_texts_hero'); ?>
									<div class="mt-4 mb-2 hero-btns wp-block-button"><?php 
										$buttom_1 = get_sub_field('home_buttom_1_hero');
										$evento_1 = get_sub_field('home_onclick_1_hero');
										$buttom_2 = get_sub_field('home_buttom_2_hero');
										$evento_2 = get_sub_field('home_onclick_2_hero');
										if( $buttom_1 ): 
											$link_url = $buttom_1['url'];
											$link_title = $buttom_1['title'];
											$link_target = $buttom_1['target'] ? $buttom_1['target'] : '_self';
											?>
											<a class="wp-block-button__link has-secondary-background-color has-background mr-1" onclick="<?php echo esc_url( $evento_1 ); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif;
										if( $buttom_2 ): 
											$link_url = $buttom_2['url'];
											$link_title = $buttom_2['title'];
											$link_target = $buttom_2['target'] ? $buttom_1['target'] : '_self';
											?>
											<a class="wp-block-button__link has-primary-20-background-color has-color has-black-color has-background" onclick="<?php echo esc_url( $evento_2 ); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
									</div>
									
								</div>
								<div class="col-xs-12 col-md-6 scene_element scene_element--rigth-left">
									<?php if ( get_sub_field ('home_video_hero') ) {
										echo'<div class="embed-container">'.$video.'</div>';
										} elseif ( get_sub_field ('home_image_hero') ) {
											echo wp_get_attachment_image( $image, 'full' );
										} 
									?>
								</div>
							</div>
						</div>	
					</div>
				<?php endwhile; ?>	
			</div>

			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

		</div><!-- end .swiper-container -->
	<?php endif; ?>
</header>

<!-- <script>
		var mySwiper = new Swiper('.swiper-container', {
			// Optional parameters
			direction: 'horizontal',
			autoplay: {
			   delay: 5000,
			 },
			//autoHeight: true,

			breakpoints: {
				// when window width is >= 768px
				767: {
				direction: 'vertical',
				}
			},

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				renderBullet: function (index, className) {
          			return '<span class="' + className + '">' + (index + 1) + '</span>';
        		},
			},

		})
	</script> -->


