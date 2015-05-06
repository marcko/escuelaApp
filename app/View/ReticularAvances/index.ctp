<script>
	//window.onload=alert("x");
	
	function valida(){
		var opcion1 =document.getElementById('opcion1');
		var opcion2 =document.getElementById('opcion2');
		var opcion3 =document.getElementById('opcion3');
		var opcion4 =document.getElementById('opcion4');
		
		if (! (opcion1.checked==true || opcion2.checked==true || opcion3.checked==true || opcion4.checked==true )) {
			alert("Selecciona una opcion de busqueda!");
			return false;
		}
		return true;
	}
</script>
<div class="reticulravance form">
<?php echo $this->Form->create(array("onsubmit"=>"return valida()")); ?>
	<fieldset>
		
		<legend>Avance reticular</legend><br>

		<input type="radio" id="opcion1" name="data[ReticularAvance][buscar]" value="1"><label>Materias Pendiente</label>
		<br>
		<input type="radio" id="opcion2" name="data[ReticularAvance][buscar]" value="2"><label>Materias Cursando</label>
		<br>
		<input type="radio" id="opcion3" name="data[ReticularAvance][buscar]" value="3"><label>Materias Aprobadas</label>
		<br>
		<input type="radio" id="opcion4" name="data[ReticularAvance][buscar]" value="4"><label>Todas las materias</label>
		<br>
		<br><b><h3>Número de control</h3></b><br>
		
                <input type="text" name="data[ReticularAvance][clave]" readonly="true" value="<?php echo $clave; ?>">
		<input type="hidden" name="data[ReticularAvance][control]" value="<?php echo $id; ?>" >
	</fieldset>
	
<?php echo $this->Form->end(__('Buscar'));


    if(isset($datos)){
	
	if($bandera ==1){
		$estado = "Materias pendientes";
	}
	else if($bandera==2){
		$estado ="Materia en curso";
	}
	else if($bandera==3){
		$estado="Materias aprobadas";
	}
	else if($bandera==4){
		$estado = "Todas las materias";
	}
	
	
	?>
	<div align="center">
		<b><h3><?php echo $estado ?></h3></b>
	</div>
	<table>
            <tr>
                <th>Carrera</th>
		<th>Tetramestre</th>
                <th>Plan de estudio</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Creditos</th>
                <th>Maestro</th>
                <th>Hora</th>
		<?php if($bandera ==4){
			echo "<th>Estatus</th>";
			}
		?>
		<th>Calificación</th>
            </tr>
<?php 	//echo "<pre>";
        //print_r($datos);
        //echo "</pre>";die;
	
	foreach($datos as $datos){
	?>
        
            <tr>
                <td><?php echo $datos['Carrera']['nombre'] ?></td>
		<td><?php echo $datos['Tetramestre']['nombre'] ?></td>
                <td><?php echo $datos['PlanEstudio']['nombre'] ?></td>
                <td><?php echo $datos['Materia']['clave'] ?></td>
                <td><?php echo $datos['Materia']['nombre'] ?></td>
                <td><?php echo $datos['Materia']['creditos'] ?></td>
                <td><?php echo $datos['Maestro']['nombre'] ?></td>
                <td><?php echo $datos['Hora']['hora'] ?></td>
		<?php if($bandera==4){
				if( $datos['ret_avance']['aprobada']==1 ){
					$name="Pendiente";
				}else if($datos['ret_avance']['aprobada']==2){
					$name="En curso";			
				}
				else if($datos['ret_avance']['aprobada']==3){
					$name = "Aprobada";			
				}
			
			echo "<td>".$name."</td>";
			}
		?>
		<td><?php echo $datos['ret_avance']['calificacion'] ?></td>
            </tr>
        
<?php	} ?>
	</table>

<?php  }else{
	//echo "No se encontraron resultados";
}
    
?>



</div>
<div>
	<?php echo $this->Html->link('Agregar materias cursando',array('action'=>'materias_cursando',$id,$clave)); ?><br><br>
	<?php echo $this->Html->link('Liberar materias cursando',array('action'=>'liberar_materias',$id,$clave)); ?>
</div>