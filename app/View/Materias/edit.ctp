<div class="materias form">
<?php echo $this->Form->create('Materia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Materia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tetramestre_id');
		echo $this->Form->input('carrera_id');
		echo $this->Form->input('plan_estudio_id');
		echo $this->Form->input('clave');
		echo $this->Form->input('nombre');
		echo $this->Form->input('creditos');
		echo $this->Form->input('maestro_id');
		echo $this->Form->input('hora_id');
	?>
	</fieldset>
	<?php
	if($status==1){
		$status= "checked";
	}else
		$status="";
	?>
	
	<input type="checkbox" name="data[Materia][status]" checked="<?php echo $status?>">
	<label>Activo</label>
	</fieldset>
<?php echo $this->Form->end(('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo 'Acciones'; ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Materias'), array('action' => 'index')); ?></li>
		</ul>
</div>
