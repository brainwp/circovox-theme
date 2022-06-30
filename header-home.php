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

<!-- Efeito jQuery Paralax -->
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/includes/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/includes/js/jquery.levitation.js"></script>

<script>
$(document).ready(function(){
   	$('#home-1').levitation(50, 50, 0);
	$('#home-2').levitation(50, 50, 0);
	$('#home-3').levitation(50, 50, 0);
	$('#home-4').levitation(50, 50, 0);
	$('#home-5').levitation(50, 50, 0);
	$('#home-6').levitation(50, 50, 0);
	$('#home-7').levitation(50, 50, 0);
	$('#home-8').levitation(50, 50, 0);
	$('#home-9').levitation(50, 50, 0);
	$('#sapatos').levitation(50, 50, -6);
	$('#trapezio').levitation(50, 50, -1);
	$('#tecido').levitation(50, 50, -1);
	$('#lampadas').levitation(48, 0, 1);
});        
  </script>
<!-- Efeito jQuery Paralax -->

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
<body>

<div id="main-home">
<div id="home-1"></div>
<div id="home-2"></div>
<div id="home-3"></div>
<div id="home-4"></div>
<div id="home-5"></div>
<div id="home-6"></div>
<div id="home-7"></div>
<div id="home-8"></div>
<div id="home-9"></div>
<div id="sapatos"></div>
<div id="trapezio"></div>	
<div id="tecido"></div>
<div id="lampadas"></div>

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