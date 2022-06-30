<div id="sidebar-ocirco">

<!--
<div id="banner_br">
<embed wmode="transparent"
src="http://circovox.com.br/wp-content/uploads/234x60_banner_petro.swf"
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"
width="234" height="60"></embed>
</div> #banner_br -->

<div id="prateleira-ocirco">        
<?php 
//Adiciona a Prateleira
require_once (get_stylesheet_directory() . '/includes/prateleira.php');
?>
</div><!-- #prateleira-ocirco -->
        
<div id="agenda-ocirco">
<?php 
//Adiciona o Loop CPT Agenda no Sidebar
require_once (get_stylesheet_directory() . '/includes/loop_agenda_sidebar.php');
?>
</div><!-- #agenda-ocirco -->
        
<?php 
//Adiciona o Newsletter e Redes Sociais
require_once (get_stylesheet_directory() . '/includes/news_e_redes.php');
?>

</div><!-- #sidebar-ocirco -->