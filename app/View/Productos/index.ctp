<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Descripcion</th>
			<th>Existencias</th>
			<th>Costo Unitario</th>
			<th>Costo Total</th>
			<th>Responsable</th>
			<th>Creado</th>
			<th>Modificado</th>
			<th>Observaciones</th>
			
			<th class="actions"><?php echo __('Cambios'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo $producto['Producto']['id']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['nombre']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['marca']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['existencia']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['costo_unitario']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['existencia']*$producto['Producto']['costo_unitario']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['responsable']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['created']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['modified']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['observaciones']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Producto'), array('action' => 'add')); ?></li>
	</ul>
</div>

