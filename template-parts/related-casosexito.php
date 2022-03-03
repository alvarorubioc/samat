<?php $posts = get_field('services_related_casosexito');

if( $posts ): ?>
	<section id="casos-exito" class="alignfull mb-8">
		<div class="container">
			
			<div class="row">
		 		<div class="col-xs-12 col-md-5 wp-block-button">
	 				<p class="text-h2"><?php esc_html_e( 'Casos de éxito', 'samat' );?></p>
	 				<p>Verán ejemplos de los testimonios que algunos de nuestros clientes han querido explicitar y que, corroboran, de alguna manera, lo que en las páginas de esta web hemos descrito sobre nuestras competencias y habilidades sobre la Ingeniería Mecánica y la Industria 4.0.</p><br>
	 				<a class="wp-block-button__link has-secondary-background-color has-background" href="/casos-exito" title="Mas casos de éxito"><?php _e( 'Más casos de éxito', 'samat' ); ?></a>
				</div>
		
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <div class="col-xs-12 col-md-6 col-md-offset-1">
						<div class="samat-card card_horizontal">	
							<div class="samat-card-content">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title( '<h3 class="text-h4">', '</h3>' ); ?>	
								</a>							
								<p><?php echo get_the_excerpt() ;?></p>
							</div>
						
						</div>	
					</div>
			    <?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>		
			</div>

		</div>	
	</section>
<?php endif; ?>