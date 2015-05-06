<div class="documentaciones form">
<?php echo $this->Form->create('Documentacione'); ?>
	<fieldset>
		<legend><?php echo __('Editar documentos'); ?></legend>
	<?php
	
		echo $this->Form->input('id');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('tit_pro_maestria');
		echo $this->Form->input('ced_pro_maestria');
		echo $this->Form->input('cer_estu_maestria');
		echo $this->Form->input('ced_pro_licenciatura');
		echo $this->Form->input('identificacion_oficial');
		echo $this->Form->input('credencial_snte');
		echo $this->Form->input('acta_nac');
		echo $this->Form->input('curr_vitae');
		echo $this->Form->input('carta_motivo');
		echo $this->Form->input('fotografia_id');
		echo $this->Form->input('usuario_id');
		
	?>
	</fieldset>
	
<?php echo $this->Form->end(__('Guardar')); ?>

