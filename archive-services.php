<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samat
 */

get_header();
?>
<script type = "application / ld + json" >
{
  "@context" : "http://schema.org/" ,
  "@type" : "Servicio" ,
  "serviceType" : "Servicios de Ingeniería Mecánica" ,
  "proveedor" : {
    "@type" : "LocalBusiness" ,
    "nombre" : "Ingeniería SAMAT"
  },
  "areaServed" : {
    "@type" : "Estado" ,
    "nombre" : "Zaragoza"
  },
  "hasOfferCatalog" : {
    "@type" : "OfferCatalog" ,
    "nombre" : "Servicios de ingeneiría mecánica, ingeniería del ascensor, cálculo estructural y automatización del diseño CAD 3D" ,
    "itemListElement" : [
      {
        "@type" : "OfferCatalog" ,
        "nombre" : "Ingeniería del ascensor" ,
        "itemListElement" : [
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Diseño de ascensor completo"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Ingeniería integral del ascensor, montacargas o elevador"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Proceso de ventas en el ascensor"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Instalación y mantenimiento"
            }
          }
        ]
      },
      {
        "@type" : "OfferCatalog" ,
        "nombre" : "Automatización de procesos, diseño pre-fabricación" ,
        "itemListElement" : [
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Automatización diseño de modelos 3d"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Automatización del proceso de ventas"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Automatización de procesos,oficina técnica"
            }
          }
        ]
      },
      {
        "@type" : "OfferCatalog" ,
        "nombre" : "Cálculo estructural, Ingenieros calculistas" ,
        "itemListElement" : [
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Análisis mecánico y estructural"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Método colaborativo Samat"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Automatización de cálculos estructurales, mecánicos..."
            }
          }
        ]
      },
     {
        "@type" : "OfferCatalog" ,
        "nombre" : "Ingeniería para i+d" ,
        "itemListElement" : [
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Diseño mecánico a medida"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Documentación técnica"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Valorización adicional de su i+d+i"
            }
          },
          {
            "@type" : "Oferta" ,
            "itemOffered" : {
              "@type" : "Servicio" ,
              "nombre" : "Auditoria de optimización de procesos"

            }
          }
        ]
      }
    ]
  }
}
</script>

<header id="hero">

	<div class="container scene_element scene_element--top-bottom">
		<div class="row breadcrumbs-header">
	 		<div class="col-xs-12">
			<?php if (function_exists('rank_math_the_breadcrumbs')) {
					echo '<div id="breadcrumbs" class="bg-primary">';
					rank_math_the_breadcrumbs();
					echo '</div>';
				}?>
			</div>
    </div>
    <div class="row">
			<div class="col-xs-12 col-md-6">
				<!-- Titulo listado -->
        		<h1><?php the_field('services_title', 'options'); ?></h1>
				<?php the_field('services_excerpt', 'options') ;?>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<?php if( get_field('services_img', 'options') ): ?>
					<img src="<?php the_field('services_img', 'options'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>

<section id="subheader" class="container">
	<div class="row">
		<div class="col-xs-12 col-md-5">
				<h2><?php the_field('services_subtitle', 'options'); ?></h2>
			</div>

		<div class="col-xs-12 col-md-7 page-intro">
			<?php the_field('services_intro', 'options'); ?>
		</div>
	</div>
</section>


<main id="main" class="container">

	<div class="row">
		<?php
			  $args = array(
				'post_type'      => 'services', //write slug of post type
			    'posts_per_page' => -1,
			    'post_parent'    => '175', //place here id of your parent page
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			);
			// The Query
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				echo '<div class="col-xs-12"><h2>';
				echo ''._e( 'Ingeniería del ascensor', 'samat' ).'';
				echo '</h2><hr></div>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
		?>
	</div>
	<div class="row mt-4">

		<?php
			  $args = array(
				'post_type'      => 'services', //write slug of post type
			    'posts_per_page' => -1,
			    'post_parent'    => '138', //place here id of your parent page
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			);
			// The Query
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				echo '<div class="col-xs-12"><h2>';
				echo ''._e( 'Automatización', 'samat' ).'';
				echo '</h2><hr></div>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
		?>
	</div>
	<div class="row mt-4">

		<?php
			  $args = array(
				'post_type'      => 'services', //write slug of post type
			    'posts_per_page' => -1,
			    'post_parent'    => '179', //place here id of your parent page
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			);
			// The Query
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				echo '<div class="col-xs-12"><h2>';
				echo ''._e( 'Cálculos', 'samat' ).'';
				echo '</h2><hr></div>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
		?>
	</div>
	<div class="row mt-4">

		<?php
			  $args = array(
				'post_type'      => 'services', //write slug of post type
			    'posts_per_page' => -1,
			    'post_parent'    => '177', //place here id of your parent page
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			);
			// The Query
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				echo '<div class="col-xs-12"><h2>';
				echo ''._e( 'Ingeniería para su I+D', 'samat' ).'';
				echo '</h2><hr></div>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

				    get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
		?>
	</div>
</main><!-- #main -->

<?php get_template_part( 'template-parts/section', 'ctaform' ); ?>

<?php
get_footer();
