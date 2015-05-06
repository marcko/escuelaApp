<div class="maestros view">
<h2><?php echo __('Maestro'); ?></h2>
	<dl>		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Cel'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['tel_cel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Trabajo'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['tel_trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Casa'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['tel_casa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domicilio'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grado Escolaridad'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['grado_escolaridad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($maestro['Maestro']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Editar Maestro'), array('action' => 'edit', $maestro['Maestro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Maestros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Maestro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
