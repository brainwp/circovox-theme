<?php
 get_header( 'projetos' ); ?>

	<div id="center-pages">

			<div id="post-single-cpt">
			
			<!-- Inicio Loop -->
			<?php
			/* Run the loop to output the attachment.
			 * If you want to overload this in a child theme then include a file
			 * called loop-attachment.php and that will be used instead.
			 */
			get_template_part( 'loop', 'attachment' );
			?>

			</div><!-- #post-single-cpt -->

		</div><!-- #center-pages -->
	
<?php get_footer(); ?>
