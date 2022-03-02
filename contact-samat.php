<?php

/*** Template Name: Contact */

get_header(); ?>

<?php get_template_part( 'template-parts/header', 'archive' ); ?>


<section id="section-ctaform">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-5 first-xs">
				<strong><?php _e( 'Address:', 'samat' ); ?></strong>
				<p class="text-h2">
					C/ Felipe Sanclemente 6.<br>
				50001, Zaragoza, ESPAÑA.</p>

				<strong><?php _e( 'Phone:', 'samat' ); ?></strong>
				<p class="text-h2"><a href="tel:+34976092313" onclick="ga('send', 'event', 'Enlace', 'click', 'clickPhonepageContacto');">+34 976 092 313</a></p>

				<strong><?php _e( 'Email:', 'samat' ); ?></strong>
				<p class="text-h2"><a href="mailto:info@ingenieriasamat.es" onclick="ga('send', 'event', 'Enlace', 'click', 'clickMailpageContacto');">info@ingenieriasamat.es</a></p>
			</div>

			<div class="col-xs-12 col-md-7">
				<?php if( apply_filters( 'wpml_current_language', null ) == 'es' ) { ?>
					<?php echo do_shortcode( '[contact-form-7 id="44" title="CTA Contacto"]' ); ?>
				<?php } else if( apply_filters( 'wpml_current_language', null ) == 'de' ) { ?>
					<?php echo do_shortcode( '[contact-form-7 id="2073" title="CTA Kontakt"]' ); ?>
				<?php } else if( apply_filters( 'wpml_current_language', null ) == 'en' ) { ?>
					<?php echo do_shortcode( '[contact-form-7 id="2071" title="CTA Contact"]' ); ?>
				<?php } ?>
			</div>


		</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.280786001127!2d-0.8842666846100321!3d41.649674987656915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914e8d2252f5f%3A0x3101c810e5c6b51!2sIngenier%C3%ADa+SAMAT%2C+S.L.!5e0!3m2!1ses!2ses!4v1549303676566" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php get_template_part( 'template-parts/section', 'metodo' ); ?>
<?php if(ICL_LANGUAGE_CODE=='es'): ?>
	<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php endif;?>

<?php
get_footer();
