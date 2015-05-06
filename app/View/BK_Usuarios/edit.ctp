<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('label'=>'Nombre completo'));
		//echo $this->Form->input('apellido');
		echo $this->Form->input('correo');
		echo $this->Form->input('tel');
		echo $this->Form->input('nom_usuario',array("label"=>"Nombre Usuario"));
		echo $this->Form->input('contrasena',array("label"=>"Contraseña"));
		echo $this->Form->input('contrasena ',array("label"=>"Confirmar Contraseña"));
	?>
	</fieldset>
	<?php
	if($status==1){
		$status= "checked";
	}else
		$status="";
	?>
	
	<input type="checkbox" name="data[Usuario][status]" checked="<?php echo $status?>">
	<label>Activo</label>
<?php echo $this->Form->end(__('Guardar Cambios')); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
