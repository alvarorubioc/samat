<?php
/**
 * samat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package samat
 */

// Register Theme support
require get_template_directory().'/inc/theme-support.php';

// Gutenberg support
require get_template_directory().'/inc/gutenberg-support.php';

// Register widget areas
require get_template_directory().'/inc/widget-areas.php';

// Register scripts and stylesheets
require get_template_directory().'/inc/enqueue-scripts.php';

// Register custom post type
require get_template_directory().'/inc/custom-post-type.php';

// Disable wp emoji
require_once(get_template_directory().'/inc/disable-emoji.php');

// Recent post to footer function
require_once(get_template_directory().'/inc/recent-post.php');

// Register pagination function
require get_template_directory().'/inc/pagination.php';


/**
 * Implement the Custom LOGO feature.
 */
require get_template_directory() . '/inc/custom-logo.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


// add_filter( 'wpcf7_load_js', '__return_false' );
//add_filter( 'wpcf7_load_css', '__return_false' );


    function template_part( $atts, $content = null ){
        $tp_atts = shortcode_atts(array( 
           'path' =>  null,
        ), $atts);         
        ob_start();  
        get_template_part($tp_atts['path']);  
        $ret = ob_get_contents();  
        ob_end_clean();  
        return $ret;    
     }
     add_shortcode('template', 'template_part'); 

function testimonial_grid( $atts, $content = null ){
   $tp_atts = shortcode_atts(array( 
      'order' =>  null,
   ), $atts);         
   ob_start();  
   get_template_part('template-parts/section', 'casosexito');  
   $ret = ob_get_contents();  
   ob_end_clean();  
   return $ret;    
}
add_shortcode('testimonios', 'testimonial_grid'); 


add_shortcode( 'cta_button', 'salcodes_cta' );

function salcodes_cta( $atts ) {
 $a = shortcode_atts( array(
 'link' => '#',
 'id' => 'salcodes',
 'color' => 'blue',
 'size' => '',
 'label' => 'Button',
 'target' => '_self'
 ), $atts );
 $output = '<p><a href="' . esc_url( $a['link'] ) . '" id="' . esc_attr( $a['id'] ) . '" class="button ' . esc_attr( $a['color'] ) . ' ' . esc_attr( $a['size'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['label'] ) . '</a></p>';
 return $output;
}


