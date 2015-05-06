<div class="datosLaborales view">
<h2><?php echo __('Datos Laborale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($datosLaborale['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $datosLaborale['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajo'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puesto'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['puesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($datosLaborale['DatosLaborale']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($datosLaborale['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $datosLaborale['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Datos Laborale'), array('action' => 'edit', $datosLaborale['DatosLaborale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Datos Laborale'), array('action' => 'delete', $datosLaborale['DatosLaborale']['id']), array(), __('Are you sure you want to delete # %s?', $datosLaborale['DatosLaborale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Laborales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Laborale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
