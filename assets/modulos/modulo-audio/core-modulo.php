<?php

function artista_register() {

    $labels = array(
        'name' => _x('Artista', 'post type general name'),
        'singular_name' => _x('canciones', 'post type singular name'),
        'add_new' => _x('Agregar artista', 'slideshow_two item'),
        'add_new_item' => __('Agregar artista'),
        'edit_item' => __('Editar artista'),
        'new_item' => __('Nuevo artista'),
        'view_item' => __('Ver el artista'),
        'search_items' => __('Buscar artista'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search' => false,
        'capability_type' => 'post', //puede cambiar por 'page'
        'menu_icon'  => 'dashicons-admin-users',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'artista', 'with_front' => false)
    ); 

    register_post_type( 'artista' , $args );
}
    add_action('init', 'artista_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se funcione con categorías
    de post*/
    function categoria_artista() {

        register_taxonomy(
            'categoria-artista',
            'artista',
            array(
                'label' => __( 'Categoria' ),
                'rewrite' => array( 'slug' => 'categoria-artista' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_artista' );
