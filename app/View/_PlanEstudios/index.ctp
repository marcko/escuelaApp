<title>Plan de estudios</title><!--El header y doby se define en el layout-->

<div class="planEstudios index">
	<h2>Plan Estudios</h2>
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('Status'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($planEstudios as $planEstudio): ?>
	<tr>
		<td><?php echo h($planEstudio['PlanEstudio']['id']); ?>&nbsp;</td>
		<td><?php echo h($planEstudio['PlanEstudio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($planEstudio['PlanEstudio']['created']); ?>&nbsp;</td>
		<td><?php echo h($planEstudio['PlanEstudio']['modified']); ?>&nbsp;</td>
		<td><?php echo h($planEstudio['PlanEstudio']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $planEstudio['PlanEstudio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $planEstudio['PlanEstudio']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $planEstudio['PlanEstudio']['id']), array(), __('Are you sure you want to delete # %s?', $planEstudio['PlanEstudio']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}')
		));
		?>
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php //echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo  Plan Estudio'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('Listar Plan de estudios'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
