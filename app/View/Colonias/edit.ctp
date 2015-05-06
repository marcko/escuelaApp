<div class="colonias form">
<?php echo $this->Form->create('Colonia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Colonia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('codigo_postal');
		echo $this->Form->input('municipio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Colonia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Colonia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Colonias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
