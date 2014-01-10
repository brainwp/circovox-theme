<div class="my_meta_control">
	
	<div id="campo_meta">
    <label>Data</label>
	<p>
		<input type="text" name="_my_meta[ag_data]" value="<?php if(!empty($meta['ag_data'])) echo $meta['ag_data']; ?>"/>
		<span>Adicione a data da atividade</span>
	</p>
    </div>
    
    <div id="campo_meta">
    <label>Endere&ccedil;o</label>
    <p>
		<input type="text" name="_my_meta[ag_endereco]" value="<?php if(!empty($meta['ag_endereco'])) echo $meta['ag_endereco']; ?>"/>
		<span>Adicione o endere&ccedil;o da atividade</span>
	</p>
    </div>
    
	<div id="campo_meta">
    <label>Hor&aacute;rio</label>
	<p>
		<input type="text" name="_my_meta[ag_hora]" value="<?php if(!empty($meta['ag_hora'])) echo $meta['ag_hora']; ?>"/>
		<span>Hor&aacute;rio do evento</span>
	</p>
    </div>

    <div id="campo_meta">
    <label>Quanto?</label>
	<p>
		<input type="text" name="_my_meta[ag_quanto]" value="<?php if(!empty($meta['ag_quanto'])) echo $meta['ag_quanto']; ?>"/>
		<span>Pre&ccedil;o do ingresso</span>
	</p>
    </div>
    
    <div id="campo_meta">
    <label>Descri&ccedil;&atilde;o</label>
	<p>
		<textarea name="_my_meta[ag_description]" rows="3"><?php if(!empty($meta['ag_description'])) echo $meta['ag_description']; ?></textarea>
		<span>Descreva em poucas palavras o que &eacute; a atividade</span>
	</p>
    </div>

    <div id="campo_meta">
    <label>Classifica&ccedil;&atilde;o</label>
	<p>
		<input type="text" name="_my_meta[ag_idade]" value="<?php if(!empty($meta['ag_idade'])) echo $meta['ag_idade']; ?>"/>
		<span>Idade m&iacute;nima permitida. Use apenas n&uacute;meros</span>
	</p>
    </div>
    
    <div id="hack-meta"></div>    

</div>