<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>

		<dt>Nombre</dt>
		<dd>
			<?php echo $usuario['Usuario']['nombre']; ?>
			&nbsp;
		</dd>
		<dt>Nombre de usuario</dt>
		<dd>
			<?php echo $usuario['Usuario']['nom_usuario']; ?>
			&nbsp;
		</dd>
		<dt>Contraseña</dt>
		<dd>
			<?php echo $usuario['Usuario']['contrasena']; ?>
			&nbsp;
		</dd>
		<dt>Correo</dt>
		<dd><?php echo $usuario['Usuario']['correo']; ?>&nbsp;</dd>
		<dt>Telefono</dt>
		<dd><?php echo $usuario['Usuario']['tel']; ?>&nbsp;</dd>
		<dt>Creado</dt>
		<dd>
			<?php echo $usuario['Usuario']['created']; ?>
			&nbsp;
		</dd>
		<dt>Modificado</dt>
		<dd>
			<?php echo $usuario['Usuario']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>

