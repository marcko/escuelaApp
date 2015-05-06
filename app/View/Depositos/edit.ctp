<div class="depositos form">
<?php echo $this->Form->create('Deposito'); ?>
	<fieldset>
		<legend><?php echo __('Editar Deposito'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('concepto');
		echo $this->Form->input('monto');
	?>
	</fieldset>
	
<!--	
<?php
	if($status==1){
		$status= "checked";
	}else
		$status="";

?>
	-->
	<input type="checkbox" name="data[Tetramestre][status]" checked="<?php echo $status?>">
	<label>Activo</label>
	
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deposito.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Deposito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
