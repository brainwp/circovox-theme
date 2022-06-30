

<?php get_header( 'single-e-pages' ); ?>

<div id="conteudo-pages">
	<div id="esquerda-pages">
        <div id="post-pages">

<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>


        </div><!-- #post-pages -->

	</div><!-- #esquerda-pages -->

<?php get_sidebar( 'single-e-pages' ); ?>

</div><!-- #conteudo-pages -->

<?php get_footer( 'espetaculos' ); ?>