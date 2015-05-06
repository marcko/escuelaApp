<script>
    
   /* function valida() {
        
        

    if (!confirm
    ("Desea entrar a esta página, presione ACEPTAR, si no presione CANCELAR"))
    history.go(-1);return " "}
    document.writeln(checkAGE())
    // -->
    */
</script>

<div class="reticularAvances form">
<?php echo $this->Form->create('ReticularAvance',array('onsubmit'=>'return valida();')); ?>
	<fieldset>
		<legend><?php echo __('Liberar materias en curso'); ?></legend>
	</fieldset>
        
        
    <?php if(!empty($result)){ ?>
        <table>
            <thead>
                <tr>
                    <th colspan="8"><center>Materias cursando</center></th>
                </tr>
            </thead>
            <tr>
                <th>Materia</th>
                <th>Plan de estudio</th>
                <th>Tetramestre</th>
                <th>Tetramestre fecha inicio</th>
                <th>Tetramestre fecha fin</th>
                <th>Hora</th>
                <th>Liberar</th>
                <th>Promedio</th>
            </tr>
            
                <?php
                
                
                foreach($result as $res){
                    echo "<tr>";
                    echo "<td>".$res['Materia']['nombre']."</td>";
                    echo "<td>".$res['Materia']['PlanEstudio']['nombre']."</td>";
                    echo "<td>".$res['Materia']['Tetramestre']['nombre']."</td>";
                    echo "<td>".$res['Materia']['Tetramestre']['periodo_inicio']."</td>";
                    echo "<td>".$res['Materia']['Tetramestre']['periodo_fin']."</td>";
                    echo "<td>".$res['Materia']['Hora']['hora']."</td>";
                    echo "<td><input type='checkbox' name='data[Materia][".$res['Materia']['id']."]' value=".$res['Materia']['id']." ></td>";
                    echo "<td><input type='text' name='data[Materia][".$res['Materia']['id']."][calificacion]'  ></td>";
                    echo "</tr>";
		    echo "<br><br><b><h2>Asegurese de que antes de guardar los cambios ,en la materia que va a librerar haya ingresado el promedio!!</h2></b>";
                }
                ?>
        </table>
        <input type="hidden" name="data[Alumno][id]" value="<?php echo $id ?>">
        <input type="hidden" name="data[Alumno][clave]" value="<?php echo $clave ?>">
        
        <?php }else
                echo "<h2><b>No hay materias registradas como activas!!</b></h2>";
            ?>
        
        <br><br>
        
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Datos Alumno '), array('controller' => 'Alumnos', 'action' => 'index',$id)); ?> </li>
	</ul>
</div>
