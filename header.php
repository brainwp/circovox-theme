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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/toggle.js"></script> 

<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
?>

<?php if (is_page('o-circo')) { /* Se for a página O Circo exibe a estrutura e css abaixo */ ?>

</head><!-- #head -->

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

<body <?php body_class(); ?>>

        <div id="img-header-ocirco">

        </div><!-- #img-header-ocirco -->

<div id="wrapper" class="hfeed">

<div id="header-ocirco">

		<div id="superior-header-ocirco">

		<div id="logo-header-ocirco">

			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>

		</div><!-- #logo-header-ocirco -->

            <div id="access">

				<div id="carta-contato">

				<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>

				</div><!-- #carta-contato -->

				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

            </div><!-- #access -->

        </div><!-- #superior-header-ocirco -->

        <div id="img-personas-ocirco">

        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/personagens-ocirco-v2.png">

        </div><!-- #img-personas-ocirco -->

</div><!-- #header-ocirco -->

<?php } else if (is_page('vip')) { /* Se for a página VIP exibe a estrutura e css abaixo */ ?>
</head><!-- #head -->

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

<body class="page-vip">

<div id="wrapper" class="hfeed">

<div id="header-ocirco">

		<div id="superior-header-ocirco">

		<div id="logo-header-ocirco">

			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>

		</div><!-- #logo-header-ocirco -->

			<div id="top-area-vip">

		</div><!-- #top-area-vip -->

            <div id="access">

            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

            <div id="carta-contato">

        	<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>

        	</div><!-- #carta-contato -->

            </div><!-- #access -->

        </div><!-- #superior-header-ocirco -->

</div><!-- #header-ocirco -->

<?php } else if (is_page('contatos')) { ?>

<!-- Dados para formulário Via LocaWeb -->
<script type="text/javascript">
function checkEmail (strng) {
	var flagError = false;
	var error="";
	
	if (strng == "") {
		error = "O endereço de e-mail deve ser preenchido.";
		flagError = true;
	}
	
	if (!flagError) {
		var illegalChars = /(@.*@)|(@\.)|(@\-)|(@_)(\.@)|(\-@)|(\.\.)|(^\.)|(\.$)|(\.\-)|(\._)|(\-\.)|(_\.)|(^_)|(_$)|(_\-)|(\-\-)|(^\-)|(\-$)|(\-_)/;
		if (strng.match(illegalChars)) {
			error = "O endereço de e-mail contém caracteres inválidos.";
			flagError = true;
		}
	}

	if (!flagError) {
		var emailFilter = /^\S+\@(\[?)[a-zA-Z0-9_\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!(emailFilter.test(strng))) { 
			error = "O endereço de e-mail não está em um formato válido.";
			flagError = true;
		}
	}

	if (!flagError) {
		var emailFilter = /^([a-zA-Z0-9\@_\-\.\+]+)$/;
		if (!(emailFilter.test(strng))) { 
			error = "O endereço de e-mail não está em um formato válido.";
			flagError = true;
		}
	}

	if (flagError) {
		window.alert(error);
	}

	return !flagError;
}
</script>
</head><!-- #head -->

<?php
/* Adiciona o Google Analytics */
echo (get_option('mo_ga_code'));
?>

<body class="page-contatos">

<div id="wrapper" class="hfeed">

<div id="header-pages">

		<div id="logo-header-branco">

			<a class="a-logo" href="<?php bloginfo( 'url' ); ?>"></a>

		</div><!-- #logo-header-branco -->

			<div id="access">

			<div id="carta-contato">

        	<a class="a-carta" href="<?php bloginfo( 'url' ); ?>/contatos"></a>

        	</div><!-- #carta-contato -->	

            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

            </div><!-- #access -->

</div><!-- #header-pages -->

<?php } ?>

	<div id="main">