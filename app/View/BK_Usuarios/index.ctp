<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Nombre de usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Creado</th>
			<th>Modificado</th>
			<th class="actions"><?php echo ('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo $usuario['Usuario']['id']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['nombre']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['nom_usuario']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['contrasena']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['correo']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['tel']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['created']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php #echo $this->Html->link(__('Ver'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>

</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
