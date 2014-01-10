<?php get_header( 'blog' ); ?>

<div id="conteudo-single">
	<div id="sombra-esquerda-blog"></div><!-- #sombra-esquerda-blog -->
    <div id="esquerda-single">

	
        <div id="post-single">

			
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>	

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

				<?php endwhile; ?>

	        <!-- Fim Loop -->

        </div><!-- #post-single -->

	</div><!-- #esquerda-single -->
    <div id="sombra-direita-blog"></div><!-- #sombra-direita-blog -->

<?php get_sidebar( 'blog' ); ?>

</div><!-- #conteudo-single -->

<?php get_footer( 'espetaculos' ); ?>
