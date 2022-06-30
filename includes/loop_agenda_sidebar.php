<!-- Loop do CPT Agenda para Sidebar's-->

<div id="agenda-geral">

	<div id="titulo-agenda-espetaculos">
	<a href="<?php bloginfo( 'url' ); ?>/nossa-agenda">
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/titulo-agenda-sidebar.png" />
    </a>
    </div><!-- #titulo-agenda-espetaculos -->
            
<div id="bg-eventos-agenda">
    
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget_agenda') ) : 
 
endif; ?>
    
    <a class="todos-eventos" href="<?php bloginfo( 'url' ); ?>/nossa-agenda">Ver todos eventos>></a>

</div><!-- #bg-eventos-agenda -->
            
</div><!-- #agenda-geral -->