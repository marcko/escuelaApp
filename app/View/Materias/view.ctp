<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	
	<dl>
		<dt>Nombre</dt>
		<dd><?php echo $materia['Materia']['nombre']; ?>&nbsp;</dd>
		<dt>Tetramestre</dt>
		<dd><?php echo $materia['Tetramestre']['nombre']; ?>&nbsp;</dd>
		<dt>Carrera</dt>
		<dd><?php echo $materia['Carrera']['nombre']; ?>&nbsp; </dd>
		<dt>Plan Estudio</dt>
		<dd><?php echo $materia['PlanEstudio']['nombre']; ?>&nbsp; </dd>
		<dt>Clave</dt>
		<dd><?php echo $materia['Materia']['clave'] ?>&nbsp; </dd>
		<dt>Creditos</dt>
		<dd><?php echo $materia['Materia']['creditos']; ?>&nbsp; </dd>
		<dt>Maestro</dt>
		<dd><?php echo $materia['Maestro']['nombre']; ?>&nbsp; </dd>
		<dt>Hora</dt>
		<dd><?php echo $materia['Hora']['hora']; ?>&nbsp; </dd>
		<dt>Usuario </dt>
		<dd><?php echo $materia['Usuario']['nombre']; ?>&nbsp; </dd>
		<dt>Creado</dt>
		<dd><?php echo $materia['Materia']['created']; ?>&nbsp; </dd>
		<dt>Modificado</dt>
		<dd><?php echo $materia['Materia']['modified']; ?>&nbsp; </dd>
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Materias'), array('action' => 'index')); ?> </li>
	</ul>
</div>

