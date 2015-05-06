<div class="formaPagos view">
<h2><?php echo __('Forma Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formaPago['FormaPago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($formaPago['FormaPago']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('listar alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar alumnos'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Conceptos'), array('controller' => 'conceptos', 'action' => 'add')); ?></li>
	<!--
		<li><?php echo $this->Html->link(__('Edit Forma Pago'), array('action' => 'edit', $formaPago['FormaPago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Forma Pago'), array('action' => 'delete', $formaPago['FormaPago']['id']), array(), __('Are you sure you want to delete # %s?', $formaPago['FormaPago']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('action' => 'add')); ?> </li>
		-->
	</ul>
</div>
