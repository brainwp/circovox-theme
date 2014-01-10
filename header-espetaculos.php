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

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
?>

<!-- Scripts do Toggle -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/toggle.js"></script> 
<!-- Fim - Scripts do Toggle -->


<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>


</head><!-- #head -->
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

<div id="header-espetaculos">

		<div id="logo-header-espetaculos">
			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>
		</div><!-- #logo-header-espetaculos -->
           
            <div id="access">
				<div id="carta-contato">
				<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>
				</div><!-- #carta-contato -->
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
            </div><!-- #access -->

</div><!-- #header-espetaculos -->

	<div id="main">