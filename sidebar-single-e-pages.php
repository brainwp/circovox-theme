<div id="sidebar-single">

<div id="prateleira-single">

<?php
// Condi��o para adicionar a Prateleira din�mica nas PAGES/
if ( is_page() ) {  ?>

<?php 
//Adiciona a Prateleira
require_once (get_stylesheet_directory() . '/includes/prateleira.php');
?>

<?php } elseif ( is_single() || is_post_type_archive()) { ?>
      
<!-- Prateleira Fixa -->

		<div id="prateleira">
		<div id="bg-prat"></div><!-- #bg-prat -->
        
            <div id="superior-prat">
            </div><!-- #superior-prat -->
            
            <div id="conteudo-prat">
			<a class="a-prat" href="<?php bloginfo( 'url' ); ?>/fotos-e-videos">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/fotos-e-videos.png"/>
            </a>
            
            <a class="a-prat" href="<?php bloginfo( 'url' ); ?>/projetos">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/projetos.png"/>
            </a>
            
            <a class="a-prat" href="<?php bloginfo( 'url' ); ?>/espetaculos">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/espetaculos.png"/>
            </a>
            
            <a class="a-prat" href="<?php bloginfo( 'url' ); ?>/eventos">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/eventos.png"/>
            </a>
            
            <a class="a-prat" href="<?php bloginfo( 'url' ); ?>/clientes">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/clientes.png"/>
            </a>
            </div><!-- #conteudo-prat -->
			
		<div id="hack-sidebar"></div>
        </div><!-- #prateleira -->

<!-- Prateleira Fixa -->

<?php
// Fim condi��o para adicionar a Prateleira din�mica nas PAGES/
}	?>
</div><!-- #prateleira-single -->
        
<?php
// Condi��o para remover a Agenda do Sidebar na p�gina nossa-agenda/
if ( is_page( 'nossa-agenda' ) ) {  ?>
<?php } else { ?>

<div id="agenda-eventos">
<?php 
//Adiciona o Loop CPT Agenda no Sidebar
require_once (get_stylesheet_directory() . '/includes/loop_agenda_sidebar.php');
?>
</div><!-- #agenda-eventos -->

<?php
// Fim da condi��o para remover a Agenda do Sidebar na p�gina nossa-agenda/
}	?>
        
   
<?php 
//Adiciona o Newsletter e Redes Sociais
require_once (get_stylesheet_directory() . '/includes/news_e_redes.php');
?>        
            
</div><!-- #sidebar-single -->