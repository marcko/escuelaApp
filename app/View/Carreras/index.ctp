<div class="carreras index">
	<h2><?php echo __('Programa'); ?></h2>
	<br>
		
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Nombre</th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carreras as $carrera): ?>
	<tr>
		<td><?php echo $carrera['Carrera']['nombre']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $carrera['Carrera']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carrera['Carrera']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nueva  Carrera'), array('action' => 'add')); ?></li>
	</ul>
</div>
