<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['id']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['nombre']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['marca']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Existencia'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['existencia']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Unitario'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['costo_unitario']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Total'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['costo_total']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['responsable']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['created']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificacion'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['modified']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo $producto['Producto']['observaciones']; ?>
			&nbsp;
		</dd>
		</dl>
		</div>
			
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Producto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
