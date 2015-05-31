
<div class="tetramestres form">
	<table class="table table-hover">
	
		<thead>
			<tr>
				<th>Matricula</th>
				<th>Nombre</th>
				<th>Apellidos</th>				
				<th>Carrera</th>
				<th>Correo</th>
			</tr>
		</thead>
	<?php 
	$carreraTipo = null;

	foreach ($Alumno as $value):
	$matriculaAlumno = $value['Alumno']['matricula'];
	$nombreAlumno = $value['Alumno']['nombre'];
	$apellPatAlumno = $value['Alumno']['ap_pat'];
	$apellMatAlumno = $value['Alumno']['ap_mat'];
	$apellMatAlumno = $value['Alumno']['ap_mat'];
	$correAlumno = $value['Alumno']['correo'];
	$carreraAlumno = $value['Carrera']['nombre'];
	if ( $value['Carrera']['tipo'] == 1){

		$carreraTipo = "Licenciatura";
	}else if( $value['Carrera']['tipo'] == 2){

		$carreraTipo = 	"Maestria";
	}else{

		$carreraTipo = "Doctorado";
	}
	?>
		<tbody>
			<tr>
			<td><?php echo $matriculaAlumno; ?></td>
				<td><?php echo $nombreAlumno; ?></td>
				<td><?php echo $apellPatAlumno." ".$apellMatAlumno; ?></td>
				
				<td><?php echo $carreraAlumno; ?></td>
				<td><?php echo $correAlumno; ?></td>
				<td><?php echo $carreraTipo; ?></td>
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
