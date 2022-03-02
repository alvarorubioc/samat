<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samat
 */

?>
<?php get_template_part( 'template-parts/section', 'software' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="container">
	        <div class="row footer">
	            <div class="col-xs-12 col-md-7">
	            	<?php the_custom_logo();?>
	                <div class="footer-social">
						<div class="item-social">
							<a href="https://www.linkedin.com/company/ingenieriasamat" onclick="ga('send', 'event', 'Enlace', 'click', 'clickLinkedin');" rel="nofollow" aria-hidden="true">
								<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
	  								<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#linkedin" />
								</svg>
							</a>
						</div>
						<div class="item-social">
							<a href="https://twitter.com/IngenieriaSamat" onclick="ga('send', 'event', 'Enlace', 'click', 'clickTwitter');" rel="nofollow" aria-hidden="true">
								<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
	  								<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#twitter" />
								</svg>
							</a>
						</div>
						<div class="item-social">
							<a href="https://www.youtube.com/channel/UCFv0hMFWb3ZIEOIWoAOQyQA" onclick="ga('send', 'event', 'Enlace', 'click', 'clickYoutube');" rel="nofollow" aria-hidden="true">
								<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
	  								<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#youtube" />
								</svg>
							</a>
						</div>
					</div>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-1')) : ?>
	                <?php endif; ?>

	            </div>
	            <div class="col-xs-12 col-md-5">
	                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-2')) : ?>
	                <?php endif; ?>
	            </div>
	        </div>

    	</div>
    	<div class="container site-info">
			<div class="row">
				<div class="col-xs-12"><hr></div>
				<div class="col-xs-12 col-md-4">
					<?php esc_html_e( 'Ingeniería SAMAT', 'samat' ); ?>
					<span class="sep"> | </span> 2019
				</div>

      <div class="col-xs-12 col-md-8 end-md">
      <ul id="footer-menu">
					<li onclick="location.href='/politica-privacidad/'">Política de privacidad</li>
					<li onclick="location.href='/politica-de-cookies/'">Política de cookies</li>
					<li onclick="location.href='/codigos-eticos/'">Códigos ético y deontológico</li>
				</ul>
      </div>        
 
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #samat-main -->
<?php wp_footer(); ?>



</body>
</html>
