<?php
//set the admin path
require_once (get_stylesheet_directory() . '/admin/admin_options.php');

$prefix = 'cms_'; //prefixo
$meta_boxes[] = array(

	'id' => 'Background options',
	'title' => 'Background options',
	'pages' => array('post', 'page'),
        'fields' => array(
		array(
			'name' => 'You must choose a background',
			'id' => $prefix . 'background',
			'type' => 'checkbox_list',				
			'options' => array(						
				'video' => 'video',	
				'geomap' => 'Map',    
                                'img' => 'Image',    
			),
			'desc' => 'Choose your background'
		)
	)
);

//inclua a Classe aqui
require_once('metabox/meta-box.php');

//aqui é onde se criam os meta boxes ....
foreach ($meta_boxes as $meta_box) {
	new RW_Meta_Box($meta_box);
}


/**
 * Validation class
 * Define ALL validation methods inside this class
 * Use the names of these methods in the definition of meta boxes (key 'validate_func' of each field)
 */
class RW_Meta_Box_Validate {
	function check_name($text) {
		if ($text == 'Anh Tran') {
			return 'He is Rilwis';
		}
		return $text;
	}
}

?>