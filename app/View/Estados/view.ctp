<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($estado['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ap Pat'); ?></th>
		<th><?php echo __('Ap Mat'); ?></th>
		<th><?php echo __('Lugar Nac'); ?></th>
		<th><?php echo __('Fecha Nac'); ?></th>
		<th><?php echo __('Nacionalidad'); ?></th>
		<th><?php echo __('Estado Civil'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Municipio Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Tel Trabajo'); ?></th>
		<th><?php echo __('Tel Oficina'); ?></th>
		<th><?php echo __('Tel Movil'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Alumno'] as $alumno): ?>
		<tr>
			<td><?php echo $alumno['id']; ?></td>
			<td><?php echo $alumno['nombre']; ?></td>
			<td><?php echo $alumno['ap_pat']; ?></td>
			<td><?php echo $alumno['ap_mat']; ?></td>
			<td><?php echo $alumno['lugar_nac']; ?></td>
			<td><?php echo $alumno['fecha_nac']; ?></td>
			<td><?php echo $alumno['nacionalidad']; ?></td>
			<td><?php echo $alumno['estado_civil']; ?></td>
			<td><?php echo $alumno['domicilio']; ?></td>
			<td><?php echo $alumno['municipio_id']; ?></td>
			<td><?php echo $alumno['estado_id']; ?></td>
			<td><?php echo $alumno['tel_trabajo']; ?></td>
			<td><?php echo $alumno['tel_oficina']; ?></td>
			<td><?php echo $alumno['tel_movil']; ?></td>
			<td><?php echo $alumno['correo']; ?></td>
			<td><?php echo $alumno['created']; ?></td>
			<td><?php echo $alumno['modified']; ?></td>
			<td><?php echo $alumno['status']; ?></td>
			<td><?php echo $alumno['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), array(), __('Are you sure you want to delete # %s?', $alumno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
