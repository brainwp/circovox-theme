<!DOCTYPE html>
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

<?php wp_head(); ?>

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

</head><!-- #head -->
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<div id="header-contatos">
		<div id="logo-header-contatos">
			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>
		</div><!-- #logo-header-contatos -->
            
            <div id="access-contatos">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
            <div id="carta-contato">
        	<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>
        	</div><!-- #carta-contato -->
            </div><!-- #access-contatos -->

</div><!-- #header-contatos -->

	<div id="main">