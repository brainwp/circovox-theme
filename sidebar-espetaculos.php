<div id="sidebar-espetaculos">

<div id="prateleira-espetaculos">        
<?php 
//Adiciona a Prateleira
require_once (get_stylesheet_directory() . '/includes/prateleira.php');
?>
</div><!-- #prateleira-espetaculos -->
        
<div id="agenda-espetaculos">
<?php 
//Adiciona o Loop CPT Agenda no Sidebar
require_once (get_stylesheet_directory() . '/includes/loop_agenda_sidebar.php');
?>
</div><!-- #agenda-espetaculos -->
        
<?php 
//Adiciona o Newsletter e Redes Sociais
require_once (get_stylesheet_directory() . '/includes/news_e_redes.php');
?>        
            
</div><!-- #sidebar-espetaculos -->