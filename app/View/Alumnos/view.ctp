<div class="alumnos view">
<h2><?php echo __('Alumno'); ?></h2>
	<dl>
		<dt>N° de control</dt>
		<dd>
			<?php echo h($alumno['Alumno']['id']); ?>
			&nbsp;
		</dd>
		<dt>Nombre</dt>
		<dd>
			<?php echo h($alumno['Alumno']['nombre']); ?>
			&nbsp;
		</dd>
		<dt>Apellido paterno</dt>
		<dd>
			<?php echo h($alumno['Alumno']['ap_pat']); ?>
			&nbsp;
		</dd>
		<dt>Apellido materno</dt>
		<dd>
			<?php echo h($alumno['Alumno']['ap_mat']); ?>
			&nbsp;
		</dd>
		<dt>Lugar de nacimiento</dt>
		<dd>
			<?php echo h($alumno['Alumno']['lugar_nac']); ?>
			&nbsp;
		</dd>
		<dt>Fecha de nacimiento</dt>
		<dd>
			<?php echo h($alumno['Alumno']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt>RFC</dt>
		<dd>
			<?php echo h($alumno['Alumno']['rfc']); ?>
			&nbsp;
		</dd>
		<dt>Nacionalidad</dt>
		<dd>
			<?php echo h($alumno['Alumno']['nacionalidad']); ?>
			&nbsp;
		</dd>
		<dt>Estado civil</dt>
		<dd>
			<?php echo h($alumno['Alumno']['estado_civil']); ?>
			&nbsp;
		</dd>
		<dt>Domicilio</dt>
		<dd>
			<?php echo h($alumno['Alumno']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt>Municipio</dt>
		<dd>
			<?php echo h($alumno['Municipio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt>Estado</dt>
		<dd>
			<?php echo $alumno['Estado']['nombre'] ?>
			&nbsp;
		</dd>
		<dt>Telefono de trabajo</dt>
		<dd>
			<?php echo h($alumno['Alumno']['tel_trabajo']); ?>
			&nbsp;
		</dd>
		<dt>CP</dt>
		<dd>
			<?php echo h($alumno['Alumno']['cp']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Tel Oficina'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['tel_oficina']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Movil'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['tel_movil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($alumno['Carrera']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('trabajo'); ?></dt>
		<dd>
			<?php echo h($datoslaborales['DatosLaborale']['trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('puesto'); ?></dt>
		<dd>
			<?php echo h($datoslaborales['DatosLaborale']['puesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('direccion'); ?></dt>
		<dd>
			<?php echo h($datoslaborales['DatosLaborale']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['modified']); ?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Alumno'), array('action' => 'edit', $alumno['Alumno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo alumno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Documentos entregados'), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de avance reticular'), array('controller' => 'reticular_avances', 'action' => 'index')); ?> </li>
	</ul>
</div>

