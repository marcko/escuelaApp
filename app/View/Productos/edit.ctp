<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Producto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('marca');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('existencia');
		echo $this->Form->input('costo_unitario');
		
		echo $this->Form->input('responsable');
		echo $this->Form->input('observaciones');
		
		?>
	</fieldset>
	<?php
	if($status==1){
		$status= "checked";
	}else
	{
		$status="";
}
?>
	<input type="checkbox" name="data[Producto][status]" checked="<?php echo $status ?>" >
	<label>Activo</label>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lista de Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>
