<?php

//Adiciona os arquivos de AdminOptions e CustomPostType`s

require_once (get_stylesheet_directory() . '/admin/admin_options.php');
require_once (get_stylesheet_directory() . '/custom-projetos.php');
require_once (get_stylesheet_directory() . '/custom-espetaculos.php');
require_once (get_stylesheet_directory() . '/custom-eventos.php');
require_once (get_stylesheet_directory() . '/custom-agenda.php');


//Exemplo de uso da Classe Custom Meta Boxes - Baixe a classe em: http://www.deluxeblogtips.com/2011/06/update-meta-box-script-v32-is-available.html

$prefix = 'vox'; //prefixo

$meta_boxes = array();

//MetaBox Menu Prateleira
$meta_boxes[] = array(
	'id' => 'pesquisa',
	'title' => 'Menu Prateleira',
	'context' => 'side', // same as above, defaults to "normal"
    'priority' => 'high', // same as above, defaults to "high"
	'pages' => array('post', 'page'),
	'fields' => array(

		array(
			'name' => '',
			'id' => $prefix . 'prat',

			'type' => 'checkbox_list', 

			'options' => array(	// op��es do checkbox, em key => value (key n�o pode conter espa�os)

				'aprovados' => 'Aprovados',
				'clientes' => 'Clientes',
				'dados-da-empresa' => 'Dados da Empresa',
				'escola' => 'Escola',
				'espetaculos' => 'Espet&aacute;culos',
				'eventos' => 'Eventos',
				'fotos-e-videos' => 'Fotos e V&iacute;deos',
				'motivacionais' => 'Motivacionais',
				'o-circo' => 'O Circo',
				'parceiros' => 'Parceiros',
				'patrocinadores' => 'Patrocinadores',
				'performances' => 'Performances',
				'projetos' => 'Projetos',
				'realizados' => 'Realizados',
			),

			'desc' => '<em>Quais bot&otilde;es devem aparecer nessa p&aacute;gina?</em>'

		),

	)

);

//inclua a Classe aqui
require_once('metabox/meta-box.php');

//aqui � onde se criam os meta boxes ....
foreach ($meta_boxes as $meta_box) {
	new RW_Meta_Box($meta_box);
}

// Exclui a barra de atualizacao
add_action( 'admin_init', 'no_update_nag' );
function no_update_nag() {
        remove_action( 'admin_notices', 'update_nag', 3 );
}

// post thumbnail support
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'thumb-eventos', 280, 130, true );
}

/* Muda o limite do the_excerpt no child theme do TwentyTen. Use echo excerpt( 50 ); */
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return nl2br($excerpt);
    }



/* Muda o limite de download para 64M  */
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );
?>

<?php
/**
 * Register Widget Area.
 *
 */
function wpgyan_widgets_init() {
 
	register_sidebar( array(
		'name' => 'Widget Agenda',
		'id' => 'widget_agenda',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_init' );



?>

