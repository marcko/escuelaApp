<div class="alumnos form">
<?php
/*echo "<pre>";
print_r($datoslaborales);
echo "</pre>";*/
?>
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend><?php echo __('Editar Alumno'); ?></legend>
	<?php
		#echo "<pre>";
		#print_r($this->request->data);
		#echo "</pre>";die;
			
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo$this->Form->input('rfc');
		echo $this->Form->input('ap_pat',array('label'=>'Apellido paterno'));
		echo $this->Form->input('ap_mat',array('label'=>'Apellido materno'));
		echo $this->Form->input('lugar_nac',array('label'=>'Lugar de nacimiento'));
		#echo $this->Form->input('fecha_nac');
		echo $this->Form->input('nacionalidad');
		echo "Fecha de nacimiento";
		echo "<input type='text' name='data[Alumno][fecha_nac]' value='".$this->request->data['Alumno']['fecha_nac']."' placeholder='Formato yyyy-mm-dd'>";
		
		echo $this->Form->input('estado_civil',array('label'=>'Estado civil','empty'=>
								   array(),'type'=>'select','options'=>$estado_civil));
		echo $this->Form->input('domicilio');
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('cp');
		echo $this->Form->input('tel_trabajo');
		echo $this->Form->input('tel_oficina');
		echo $this->Form->input('tel_movil');
		echo $this->Form->input('carrera_id');
		echo $this->Form->input('correo');?></fieldset>
		<fieldset>
		<legend><?php echo __('Datos laborales'); ?></legend>
		<?php
		echo $this->Form->input('id_datoslaborales',array("value"=>$datoslaborales[0]["DatosLaborale"]["id"],"type"=>"hidden"  ));
		// hace referencia para poder modificar la bd, y se encuentra de manera oculta.
		echo $this->Form->input('trabajo',array("value"=>$datoslaborales[0]["DatosLaborale"]["trabajo"]));
		echo $this->Form->input('puesto',array("value"=>$datoslaborales[0]["DatosLaborale"]["puesto"]));
		echo $this->Form->input('direccion',array("value"=>$datoslaborales[0]["DatosLaborale"]["direccion"]));
		echo $this->Form->hidden('usuario_id',array("value"=>$datoslaborales[0]["DatosLaborale"]["usuario_id"]));	
	?>
	</fieldset>
	<?php
	if($status==1){
		//echo "Esta activo";die;
		$status= "checked";
	}else
		$status="";
		//echo "No Esta activo";die;
	?>
	
	<input type="checkbox" name="data[Alumno][status]" checked="<?php echo $status?>">
	<label>Activo</label>
		
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Buscar Alumnos'), array('action' => 'index')); ?></li>
		</ul>
</div>
