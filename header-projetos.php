﻿<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php	
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>

</title><!-- #title -->

<!-- Google Fonts API -->
<link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/toggle.js"></script> 

<?php wp_head(); ?>

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

</head><!-- #head -->
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<div id="header-projetos">
            <div id="logo-header-projetos">
			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>
            </div><!-- #logo-header-projetos -->
            
            <div id="access">
				<div id="carta-contato">
				<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>
				</div><!-- #carta-contato -->
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

            </div><!-- #access-projetos -->

<!--
<div id="banner_br-header">
<embed wmode="transparent"
src="http://circovox.com.br/wp-content/uploads/234x60_banner_petro.swf"
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"
width="234" height="60"></embed>
</div> #banner_br -->

</div><!-- #header-projetos -->

	<div id="main">