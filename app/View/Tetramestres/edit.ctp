<div class="tetramestres form">
<?php echo $this->Form->create('Tetramestre'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tetramestre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array('maxlength'=>'50'));
		echo $this->Form->input('periodo_inicio');
		echo $this->Form->input('periodo_fin');
	?>
	</fieldset>
	<?php
	if($status==1){
		//echo "Esta activo";die;
		$status= "checked";
	}else
		$status="";
		//echo "No Esta activo";die;
	?>
	
	<input type="checkbox" name="data[Tetramestre][status]" checked="<?php echo $status?>">
	<label>Activo</label>
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tetramestres'), array('action' => 'index')); ?></li>
	</ul>
</div>
