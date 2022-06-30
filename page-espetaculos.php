<?php /* Template name: Espet&aacute;culos */ get_header( 'espetaculos' ); ?>

<div id="conteudo-espetaculos">
	<div id="esquerda-espetaculos">
        <div id="titulo-espetaculos">
        </div><!-- #titulo-espetaculos -->

        <div id="post-espetaculos">

            <!-- Inicio Loop -->
            
            <?php
			$args = array( 'post_type' => 'espetaculos', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="post-espetaculos">

			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			           
		    </div><!-- .post-espetaculos -->
			<?php endwhile;
			?>
            
            

	        <!-- Fim Loop -->

        <div class="saibamais-post-espetaculos"></div>
        </div><!-- #post-espetaculos -->

	</div><!-- #esquerda-espetaculos -->

<?php get_sidebar( 'espetaculos' ); ?>

</div><!-- #conteudo-espetaculos -->

<?php get_footer( 'espetaculos' ); ?>