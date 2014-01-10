<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_eventos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_eventos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
	    'name' => _x('Eventos', 'post type general name'),
	    'singular_name' => _x('Eventoo', 'post type singular name'),
	    'add_new' => _x('Novo Evento', 'espetaculo'),
	    'add_new_item' => __('Novo Evento'),
	    'edit_item' => __('Editar Evento'),
	    'new_item' => __('Novo Evento'),
	    'all_items' => __('Todos Eventos'),
	    'view_item' => __('Ver Evento'),
	    'search_items' => __('Procurar Eventos'),
	    'not_found' =>  __('Nenhum Evento encontrado'),
	    'not_found_in_trash' => __('Nenhum Evento encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Eventos'
    );
    
    /**
     * Registamos o tipo de post eventos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'eventos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'eventos',
	    'rewrite' => array(
		 'slug' => 'evento',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor','thumbnail')
	    )
    );
    
    /**
     * Registamos a categoria de eventos para o tipo de post eventos
     */
    register_taxonomy( 'eventos_category', array( 'eventos' ), array(
        'hierarchical' => true,
        'label' => __( 'Espet&aacute;culos Category' ),
        'labels' => array( // Labels customizadas
	    'name' => _x( 'Categories', 'taxonomy general name' ),
	    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Search Categories' ),
	    'all_items' => __( 'All Categories' ),
	    'parent_item' => __( 'Parent Category' ),
	    'parent_item_colon' => __( 'Parent Category:' ),
	    'edit_item' => __( 'Edit Category' ),
	    'update_item' => __( 'Update Category' ),
	    'add_new_item' => __( 'Add New Category' ),
	    'new_item_name' => __( 'New Category Name' ),
	    'menu_name' => __( 'Categorias' ),
	),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'eventos/categories',
            'with_front' => false,
        ),
        )
    );
    
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post eventos.
     */
    register_taxonomy_for_object_type( 'tags', 'eventos' );
    
}