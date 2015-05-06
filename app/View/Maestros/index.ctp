<div class="maestros index">
	<h2><?php echo __('Maestros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Telefono celular</th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($maestros as $maestro): ?>
	<tr>
		<td><?php echo $maestro['Maestro']['nombre']; ?>&nbsp;</td>
		<td><?php echo $maestro['Maestro']['correo']; ?>&nbsp;</td>
		<td><?php echo $maestro['Maestro']['tel_cel']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $maestro['Maestro']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $maestro['Maestro']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Maestro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Buscar Maestro'), array('action' => 'buscar')); ?></li>
	</ul>
</div>
