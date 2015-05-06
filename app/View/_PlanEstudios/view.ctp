<div class="planEstudios view">
<h2><?php echo __('Plan Estudio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planEstudio['PlanEstudio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($planEstudio['PlanEstudio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($planEstudio['PlanEstudio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($planEstudio['PlanEstudio']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($planEstudio['PlanEstudio']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Plan Estudio'), array('action' => 'edit', $planEstudio['PlanEstudio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Plan Estudios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Plan Estudio'), array('action' => 'add')); ?> </li>
	</ul>
</div>

