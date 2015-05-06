<div class="planEstudios form">
<?php echo $this->Form->create('PlanEstudio'); ?>
	<fieldset>
		<h4><?php echo __('Editar Plan Estudio'); ?></h4>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Plan Estudios'), array('action' => 'index')); ?></li>
	</ul>
</div>
