<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Icons & Favicons -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name="theme-color" content="#e6ebf1">
	<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>

	
<?php if (is_page('muchas-gracias')) { ?>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-701961956/nQtoCNDxjrEBEOSt3M4C'});
</script>
<?php } ?> 

<?php if ( is_front_page() ) { ?>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php	}; ?>
</head>

<body <?php body_class(); ?>>
      
<div id="samat-main" class="m-scene">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'samat' ); ?></a>

	<section id="masthead" class="site-header">

		<div class="top-bar">
			<div class="container-fluid">
				<div class="row center-xs">
					<div class="col-xs-12 col-md-4 start-md">
						<strong class="site-title"><?php bloginfo( 'description', 'display' ); ?></strong>
					</div>

				    <div class="col-xs-12 col-md-8 end-md">
			            	<small><a href="mailto:info@ingenieriasamat.es" onclick="ga('send', 'event', 'Enlace', 'click', 'clickMailcabecera');" >
			            		<svg class="icon icon-baseline" width="20" height="20" viewBox="0 0 20 20">
	  								<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#mail" />
								</svg> info@ingenieriasamat.es
							</a></small>

			            	<small class="top-bar-telf"><a href="tel:34976092313" onclick="ga('send', 'event', 'Enlace', 'click', 'clickPhonecabecera');">
			            	 	<svg class="icon" width="20" height="20" viewBox="0 0 20 20">
	  								<use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#phone" />
								</svg> +34 976 092 313
							</a></small>

						<?php if(ICL_LANGUAGE_CODE=='es'): ?>
							<small class="top-bar-contact"><a href="/contacto"><?php esc_html_e( 'Contactar', 'samat' ); ?></a></small>
						<?php endif;?>
						<?php if(ICL_LANGUAGE_CODE=='de'): ?>
							<small class="top-bar-contact"><a href="/de/kontaktdaten"><?php esc_html_e( 'Contactar', 'samat' ); ?></a></small>
						<?php endif;?>
						<?php if(ICL_LANGUAGE_CODE=='en'): ?>
							<small class="top-bar-contact"><a href="/en/contact"><?php esc_html_e( 'Contact us', 'samat' ); ?></a></small>
						<?php endif;?>
					</div>
				</div><!-- .row end -->
			</div>

		</div><!-- .top-bar -->

			<div id="menu-container">
				<div class="container-fluid">
					<div class="site-branding">
						<?php the_custom_logo();?>
					</div>
					<nav role="navigation" id="navbar" class="">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
			                'container'  => 'div',
			                'container_class' => 'menu',
			                'menu_id' => 'menu-cabecera',
			                'menu_class' =>'',
			                'link_before' => '',
			                'link_after' => '',
			                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>

	</section><!-- #masthead -->
