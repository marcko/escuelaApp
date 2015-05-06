<div class="municipios form">
<?php echo $this->Form->create('Municipio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Municipio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Municipio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Municipio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colonias'), array('controller' => 'colonias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colonia'), array('controller' => 'colonias', 'action' => 'add')); ?> </li>
	</ul>
</div>
