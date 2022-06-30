<?php /* Template name: Projetos */ get_header( 'projetos' ); ?>

<div id="conteudo-projetos">
	<div id="bg-projetos">

	<div id="esquerda-projetos">
		<div class="hack-fixed">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/personagem-gallo-projetos.png" width="193" height="475" />
        </div><!-- .hack-fixed -->
	</div><!-- #esquerda-projetos -->

		<div id="centro-projetos">
			<div id="superior-centro-projetos">
            		<div id="titulo-projetos">
				    </div><!-- #titulo-projetos -->
                    
                    <div id="captacao-realizados">
                    	
                        <div id="btn-captacao">
                        	<a class="a-btn-captacao" href="<?php bloginfo( 'url' ); ?>/projetos-em-captacao/"></a>
                        </div><!-- #btn-captacao -->
                        
                        <div id="btn-realizados">
                        	<span class="span-btn-realizados"></span>
                        </div><!-- #btn-realizados -->
                    </div><!-- #captacao-realizados -->
                    
            </div><!-- #superior-centro-projetos -->
            
            <div id="linha-sup"></div>

            <!-- Inicio Loop -->
			<?php query_posts( array( 'projetos_category' => 'ja-realizados' ) ); ?>
        	<?php if( is_tax() ) { global $wp_query; }  ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <div class="post-projetos">

			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			           
		    </div><!-- .post-projetos -->
    
      		<?php endwhile; else: ?>
       		<?php endif; ?>
            
	        <!-- Fim Loop -->

		<div id="linha-inf"></div>

        </div><!-- #centro-projetos -->
    
    <div id="direita-projetos">
	    <div class="hack-fixed">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/personagem-elena-projetos.png" height="475" />
        </div><!-- .hack-fixed -->
    </div><!-- #direita-projetos -->
	</div><!-- #bg-projetos -->
</div><!-- #conteudo-projetos -->

<?php get_footer( 'projetos' ); ?>