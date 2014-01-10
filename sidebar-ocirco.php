<div id="sidebar-ocirco">

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