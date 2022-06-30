	</div><!-- #main -->

	<div id="footer" role="contentinfo">
    
    	<div id="esquerda-footer">
        <p class="red"><?php echo stripslashes (get_option('mo_footer_end')); ?></p>
		<a class="red" href="http://circovox.com.br/contatos/"><?php echo stripslashes (get_option('mo_footer_mail')); ?></a>
        <p class="red">Todos os Direitos Reservados <?php echo date('Y'); ?></p>
        </div><!-- #esquerda-footer -->
        
        <div id="direita-footer">
        </div><!-- #direita-footer -->

	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body><!-- #body -->
</html>