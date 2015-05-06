<div class="cargos index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Id</th>
			<th>alumno</th>
			<th>creado</th>
			<th>concepto</th>
			<th>fecha pago</th>
			<th>descripcion</th>
			<th>modificado</th>
			<th>status</th>
			<th>forma pago</th>
			<th>abono</th>
			<th>cargo</th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cargos as $cargo): 
	
	
	?>
	<tr>
		<td><?php echo $cargo['Cargo']['id']; ?>&nbsp;</td>
		<td>
		<!--	<?php echo $this->Html->link($cargo['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $cargo['Alumno']['id'])); ?> -->
		<?php echo $cargo['Alumno']['nombre']; ?>&nbsp;		
		</td>
		<td><?php echo $cargo['Cargo']['created']; ?>&nbsp;</td>
		<td>
		<!--	<?php echo $this->Html->link($cargo['Concepto']['nombre'], array('controller' => 'conceptos', 'action' => 'view', $cargo['Concepto']['id'])); ?>-->
		<?php echo $cargo['Concepto']['nombre']; ?>&nbsp;		
		</td>
		<td><?php echo $cargo['Cargo']['fecha_pago']; ?>&nbsp;</td>
		<td><?php echo $cargo['Cargo']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $cargo['Cargo']['modified']; ?>&nbsp;</td>
		<td><?php 
		/*echo h($cargo['Cargo']['status']); */
		 if ($cargo['Cargo']['status'] == 0){
			echo 'Pendiente';}
		else{
			echo 'Pagado';
		}
		
		?>&nbsp;</td>
		<td>
		<!--	<?php echo $this->Html->link($cargo['FormaPago']['nombre'], array('controller' => 'forma_pagos', 'action' => 'view', $cargo['FormaPago']['id'])); ?>-->
		<?php echo $cargo['FormaPago']['nombre']; ?>&nbsp;
		</td>
		<td><?php echo $cargo['Cargo']['abono']; ?>&nbsp;</td>
		<td><?php echo $cargo['Cargo']['cargo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cargo['Cargo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cargo['Cargo']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cargo['Cargo']['id']), array(), __('Are you sure you want to delete # %s?', $cargo['Cargo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Conceptos'), array('controller' => 'conceptos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Conceptos'), array('controller' => 'mostrardatos', 'action' => 'add')); ?></li>
<!--
<li><?php echo $this->Html->link(__('info'), array('controller' => 'conceptos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevo Cargo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Concepto'), array('controller' => 'conceptos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Forma Pago'), array('controller' => 'forma_pagos', 'action' => 'add')); ?> </li>
	-->	
	</ul>
</div>
