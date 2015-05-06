<div class="materias form">
<?php echo $this->Form->create('Materia'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Materia'); ?></legend>
	<?php
	//echo "<pre>";
	//print_r($dia);
	//echo "</pre>";die;
	
		echo $this->Form->input('nombre');
		echo $this->Form->input('clave');
		echo $this->Form->input('creditos');
		echo $this->Form->input('tetramestre_id');
		echo $this->Form->input('carrera_id');
		echo $this->Form->input('plan_estudio_id');
		echo $this->Form->input('maestro_id');
		echo $this->Form->input('hora_id');
		/*echo "
		Dia<br><select name='data[Materia][dia]'>
			<option value='Lunes'>Lunes</option>
			<option value='Martes'>Martes</option>
			<option value='Miercoles'>Miercoles</option>
			<option value='Jueves'>Jueves</option>
			<option value='Viernes'>Viernes</option>
		</select>
		";*/
	?>
		
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Materias'), array('action' => 'index')); ?></li>
	</ul>
</div>

