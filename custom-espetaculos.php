<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_espetaculos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_espetaculos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
	    'name' => _x('Espet&aacute;culos', 'post type general name'),
	    'singular_name' => _x('Espet&aacute;culo', 'post type singular name'),
	    'add_new' => _x('Novo Espet&aacute;culo', 'espetaculo'),
	    'add_new_item' => __('Novo Espet&aacute;culo'),
	    'edit_item' => __('Editar Espet&aacute;culo'),
	    'new_item' => __('Novo Espet&aacute;culo'),
	    'all_items' => __('Todos Espet&aacute;culos'),
	    'view_item' => __('Ver Espet&aacute;culo'),
	    'search_items' => __('Procurar Espet&aacute;culos'),
	    'not_found' =>  __('Nenhum Espet&aacute;culo encontrado'),
	    'not_found_in_trash' => __('Nenhum Espet&aacute;culo encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Espet&aacute;culos'
    );
    
    /**
     * Registamos o tipo de post espetaculos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'espetaculos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'espetaculos',
	    'rewrite' => array(
		 'slug' => 'espetaculo',
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
     * Registamos a categoria de espetaculos para o tipo de post espetaculos
     */
    register_taxonomy( 'espetaculos_category', array( 'espetaculos' ), array(
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
            'slug' => 'espetaculos/categories',
            'with_front' => false,
        ),
        )
    );
    
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post espetaculos.
     */
    register_taxonomy_for_object_type( 'tags', 'espetaculos' );
    
}


// Adiciona a coluna Categorias ao Custom Post Type Espetaculos
add_filter( 'manage_espetaculos_posts_columns', 'ilc_cpt_columns' );
add_action('manage_espetaculos_posts_custom_column', 'ilc_cpt_custom_column', 10, 2);

function ilc_cpt_espetac_columns($defaults) {
    $defaults['espetaculos_category'] = 'Categoria';
    return $defaults;
}

function ilc_cpt_espetac_custom_column($column_name, $post_id) {
    $taxonomy = $column_name;
    $post_type = get_post_type($post_id);
    $terms = get_the_terms($post_id, $taxonomy);
 
    if ( !empty($terms) ) {
        foreach ( $terms as $term )
            $post_terms[] = "<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " . esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
        echo join( ', ', $post_terms );
    }
    else echo '<i>No terms.</i>';
}
