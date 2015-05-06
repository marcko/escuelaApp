<div class="documentaciones view">
<h2><?php echo __('Documentación'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentacione['Alumno']['nombre'], array('controller' => 'alumnos', 'action' => 'view', $documentacione['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo  Profes  Maestria '); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['tit_pro_maestria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula  Profes  Maestria'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['ced_pro_maestria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certificado Est Maestria'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['cer_estu_maestria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula Prof Licenciatura'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['ced_pro_licenciatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion Oficial'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['identificacion_oficial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credencial Snte'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['credencial_snte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta Nacacimiento'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['acta_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curriculo Vitae'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['curr_vitae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carta Motivo'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['carta_motivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fotografia'); ?></dt>
		<dd>
			<?php echo h($documentacione['Fotografia']['tamaño']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($documentacione['Documentacione']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($documentacione['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar documentacion'), array('action' => 'edit', $documentacione['Documentacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $documentacione['Documentacione']['id']), array(), __('Are you sure you want to delete # %s?', $documentacione['Documentacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?> </li>
	</ul>
</div>
