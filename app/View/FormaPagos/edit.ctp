<div class="formaPagos form">
<?php echo $this->Form->create('FormaPago'); ?>
	<fieldset>
		<legend><?php echo __('Editar Forma Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
	<!--
<?php
	if($status==1){
		$status= "checked";
	}else
		$status="";

?>-->
	
	<input type="checkbox" name="data[Tetramestre][status]" checked="<?php echo $status?>">
	<label>Activo</label>
	
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('listar alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar alumnos'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
<!--		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormaPago.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FormaPago.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('action' => 'index')); ?></li>
-->	</ul>
</div>
