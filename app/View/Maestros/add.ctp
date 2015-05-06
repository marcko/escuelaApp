<div class="maestros form">
<?php echo $this->Form->create('Maestro'); ?>
	<fieldset>
		<legend><?php echo __('Agregar  Maestro'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('correo');
		echo $this->Form->input('tel_cel');
		echo $this->Form->input('tel_trabajo');
		echo $this->Form->input('tel_casa');
		echo $this->Form->input('domicilio');
		echo $this->Form->input('grado_escolaridad');
		//echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Listar Maestros'), array('action' => 'index')); ?></li>
	</ul>
</div>
