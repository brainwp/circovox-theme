<?php /* Template name: Eventos */ get_header( 'eventos' ); ?>

<div id="conteudo-eventos">
	<div id="esquerda-eventos">
        <div id="titulo-eventos">
        </div><!-- #titulo-eventos -->
        
        <div id="resumo-eventos">
        <!-- Inicio Loop -->
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
        <!-- Fim Loop -->
        </div><!-- #resumo-eventos -->

        <div id="post-eventos">
        <?php
		$args = array( 'post_type' => 'eventos', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>        
        <div id="cada-eventos">
        <div id="thumb-eventos">
        <a href="<?php the_permalink() ?>" rel="bookmark">
		<?php if ( has_post_thumbnail()) the_post_thumbnail('thumb-eventos'); ?>
        </a>
        </div>
        <div id="titulos-cada-eventos">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        </div>
        <div id="excerpt-eventos">
        <?php echo excerpt( 25 ); ?>
        </div>
        <div id="mais-eventos">
        <a href="<?php the_permalink() ?>">Leia mais>></a>
        </div>
        </div><!-- #cada-eventos -->

		<?php endwhile;	?>

	    <!-- Fim Loop -->

        <div class="saibamais-post-eventos"></div>
        </div><!-- #post-eventos -->
        
	</div><!-- #esquerda-eventos -->

<?php get_sidebar( 'single-e-pages' ); ?>

</div><!-- #conteudo-eventos -->

<?php get_footer( 'eventos' ); ?>