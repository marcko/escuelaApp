<div class="maestros index">
<?php echo $this->Form->create('Maestro'); ?>
	<fieldset>
        <legend><?php echo __(' Buscar Maestro por nombre'); ?></legend>       
        <br>
        <input type="text" name="nombre_maestro">
        <?php echo $this->Form->end(__('Buscar'));
        
        if(isset($result)){
            echo "<table>";
            echo "<tr><th> Nombre </th><th>Accion</th></tr>";
            foreach($result as $res){
                echo "<tr>";
                    echo "<td>";
                    echo $res['maestros']['nombre'];
                    echo "</td>";
                    echo "<td>";
                    echo $this->Html->link(__('Ver'), array('action' => 'view', $res['maestros']['id']));
                    echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
        
        ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Maestro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Buscar Maestro'), array('action' => 'buscar')); ?></li>
	</ul>
</div>