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
			<?php echo $this->Html->link($deposito['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $deposito['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposito'); ?></dt>
		<dd>
			<?php echo h($deposito['Deposito']['deposito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($deposito['Deposito']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deposito['Cargo']['forma_pago_id'], array('controller' => 'cargos', 'action' => 'view', $deposito['Cargo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deposito'), array('action' => 'edit', $deposito['Deposito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deposito'), array('action' => 'delete', $deposito['Deposito']['id']), array(), __('Are you sure you want to delete # %s?', $deposito['Deposito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Depositos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deposito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
