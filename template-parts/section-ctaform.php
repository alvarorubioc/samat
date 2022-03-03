<section id="section-ctaform">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-1 last-md">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('cta-form')) : ?>
	                <?php endif; ?>
			</div>

			<div class="col-xs-12 col-md-7">
				<?php echo do_shortcode( '[contact-form-7 id="44" title="CTA Contacto"]' ); ?>
			</div>
		</div>
	</div>
</section>