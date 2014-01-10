	</div><!-- #main -->

	<div id="rodape-espetaculos" role="contentinfo">
    
    	<div id="esquerda-footer">
        <p class="red"><?php echo stripslashes (get_option('mo_footer_end')); ?></p>
        </div><!-- #esquerda-footer -->

		<div id="centro-footer-espetaculos">
        <a href=""></a>
        </div><!-- #centro-footer-blog -->
        
        <div id="direita-footer">
        <a class="red" href="http://circovox.com.br/contatos/"><?php echo stripslashes (get_option('mo_footer_mail')); ?></a>
        <p class="red">Todos os Direitos Reservados <?php echo date('Y'); ?></p>
        </div><!-- #direita-footer -->

	</div><!-- #rodape-espetaculos -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body><!-- #body -->
</html>