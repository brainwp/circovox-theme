<?php get_header('home'); ?>
<div id="conteudo-home">
<div id="borda-slider">
<div id="brd-esquerda"></div>
<div id="brd-centro">
<div id="brd-superior"></div>
<div id="brd-slider">
<?php if (function_exists('wp_content_slider')) { wp_content_slider(); } ?>
</div>
<div id="brd-inferior"></div>
</div>
<div id="brd-direita"></div>
</div><!-- #borda-slider -->
</div><!-- #conteudo-home -->
<?php get_footer(); ?>