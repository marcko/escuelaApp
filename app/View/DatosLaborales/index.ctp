<div class="datosLaborales index">
	<h2><?php echo __('Datos Laborales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trabajo'); ?></th>
			<th><?php echo $this->Paginator->sort('puesto'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datosLaborales as $datosLaborale): ?>
	<tr>
		<td><?php echo h($datosLaborale['DatosLaborale']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($datosLaborale['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $datosLaborale['Alumno']['id'])); ?>
		</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['trabajo']); ?>&nbsp;</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['puesto']); ?>&nbsp;</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['created']); ?>&nbsp;</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['modified']); ?>&nbsp;</td>
		<td><?php echo h($datosLaborale['DatosLaborale']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($datosLaborale['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $datosLaborale['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $datosLaborale['DatosLaborale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $datosLaborale['DatosLaborale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $datosLaborale['DatosLaborale']['id']), array(), __('Are you sure you want to delete # %s?', $datosLaborale['DatosLaborale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Datos Laborale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
