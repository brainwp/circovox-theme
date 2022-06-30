<?php get_header( 'projetos' ); ?>

		<div id="center-pages">

			<div id="post-single-cpt">

				<!-- Inicio Loop -->
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
					<div class="entry-content">
						<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
		
					<script type="text/javascript">
						// focus on search field after it has loaded
						document.getElementById('s') && document.getElementById('s').focus();
					</script>
							<!-- Fim Loop -->

			</div><!-- #post-single-cpt -->

		</div><!-- #center-pages -->
	

	<?php get_footer( ); ?>






