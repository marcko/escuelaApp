<div class="planEstudios form">
<?php echo $this->Form->create('PlanEstudio'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Plan Estudio'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		//echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Plan Estudios'), array('action' => 'index')); ?></li>
	</ul>
</div>
