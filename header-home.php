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

<!-- Google Fonts API -->
<link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
?>

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

</head><!-- #head -->
<body class="home-page">

<div id="lampadas-home">
</div> <!-- #lampadas-home -->

<div id="segura">

<div id="wrapper">

<div id="header-home">
		<div id="logo-header-home">
			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>
		</div><!-- #logo-header-home -->

		<div id="access">
            <div id="carta-contato">
    	        <a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>
            </div><!-- #carta-contato -->
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
</div><!-- #header-home -->

	<div id="main">