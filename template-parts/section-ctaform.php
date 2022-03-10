<section id="section-ctaform">
	<div class="container mb-6">
		<div class="row">

			<div class="col-xs-12 col-md-5">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('cta-form')) : ?>
	                <?php endif; ?>
			</div>
			
			<div class="col-xs-12 col-md-6 col-md-offset-1">
				<?php echo do_shortcode( '[contact-form-7 id="44" title="CTA Contacto"]' ); ?>
			</div>
			
		</div>
	</div>
</section>