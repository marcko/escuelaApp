<div class="reticularAvances view">
<h2><?php echo __('Reticular Avance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reticularAvance['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $reticularAvance['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reticularAvance['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $reticularAvance['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calificacion'); ?></dt>
		<dd>
			<?php echo h($reticularAvance['ReticularAvance']['calificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reticularAvance['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $reticularAvance['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reticular Avance'), array('action' => 'edit', $reticularAvance['ReticularAvance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reticular Avance'), array('action' => 'delete', $reticularAvance['ReticularAvance']['id']), array(), __('Are you sure you want to delete # %s?', $reticularAvance['ReticularAvance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reticular Avances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reticular Avance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
