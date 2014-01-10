<?php /* Template Name: Blog */ get_header( 'blog' ); ?>

<div id="conteudo-blog">

	<div id="sombra-esquerda-blog"></div><!-- #sombra-esquerda-blog -->
    <div id="esquerda-blog">

        <div id="titulo-blog">

        </div><!-- #titulo-blog -->

        <!-- Inicio Loop -->
		<?php         
        // Get the posts
        $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
        ?>

	    <?php foreach($myposts as $post) : ?>	
        <?php setup_postdata($post); ?>

        <div class="post-blog">
					
            <h1 class="titulo-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p class="time"><?php twentyten_posted_on(); ?></p>
            <?php the_content(); ?>

        <div class="saibamais-post-ocirco"></div>
		
			<div class="entry-utility">
				<?php if ( count( get_the_category() ) ) : ?>
					<span class="cat-links">
						<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->

        <div class="linha-blog"></div><!-- #linha-top-rodape-conteudo-ocirco -->

        </div><!-- #post-blog -->

        <?php endforeach; ?>
        <!-- Fim Loop -->

	</div><!-- #esquerda-blog -->
    <div id="sombra-direita-blog"></div><!-- #sombra-direita-blog -->

<?php get_sidebar( 'blog' ); ?>

        <div class="hack-sidebar"></div>

</div><!-- #conteudo-blog -->

<?php get_footer( 'blog' ); ?>