
<div class="tetramestres form">
	<table class="table table-hover">
	
		<thead>
			<tr>
				<th>Matricula</th>
				<th>Nombre</th>
				<th>Carrera</th>
			</tr>
		</thead>
	<?php 

	foreach ($Alumno as $value):

	$nombreAlumno = $value['Alumno']['nombre'];
	$matriculaAlumno = $value['Alumno']['matricula'];
	$carreraAlumno = $value['Carrera']['nombre'];
	?>
		<tbody>
			<tr>
			<td><?php echo $matriculaAlumno; ?></td>
				<td><?php echo $nombreAlumno; ?></td>
				
				<td><?php echo $carreraAlumno; ?></td>
			</tr>
		</tbody>
		


<?php
	endforeach;
	?>

		
	</table>

</div>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ingresar nuevo Alumno'), array('action' => 'add')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Buscar'), array('action' => 'index')); ?></li>
	</ul>
</div>
