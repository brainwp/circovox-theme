<!-- Loop do CPT Agenda para Sidebar's-->

<div id="agenda-geral">

	<div id="titulo-agenda-espetaculos">
	<a href="<?php bloginfo( 'url' ); ?>/nossa-agenda">
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/imagens/titulo-agenda-sidebar.png" />
    </a>
    </div><!-- #titulo-agenda-espetaculos -->
            
<div id="bg-eventos-agenda">
	
    <!-- Loop -->        
	<?php $newsArgs = array( 'order' => 'DESC', 'orderby' => 'meta_value', 'meta_key' => 'ag_data', 'post_type' => 'agenda', 'posts_per_page' => 3);                   
    $newsLoop = new WP_Query( $newsArgs );                  
    while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
    <?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>

   	<div class="evento-agenda">

       	<div class="data-evento-agenda">
			<p><?php echo $my_meta['ag_data']; ?></p>
	    </div><!-- .data-evento-agenda -->
    
        <div class="titulo-evento-agenda">
           	<?php the_title(); ?>
		</div><!-- .titulo-evento-agenda -->

		<div class="desc-evento-agenda">
        	<p><?php echo $my_meta['ag_description']; ?></p>
		</div><!-- .desc-evento-agenda -->
            
	</div><!-- #evento-agenda -->

	<?php endwhile; ?>
	<!-- Loop -->
    
    <a class="todos-eventos" href="<?php bloginfo( 'url' ); ?>/nossa-agenda">Ver todos eventos>></a>

</div><!-- #bg-eventos-agenda -->
            
</div><!-- #agenda-geral -->