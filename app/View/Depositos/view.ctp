<div class="depositos view">
<h2><?php echo __('Deposito'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deposito['Deposito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
		<!--	<?php echo $this->Html->link($deposito['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $deposito['Alumno']['id'])); ?>-->
			<?php echo h($deposito['Alumno']['nombre']); ?>&nbsp;
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($deposito['Deposito']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($deposito['Deposito']['monto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Deposito'), array('action' => 'edit', $deposito['Deposito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Elimina Deposito'), array('action' => 'delete', $deposito['Deposito']['id']), array(), __('Are you sure you want to delete # %s?', $deposito['Deposito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
