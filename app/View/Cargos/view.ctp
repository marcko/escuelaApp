<div class="cargos view">
<h2><?php echo __('Cargo'); ?></h2>
	<dl>
	<!--	<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['id']); ?>
			&nbsp;
		</dd>
		-->
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php 
			$nombreAlumno = $cargo['Alumno']['nombre']; 
			echo  $nombreAlumno?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php 
            $creado = $cargo['Cargo']['created'];
			echo  $creado  ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php
				$concepto = $cargo['Concepto']['nombre'];
			 echo  $concepto ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Pago'); ?></dt>
		<dd>
			<?php 
			$fechaPago = $cargo['Cargo']['fecha_pago'];
			echo $fechaPago; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php 
			$descripcion = $cargo['Cargo']['descripcion'];
			echo 	$descripcion ; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>

			<?php 
			$modificado = $cargo['Cargo']['modified'];
			echo $modificado   ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
	<!--		<?php// echo h($cargo['Cargo']['status']); ?>
			&nbsp;
	--><?php 
	$status;
 if (($cargo['Cargo']['cargo'])-($cargo['Cargo']['abono']) == 0){
           echo $status = 'Pagado';}
        else{
           echo $status = 'Pendiente';
        
                
        
        };
	?>


		</dd>
		<dt><?php echo __('Forma Pago'); ?></dt>
		<dd>
			<?php 
			$formaPago = $cargo['FormaPago']['nombre'];
			echo $formaPago; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abono'); ?></dt>
		<dd>
			<?php 
			$abono = $cargo['Cargo']['abono'];
			echo  $abono; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php 
			$cargos = $cargo['Cargo']['cargo'];
			echo $cargos; ?>
			&nbsp;
		</dd>
	</dl>
	<div class="actions">
		<li><?php echo $this->Html->link(__('PDF'), array('action'=>'viewPdf', $cargo['Cargo']['id']));?></li> 	
			<li><?php echo $this->Html->link(__('Facturar'), array('action'=>'send', $cargo['Cargo']['id']));?></li> 
			  </li>
	
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargo'), array('action' => 'edit', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cargo'), array('action' => 'delete', $cargo['Cargo']['id']), array(), __('Are you sure you want to delete # %s?', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('listar alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar alumnos'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Cargos'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Depositos'), array('controller' => 'depositos', 'action' => 'index')); ?></li> 
		<!--<?php// echo $this->Html->link(__('Agregar Depositos'), array('controller' => 'depositos', 'action' => 'add')); error?>-->
		<li><?php echo $this->Html->link(__('Listar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Conceptos'), array('controller' => 'conceptos', 'action' => 'add')); ?></li>
<!--		<li><?php echo $this->Html->link(__('List Cargos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptos'), array('controller' => 'conceptos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concepto'), array('controller' => 'conceptos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('controller' => 'forma_pagos', 'action' => 'add')); ?> </li>
-->
	</ul>
</div>
