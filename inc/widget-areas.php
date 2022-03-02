<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function samat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'samat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'samat' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="text-h5 widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'samat' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="text-h5 widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Logos', 'samat' ),
		'id'            => 'footer-logos',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="text-h5 widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact', 'samat' ),
		'id'            => 'contact-widget',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="sticky-form" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="text-h5 widget-title">',
		'after_title'   => '</span>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'CTA Form', 'samat' ),
		'id'            => 'cta-form',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'CTA', 'samat' ),
		'id'            => 'cta-main',
		'description'   => esc_html__( 'Add widgets here.', 'samat' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="text-h2 widget-title">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'samat_widgets_init' );
