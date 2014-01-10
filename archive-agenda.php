<?php get_header( 'single-e-pages' ); ?>

<div id="conteudo-pages">
	<div id="esquerda-pages">
        <div id="post-pages">
        
        <div id="titulo-agenda">
	    </div><!-- #titulo-agenda-->

		<!-- Loop do CPT Agenda -->
<?php
$temp = $wp_query; $wp_query = null; $wp_query = new WP_Query();
$wp_query->query('post_type=agenda' . '&paged=' . $paged . '&posts_per_page=8&order=DESC');
while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
        
        <div id="evnt-agenda">
			<div id="dt-agenda">
            	<h3><?php echo $my_meta['ag_data']; ?></h3>
            </div><!-- #dt-agenda -->
            
            <div id="nm-agenda">
            	<h2><?php the_title(); ?></h2>
            </div><!-- #nm-agenda -->
            
            <div id="desc-agenda">
            	<p><?php echo $my_meta['ag_description']; ?></p>
            </div><!-- #desc-agenda -->
            
            	<p><span class="negrito">Hor&aacute;rio:</span>
                <?php echo $my_meta['ag_hora']; ?></p>

            	<p><span class="negrito">Endere&ccedil;o:</span>
                <?php echo $my_meta['ag_endereco']; ?></p>
            	
                <p><span class="negrito">Valor:</span>
            	<?php echo $my_meta['ag_quanto']; ?></p>
            
            <div id="classif-agenda">
				<?php
				// Verifica a idade e imprime a classificação indicativa
				$idade = $my_meta['ag_idade'];
				$end_img = get_bloginfo( 'stylesheet_directory' )."/imagens/classificacao/";
				if($idade >= 1 && $idade<9) {
				$resp = '<img src="'.$end_img.'livre.jpg" />';}
				else if ($idade >= 10 && $idade <=11 ){
				$resp = '<img src="'.$end_img.'10.jpg" />';}
				else if ($idade >= 12 && $idade <=13 ){
				$resp = '<img src="'.$end_img.'12.jpg" />';}
				else if ($idade >= 14 && $idade <=15 ){
				$resp = '<img src="'.$end_img.'14.jpg" />';}
				else if ($idade >= 16 && $idade <=17 ){
				$resp = '<img src="'.$end_img.'16.jpg" />';}
				else if ($idade >= 18 ){
				$resp = '<img src="'.$end_img.'18.jpg" />';}
				else {
				$resp = '<img src="'.$end_img.'livre.jpg" />';}
				echo "$resp";
				?>                
            </div><!-- #classif-agenda -->
		</div><!-- #evnt-agenda -->

<?php endwhile;
if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
$wp_query = null; $wp_query = $temp; ?>

        
        <!-- Loop do CPT Agenda -->

        </div><!-- #post-pages -->
	</div><!-- #esquerda-pages -->

<?php get_sidebar( 'single-e-pages' ); ?>

</div><!-- #conteudo-pages -->

<?php get_footer( 'espetaculos' ); ?>