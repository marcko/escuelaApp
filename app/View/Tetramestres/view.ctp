<div class="tetramestres view">
<h2><?php echo __('Tetramestre'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tetramestre['Tetramestre']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($tetramestre['Tetramestre']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($tetramestre['Tetramestre']['modified']); ?>
			&nbsp;
		</dd>

		
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tetramestre'), array('action' => 'edit', $tetramestre['Tetramestre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tetramestres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tetramestre'), array('action' => 'add')); ?> </li>
	</ul>
</div>