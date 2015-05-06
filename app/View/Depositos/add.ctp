<div class="depositos form">
<?php echo $this->Form->create('Deposito'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Deposito'); ?></legend>
	<?php
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('concepto');
		echo $this->Form->input('monto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Depositos'), array('action' => 'index')); ?></li>
	</ul>
</div>
