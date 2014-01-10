	</div><!-- #main -->

	<div id="footer-projetos" role="contentinfo">
    
    	<div id="esquerda-footer">
        <p><?php echo stripslashes (get_option('mo_footer_end')); ?></p>
        </div><!-- #esquerda-footer -->

		<div id="centro-footer">
        <a href=""></a>
        </div><!-- #centro-footer -->
        
        <div id="direita-footer">
        <a href="http://circovox.com.br/contatos/"><?php echo stripslashes (get_option('mo_footer_mail')); ?></a>
        <p>Todos os Direitos Reservados <?php echo date('Y'); ?></p>
        </div><!-- #direita-footer -->

	</div><!-- #footer-projetos -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body><!-- #body -->
</html>