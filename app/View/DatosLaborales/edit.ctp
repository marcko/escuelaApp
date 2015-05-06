<div class="datosLaborales form">
<?php echo $this->Form->create('DatosLaborale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Datos Laborale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('trabajo');
		echo $this->Form->input('puesto');
		echo $this->Form->input('direccion');
		echo $this->Form->input('status');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DatosLaborale.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DatosLaborale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Datos Laborales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
