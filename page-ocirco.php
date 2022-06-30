<?php /* Template Name: O Circo */ get_header(); ?>

<div id="conteudo-ocirco">
	<div id="esquerda-ocirco">
        <div id="titulo-ocirco">
        </div><!-- #titulo-ocirco -->

        <div id="post-ocirco">

        <?php if (have_posts()) : ?><!-- Inicio Loop -->
            <?php while (have_posts()) : the_post(); ?>    
            <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?><!-- Fim Loop -->

        <div class="saibamais-post-ocirco"></div>
        </div><!-- #post-ocirco -->
		
		 <div id="rodape-conteudo-ocirco">

			
			  <div class="btn-comochegar">
                    <a class="a-btn-comochegar" href="<?php bloginfo( 'url' ); ?>/como-chegar"></a>
                </div><!-- .btn-comochegar -->
			
                <div class="btn-equipe">
                    <a class="a-btn-equipe" href="<?php bloginfo( 'url' ); ?>/equipe"></a>
              </div><!-- .btn-equipe -->
				
				 <div class="btn-lojinha">
                    <a class="a-btn-lojinha" href="<?php bloginfo( 'url' ); ?>/lojinha"></a>
                </div><!-- .btn-lojinha -->
				
				                <div class="btn-blog">
                    <a class="a-btn-blog" href="<?php bloginfo( 'url' ); ?>/blog"></a>
                </div><!-- .btn-blog -->


        </div><!-- #rodape-conteudo-ocirco -->

	</div><!-- #esquerda-ocirco -->
	
	<?php get_sidebar( 'ocirco' ); ?>

</div><!-- #conteudo-ocirco -->

</div><!-- #main -->

<?php get_footer( 'ocirco' ); ?>

