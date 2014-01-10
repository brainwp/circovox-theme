<div id="sidebar-eventos">
<div id="prateleira-eventos">        
<?php 
//Adiciona a Prateleira
require_once (get_stylesheet_directory() . '/includes/prateleira.php');
?>
</div><!-- #prateleira-eventos -->

<div id="agenda-eventos">
<?php 
//Adiciona o Loop CPT Agenda no Sidebar
require_once (get_stylesheet_directory() . '/includes/loop_agenda_sidebar.php');
?>
</div><!-- #agenda-eventos -->

<?php 
//Adiciona o Newsletter e Redes Sociais
require_once (get_stylesheet_directory() . '/includes/news_e_redes.php');
?>       
</div><!-- #sidebar-eventos -->