<div class="tetramestres index">
	<h2><?php echo __('Tetramestres'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Nombre</th>
			<th>Periodo inicio</th>
			<th>Periodo fin</th>
			<th>Creado</th>
			<th>Modificado</th>
			<th>Usuario</th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tetramestres as $tetramestre): ?>
	<tr>
		<td><?php echo $tetramestre['Tetramestre']['nombre']; ?>&nbsp;</td>
		<td><?php echo $tetramestre['Tetramestre']['periodo_inicio']; ?>&nbsp;</td>
		<td><?php echo $tetramestre['Tetramestre']['periodo_fin']; ?>&nbsp;</td>
		<td><?php echo $tetramestre['Tetramestre']['created']; ?>&nbsp;</td>
		<td><?php echo $tetramestre['Tetramestre']['modified']; ?>&nbsp;</td>
		<td><?php echo $tetramestre['Usuario']['nombre']; ?>&nbsp;</td>
		<td class="actions">
			<?php #echo $this->Html->link(__('Ver'), array('action' => 'view', $tetramestre['Tetramestre']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tetramestre['Tetramestre']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Tetramestre'), array('action' => 'add')); ?></li>
	</ul>
</div>
