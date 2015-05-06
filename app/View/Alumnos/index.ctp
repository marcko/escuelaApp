

<div class="tetramestres form">
<?php echo $this->Form->create(); ?>
	<fieldset>
		<legend>Buscar alumno por numero de control:</legend>
                <input type="text" name="data[Alumno][buscar]" >
		<input type="hidden" name="data[Alumno][bandera]" value="1">
	</fieldset>
	
<?php echo $this->Form->end(__('Buscar'));


    if(isset($datos[0]['Alumno'])){
      
      echo "
		<table border='1'>
			<tr><td colspan='2'><center><b>Datos personales</b></center></td></tr>
			<tr>
				<td><b>Numero de control </b></td><td>".$datos[0]['Alumno']['clave']."</td>
			</tr>
			<tr>
				<td><b>Nombre </b></td><td>".$datos[0]['Alumno']['nombre']." ".$datos[0]['Alumno']['ap_pat']." ".$datos[0]['Alumno']['ap_mat']."</td>
			</tr>
			<tr>
				<td><b>Lugar de nacimiento </b></td><td>".$datos[0]['Alumno']['lugar_nac']."</td>
			</tr>
			<tr>
				<td><b>Fecha de nacimiento </b></td><td>".$datos[0]['Alumno']['fecha_nac']."</td>
			</tr>
			<tr>
				<td><b>Nacionalidad </b></td><td>".$datos[0]['Alumno']['nacionalidad']."</td>
			</tr>
			<tr>
				<td><b>Carrera </b></td><td>".$datos[0]['Carrera']['nombre']."</td>
			</tr>
			<tr>
				<td><b>Correo </b></td><td>".$datos[0]['Alumno']['correo']."</td>
			</tr>	
			<tr><td colspan='2'><center><b>Domicilio</b></center></td></tr>
			<tr>
				<td><b>Calle </b></td><td>".$datos[0]['Alumno']['domicilio']."</td>
			</tr>
			<tr>
				<td><b>Colonia </b></td><td>".$datos[0]['Colonia']['nombre']."</td>
			</tr>
			<tr>
				<td><b>CP </b></td><td>".$datos[0]['Alumno']['cp']."</td>
			</tr>
			<tr>
				<td><b>Estado </b></td><td>".$datos[0]['Estado']['nombre']."</td>
			</tr>
			</tr>
			<tr><td colspan='2'><b><center>Telefonos de contacto</center></b></td></tr>
			<tr>
			<tr>
				<td><b>Telefono trabajo </b></td><td>".$datos[0]['Alumno']['tel_trabajo']."</td>
			</tr>
			<tr>
				<td><b>Telefono oficina </b></td><td>".$datos[0]['Alumno']['tel_oficina']."</td>
			</tr>
			<tr>
				<td><b>Telefono Movil </b></td><td>".$datos[0]['Alumno']['tel_movil']."</td>
			</tr>
					
		
		</table>";
	
	echo "<br><br>";
	echo $this->Html->link('Editar alumno',array('controller'=>'Alumnos','action'=>'edit',$datos[0]['Alumno']['id'],$datos[0]['Alumno']['clave']));
	echo "<br>";
	echo $this->Html->link(__('Avance reticular'), array('controller'=>'ReticularAvances', 'action' => 'index',$datos[0]['Alumno']['id'],$datos[0]['Alumno']['clave'])); 
	echo "<br>";
	echo $this->Html->link(__('Documentacion entregada'), array('controller'=>'documentaciones', 'action' => 'index',$datos[0]['Alumno']['id'],$datos[0]['Alumno']['clave']));

        
    }else{
	//if($bandera_busqueda){
		echo "No se encontraron resultados";
	}
    
    
   


?>



</div>


<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ingresar nuevo Alumno'), array('action' => 'add')); ?></li>
	</ul>
</div>
