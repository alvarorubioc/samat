<?php
/**
 * Enqueue scripts and styles.
 */

function samat_scripts() {
	wp_enqueue_style( 'samat-style', get_stylesheet_uri(), array() );

	wp_enqueue_script( 'samat-js', get_template_directory_uri() . '/assets/js/samat.min.js', array(), '20151215', true );
	//wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	};

	
}
add_action( 'wp_enqueue_scripts', 'samat_scripts' );

/** 
* Gutenberg scripts and styles
 */
function innotec_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/assets/js/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'innotec_gutenberg_scripts' );






