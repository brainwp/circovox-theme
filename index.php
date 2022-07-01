<?php get_header('home'); ?>

<div id="conteudo-home">
  
  <?php 

	include_once(ABSPATH .'wp-admin/includes/plugin.php');

	if ( is_plugin_active( 'smart-slider-3/smart-slider-3.php' ) ) {  ?>

<div id="borda-slider">

<div id="brd-esquerda"></div>

<div id="brd-centro">

<div id="brd-superior"></div>

<div id="brd-slider">

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>

</div>

<div id="brd-inferior"></div>

</div>

<div id="brd-direita"></div>

</div><!-- #borda-slider -->

  <?php } ?>
  
</div><!-- #conteudo-home -->

<?php get_footer('home'); ?>
