<div class="conceptos view">
<h2><?php echo __('Concepto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($concepto['Concepto']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Concepto'), array('action' => 'edit', $concepto['Concepto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Concepto'), array('action' => 'delete', $concepto['Concepto']['id']), array(), __('Are you sure you want to delete # %s?', $concepto['Concepto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('listar alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar alumnos'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Conceptos'), array('controller' => 'conceptos', 'action' => 'add')); ?></li>
<!--		<li><?php echo $this->Html->link(__('List Conceptos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concepto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
-->	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cargos'); ?></h3>
	<?php if (!empty($concepto['Cargo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Concepto Id'); ?></th>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Forma Pago'); ?></th>
		<th><?php echo __('Abono'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($concepto['Cargo'] as $cargo): ?>
		<tr>
			<td><?php echo $cargo['id']; ?></td>
			<td><?php echo $cargo['alumno_id']; ?></td>
			<td><?php echo $cargo['created']; ?></td>
			<td><?php echo $cargo['concepto_id']; ?></td>
			<td><?php echo $cargo['fecha_pago']; ?></td>
			<td><?php echo $cargo['descripcion']; ?></td>
			<td><?php echo $cargo['modified']; ?></td>
			<td><?php echo $cargo['status']; ?></td>
			<td><?php echo $cargo['forma_pago']; ?></td>
			<td><?php echo $cargo['abono']; ?></td>
			<td><?php echo $cargo['cargo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), array(), __('Are you sure you want to delete # %s?', $cargo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
