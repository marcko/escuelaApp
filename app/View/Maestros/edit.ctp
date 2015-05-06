<div class="maestros form">
<?php echo $this->Form->create('Maestro'); ?>
	<fieldset>
		<legend><?php echo __('Editar Maestro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('correo');
		echo $this->Form->input('tel_cel');
		echo $this->Form->input('tel_trabajo');
		echo $this->Form->input('tel_casa');
		echo $this->Form->input('domicilio');
		echo $this->Form->input('grado_escolaridad');
	?>
	</fieldset>
	<?php
	if($status==1){
		$status= "checked";
	}else
		$status="";
	?>
	
	<input type="checkbox" name="data[Maestro][status]" checked="<?php echo $status?>">
	<label>Activo</label>
	
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Maestros'), array('action' => 'index')); ?></li>
	</ul>
</div>
