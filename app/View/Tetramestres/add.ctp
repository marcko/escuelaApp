<div class="tetramestres form">
<?php echo $this->Form->create('Tetramestre'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Tetramestre'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('maxlength'=>'50'));
		echo $this->Form->input('periodo_inicio');
		echo $this->Form->input('periodo_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tetramestres'), array('action' => 'index')); ?></li>
	</ul>
</div>
