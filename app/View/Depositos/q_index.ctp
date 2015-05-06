<div class="depositos index">
	<h2><?php echo __('Depositos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deposito'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($depositos as $deposito): ?>
	<tr>
		<td><?php echo h($deposito['Deposito']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deposito['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $deposito['Alumno']['id'])); ?>
		</td>
		<td><?php echo h($deposito['Deposito']['deposito']); ?>&nbsp;</td>
		<td><?php echo h($deposito['Deposito']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deposito['Cargo']['forma_pago_id'], array('controller' => 'cargos', 'action' => 'view', $deposito['Cargo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deposito['Deposito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deposito['Deposito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deposito['Deposito']['id']), array(), __('Are you sure you want to delete # %s?', $deposito['Deposito']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Deposito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
