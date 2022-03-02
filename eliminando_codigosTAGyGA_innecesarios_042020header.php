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
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-touch.png" rel="apple-touch-icon" />
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name="theme-color" content="#e6ebf1">

	<?php wp_head(); ?>

	<!--Start of LiveBeep Script-->
		<script type="text/javascript">
		(function(d,s,id){
		if(d.getElementById(id)){return;}
		var u='//www.livebeep.com/'+d.domain+'/eye.js?';
		if((h=d.location.href.split(/#ev!/)[1])) u += '?_e=' +h;
		else if((r=/.*\_evV=(\w+)\b.*/).test(c=d.cookie) ) u += '?_v='+c.replace(r,'$1');
		var js = d.createElement(s);
		js.src = u;js.id = id;
		var fjs = d.getElementsByTagName(s)[0];
		fjs.parentNode.insertBefore(js, fjs);
		})(document,'script','livebeep-script');
		</script>
	<!--End of LiveBeep Script-->

	      <!-- Google Tag Manager WEB-->
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PHGBRRJ');</script>
        <!-- End Google Tag Manager -->
  <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-15456322-1', '');
      ga('send', 'pageview');

    </script>
	<!-- End Google Analytics -->
              <!-- Google Tag Manager control IKS -->
                    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-5N4S9LT');</script>
            <!-- End Google Tag Manager IKS -->  
  
<!-- Global site tag (gtag.js) - Google Ads: 701961956 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-701961956"></script> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-701961956');
</script>
<?php if (is_page('muchas-gracias')) { ?>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-701961956/nQtoCNDxjrEBEOSt3M4C'});
</script>
<?php } ?>  
</head>

<body <?php body_class(); ?>>
      <!-- Google Tag Manager WEB(noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHGBRRJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <!-- Google Tag Manager control IKS(noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N4S9LT"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

<div id="samat-main" class="m-scene">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'samat' ); ?></a>

	<section id="masthead" class="site-header">

		<div class="top-bar">
			<div class="container">
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
				<div class="container">
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
