<div id="sidebar-single">

<div id="prateleira-single">        
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
            
            <a class="a-prat" href="<?php bloginfo( 'url' ); ?>/escola">
            <img class="img-prat" src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/palavras/escola.png"/>
            </a>
            </div><!-- #conteudo-prat -->
			
		<div id="hack-sidebar"></div>
        </div><!-- #prateleira -->

<!-- Prateleira Fixa -->
</div><!-- #prateleira-single -->
        
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