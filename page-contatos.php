<?php /* Template name: Contatos */ get_header(); ?>

<div id="conteudo-contatos">
	<div id="esquerda-contatos">
        <div id="titulo-contatos">
        </div><!-- #titulo-contatos -->
		
        <div id="form-contatos">
		<?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
               <?php the_content(); ?>
               <?php endwhile; ?>
    	<?php endif; ?>
        </div><!-- #form-contatos -->
        
	</div><!-- #esquerda-contatos -->

</div><!-- #conteudo-contatos -->
<div id="sombra-contatos"></div>

<?php get_footer( 'ocirco' ); ?>