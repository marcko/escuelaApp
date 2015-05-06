<div class="colonias view">
<h2><?php echo __('Colonia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($colonia['Colonia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($colonia['Colonia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Postal'); ?></dt>
		<dd>
			<?php echo h($colonia['Colonia']['codigo_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($colonia['Municipio']['nombre'], array('controller' => 'municipios', 'action' => 'view', $colonia['Municipio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Colonia'), array('action' => 'edit', $colonia['Colonia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Colonia'), array('action' => 'delete', $colonia['Colonia']['id']), array(), __('Are you sure you want to delete # %s?', $colonia['Colonia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Colonias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colonia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
