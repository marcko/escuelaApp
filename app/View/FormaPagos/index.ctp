<div class="formaPagos index">
	<h2><?php echo __('Forma Pagos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($formaPagos as $formaPago): ?>
	<tr>
		<td><?php echo h($formaPago['FormaPago']['id']); ?>&nbsp;</td>
		<td><?php echo h($formaPago['FormaPago']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formaPago['FormaPago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formaPago['FormaPago']['id'])); ?>
			<?php #echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formaPago['FormaPago']['id']), array(), __('Are you sure you want to delete # %s?', $formaPago['FormaPago']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Abono'), array('controller' => 'cargos', 'action' => 'busqueda')); ?></li>

	<!--
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concepto'), array('controller' => 'conceptos', 'action' => 'add')); ?> </li>
-->	</ul>
</div>
