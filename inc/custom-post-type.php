<?php

// let's create the function for the custom type Casos de éxito - Portafolio
function custom_post_success_stories() {
    // creating (registering) the custom type
    register_post_type( 'success_stories', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Casos de éxito', 'samat'), /* This is the Title of the Group */
            'singular_name' => __('Caso de éxito', 'samat'), /* This is the individual type */
            'all_items' => __('Todos los casos', 'samat'), /* the all items menu item */
            'add_new' => __('Añadir nuevo', 'samat'), /* The add new menu item */
            'add_new_item' => __('Añadir nuevo caso de éxito', 'samat'), /* Add New Display Title */
            'edit' => __( 'Editar', 'samat' ), /* Edit Dialog */
            'edit_item' => __('Editar Caso', 'samat'), /* Edit Display Title */
            'new_item' => __('Nuevo Caso', 'samat'), /* New Display Title */
            'view_item' => __('Ver Caso', 'samat'), /* View Display Title */
            'search_items' => __('Buscar Caso', 'samat'), /* Search Custom Type Title */
            'not_found' =>  __('Nada econtrado en la base de datos.', 'samat'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nada encontrado en la papelera', 'samat'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-format-quote', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'   => array( 'slug' => 'casos-exito', 'samat' , 'with_front' => false ), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            'capability_type' => 'page',
            'hierarchical' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */

}

    // adding the function to the Wordpress init
    add_action( 'init', 'custom_post_success_stories');


// let's create the function for the custom type Servicios
function custom_post_services() {
    // creating (registering) the custom type
    register_post_type( 'services', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Servicios', 'samat'), /* This is the Title of the Group */
            'singular_name' => __('Servicios', 'samat'), /* This is the individual type */
            'all_items' => __('Todos los servicios', 'samat'), /* the all items menu item */
            'add_new' => __('Añadir nuevo', 'samat'), /* The add new menu item */
            'add_new_item' => __('Añadir nuevo Servicio', 'samat'), /* Add New Display Title */
            'edit' => __( 'Editar', 'samat' ), /* Edit Dialog */
            'edit_item' => __('Editar Servicio', 'samat'), /* Edit Display Title */
            'new_item' => __('Nuevo Servicio', 'samat'), /* New Display Title */
            'view_item' => __('Ver Servicio', 'samat'), /* View Display Title */
            'search_items' => __('Buscar Servicio', 'samat'), /* Search Custom Type Title */
            'not_found' =>  __('Nada econtrado en la base de datos.', 'samat'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nada encontrado en la papelera', 'samat'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-portfolio', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'   => array( 'slug' => 'servicios', 'samat' , 'with_front' => false ), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            'capability_type' => 'page',
            'hierarchical' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'author', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */

}

    // adding the function to the Wordpress init
    add_action( 'init', 'custom_post_services');



// let's create the function for the custom type Software
function custom_post_software() {
    // creating (registering) the custom type
    register_post_type( 'software', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Software', 'samat'), /* This is the Title of the Group */
            'singular_name' => __('Software', 'samat'), /* This is the individual type */
            'all_items' => __('Todos los software', 'samat'), /* the all items menu item */
            'add_new' => __('Añadir nuevo', 'samat'), /* The add new menu item */
            'add_new_item' => __('Añadir nuevo software', 'samat'), /* Add New Display Title */
            'edit' => __( 'Editar', 'samat' ), /* Edit Dialog */
            'edit_item' => __('Editar software', 'samat'), /* Edit Display Title */
            'new_item' => __('Nuevo Software', 'samat'), /* New Display Title */
            'view_item' => __('Ver Software', 'samat'), /* View Display Title */
            'search_items' => __('Buscar software', 'samat'), /* Search Custom Type Title */
            'not_found' =>  __('Nada econtrado en la base de datos.', 'samat'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nada encontrado en la papelera', 'samat'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-album', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'   => array( 'slug' => 'software', 'samat' , 'with_front' => false ), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            'capability_type' => 'page',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
        ) /* end of options */
    ); /* end of register post type */

}

    // adding the function to the Wordpress init
    add_action( 'init', 'custom_post_software');


// Change dashboard Posts to Blog name
add_action( 'init', 'cp_change_post_object' );

function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->menu_name = 'Blog';
        $labels->name_admin_bar = 'Blog';
}
