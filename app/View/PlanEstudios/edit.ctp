<div class="planEstudios form">
<?php echo $this->Form->create('PlanEstudio'); ?>
	<fieldset>
		<h2><?php echo __('Editar Plan Estudio'); ?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
	<?php
	if($status==1){
		//echo "Esta activo";die;
		$status= "checked";
	}else
		$status="";
		//echo "No Esta activo";die;
	?>
	
	<input type="checkbox" name="data[PlanEstudio][status]" checked="<?php echo $status?>">
	<label>Activo</label>
	
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Plan Estudios'), array('action' => 'index')); ?></li>
	</ul>
</div>
