<div class="materias index">
	<h2><?php echo __('Materias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Nombre</th>
			<th>Carerra</th>
			<th>Maestro</th>
			<th>Hora</th>
			<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo $materia['Materia']['nombre']; ?></td>
		<td><?php echo $materia['Carrera']['nombre']; ?></td>
		<td><?php echo $materia['Maestro']['nombre']; ?></td>
		<td><?php echo $materia['Hora']['hora']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $materia['Materia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $materia['Materia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Materia'), array('action' => 'add')); ?></li>
	</ul>
</div>
