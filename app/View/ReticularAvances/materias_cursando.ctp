<div class="reticularAvances form">
<?php echo $this->Form->create('ReticularAvance'); ?>
	<fieldset>
		<legend><?php echo __('Seleccionar materias en curso'); ?></legend>
	</fieldset>
        
        <table>
            <thead>
                <tr>
                    <th colspan="7"><center>Materias pendientes</center></th>
                </tr>
            </thead>
            <tr>
                <th>Materia</th>
                <th>Plan de estudio</th>
                <th>Tetramestre</th>
                <th>Tetramestre fecha inicio</th>
                <th>Tetramestre fecha fin</th>
                <th>Hora</th>
                <th>Cursar</th>
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
                    echo "<td><input type='checkbox' name='data[Materia][".$res['Materia']['id']."]' value=".$res['Materia']['id']."></td>";
                    echo "</tr>";
                }
                ?>
        </table>
        <input type="hidden" name="data[Alumno][id]" value="<?php echo $id ?>">
        <input type="hidden" name="data[Alumno][clave]" value="<?php echo $clave ?>">
        
        
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Datos Alumno '), array('controller' => 'Alumnos', 'action' => 'index',$id)); ?> </li>
	</ul>
</div>
