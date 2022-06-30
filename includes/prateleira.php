<div id="prateleira">
		<div id="bg-prat"></div><!-- #bg-prat -->
        
            <div id="superior-prat">
            </div><!-- #superior-prat -->
            
            <div id="conteudo-prat">
			<?php
			    global $wp_query;
				$postid = $wp_query->post->ID;
                $checkbox_list = get_post_meta($postid, 'voxprat', false);
                //A prateleira funciona com arrays, descomente a linha abaixo que ela exibe quantos elementos possuem marcados para essa página.
				//echo "Total Checkboxes =" .count($checkbox_list);
            
                foreach ($checkbox_list as $checkbox_list) {
                echo '<a class="a-prat" href="'.get_bloginfo('url').'/'.$checkbox_list.'"><img class="img-prat" src="'.get_bloginfo('stylesheet_directory').'/imagens/palavras/'.$checkbox_list.'.png"/></a>';
                }
				wp_reset_query();
            ?>            
            </div><!-- #conteudo-prat -->
			
		<div id="hack-sidebar"></div>
</div><!-- #prateleira -->