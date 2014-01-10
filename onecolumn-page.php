<?php
/**
 * Template Name: One column, no sidebar
 *
 * Uma página sem a Barra Lateral
 *
 */

 get_header( 'projetos' ); ?>

		<div id="center-pages">

			<div id="post-single-cpt">

			<!-- Inicio Loop -->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( is_front_page() ) { ?>
							<h2 class="entry-title"><?php the_title(); ?></h2>
						<?php } else { ?>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php } ?>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-content -->
			</div><!-- #post-single-cpt# -->

					<?php comments_template( '', true ); ?>

			<?php endwhile; ?>
			<!-- Fim Loop -->

			</div><!-- #post-single-cpt -->

		</div><!-- #center-pages -->
	
<?php get_footer(); ?>
