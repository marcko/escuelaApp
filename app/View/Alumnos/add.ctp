<div class="alumnos form">
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend>Agregar Alumno</legend>
	<?php
		echo $this->Form->input('nombre');
		
		echo $this->Form->input('ap_pat',array('label'=>'Apellido paterno'));
		echo $this->Form->input('ap_mat',array('label'=>'Apellido materno'));
		echo $this->Form->input('lugar_nac',array('label'=>'Lugar de nacimiento'));
		#echo $this->Form->input('fecha_nac',array('label'=>'Fecha de nacimiento','type'=>'input','placeholder'=>'Formato yyyy-mm-dd'));
		echo $this->Form->input('nacionalidad');
		echo $this->Form->input('rfc');
		echo "Fecha de nacimiento";
		echo "<input type='text' name='data[Alumno][fecha_nac]' placeholder='Formato yyyy-mm-dd'>";
		echo $this->Form->input('estado_civil',array('label'=>'Estado civil','empty'=>
								   array(),'type'=>'select','options'=>$estado_civil));
		echo $this->Form->input('domicilio');
		echo $this->Form->input('colonia_id');
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('cp');
		echo $this->Form->input('tel_trabajo');
		echo $this->Form->input('tel_oficina');
		echo $this->Form->input('tel_movil');
		echo $this->Form->input('carrera_id');
		echo $this->Form->input('correo');?></fieldset>
		<fieldset>
		<legend><?php echo __('Datos laborales'); ?></legend>
		<?php
		echo $this->Form->input('trabajo');
		echo $this->Form->input('puesto');
		echo $this->Form->input('direccion');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Buscar Alumnos'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('Listar Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Datos Laborales'), array('controller' => 'datos_laborales', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Datos Laborale'), array('controller' => 'datos_laborales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Documentaciones'), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Documentacione'), array('controller' => 'documentaciones', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Listar Reticular Avances'), array('controller' => 'reticular_avances', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('Nuevo Reticular Avance'), array('controller' => 'reticular_avances', 'action' => 'add')); ?> </li>
	</ul>
</div>
