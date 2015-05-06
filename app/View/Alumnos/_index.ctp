<div class="alumnos index">
	<h2>Alumnos</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>N° de control</th>
			<th>Nombre</th>
			<th>Apellido paterno</th>
			<th>Apellido materno</th>
			<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo $alumno['Alumno']['id']; ?>&nbsp;</td>
		<td><?php echo $alumno['Alumno']['nombre']; ?>&nbsp;</td>
		<td><?php echo $alumno['Alumno']['ap_pat']; ?>&nbsp;</td>
		<td><?php echo $alumno['Alumno']['ap_mat']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $alumno['Alumno']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ingresar nuevo Alumno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Avance reticular'), array('controller'=>'ReticularAvances', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Documentacion entregada'), array('controller'=>'documentaciones', 'action' => 'index')); ?></li>

	</ul>
</div>
