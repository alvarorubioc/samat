
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
				echo '<h2>';
				echo ''._e( 'Ingeniería del ascensor', 'samat' ).'';
				echo '</h2><hr>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
        echo '<div class="grid-columns-3 mb-8"">';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
        echo '</div>';
			} else {
				// no posts found
			}
		
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
				echo '<h2>';
				echo ''._e( 'Automatización', 'samat' ).'';
				echo '</h2><hr>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
        echo '<div class="grid-columns-3 mb-8"">';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
        echo '</div>';
			} else {
				// no posts found
			}
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
				echo '<h2>';
				echo ''._e( 'Cálculos', 'samat' ).'';
				echo '</h2><hr>';
				wp_reset_postdata();
			}

			// The Loop
			if ( $the_query->have_posts() ) {
        echo '<div class="grid-columns-3 mb-8"">';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part( 'template-parts/loop', 'card' );

				}
				/* Restore original Post Data */
				wp_reset_postdata();
        echo '</div>';
			} else {
				// no posts found
			}
		?>
