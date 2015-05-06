<!-- <div class="documentaciones form">
<?php echo $this->Form->create('Documentacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Documentacione'); ?></legend>
	<?php
		echo $this->Form->input('alumno_id',array("type"=>"text",'label'=>'Alumno'));
		echo $this->Form->input('tit_pro_maestria');
		echo $this->Form->input('ced_pro_maestria');
		echo $this->Form->input('cer_estu_maestria');
		echo $this->Form->input('ced_pro_licenciatura');
		echo $this->Form->input('identificacion_oficial');
		echo $this->Form->input('credencial_snte');
		echo $this->Form->input('acta_nac');
		echo $this->Form->input('curr_vitae');
		echo $this->Form->input('carta_motivo');
		//echo $this->Form->input('fotografia_id');
		echo $this->Form->input('status');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Documentaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		
	</ul>
</div>-->

<div>

<?php 		echo $this->Form->create('Documentacion'); ?>
		<fieldset>
			<legend><?php echo __('Agregar documentacion'); ?></legend>
			<input type="text" name="data[Documentacione][control]" >
		</fieldset>
<?php echo $this->Form->end(__('Buscar')); ?>
	
<?php
	if(isset($datos)){
		echo $this->Form->create('Documentacion');
		//echo "<pre>";
		//print_r($datos);
		//echo "</pre>";die;
		
		
		if($datos[0]['documentacione']['tit_pro_maestria']){
			$var1 ="checked";
		}else{
			$var1 ="";
		}
		if($datos[0]['documentacione']['ced_pro_maestria']){
			$var2 ="checked";
		}else{
			$var2 ="";
		}
		if($datos[0]['documentacione']['cer_estu_maestria']){
			$var3 ="checked";
		}else{
			$var3 ="";
		}
		if($datos[0]['documentacione']['ced_pro_licenciatura']){
			$var4 ="checked";
		}else{
			$var4 ="";
		}
		if($datos[0]['documentacione']['identificacion_oficial']){
			$var5 ="checked";
		}else{
			$var5 ="";
		}
		if($datos[0]['documentacione']['credencial_snte']){
			$var6 ="checked";
		}else{
			$var6 ="";
		}
		if($datos[0]['documentacione']['curr_vitae']){
			$var7 ="checked";
		}else{
			$var7 ="";
		}
		if($datos[0]['documentacione']['carta_motivo']){
			$var8 ="checked";
		}else{
			$var8 ="";
		}
		if($datos[0]['documentacione']['acta_nac']){
			$var9 ="checked";
		}else{
			$var9 ="";
		}
		if($datos[0]['documentacione']['fotografia_id']){
			$var10 ="checked";
		}else{
			$var10 ="";
		}
		echo "bandera :: ".$bandera;
		
?>
		<h2>Documentacion entregada</h2>
		<input type="hidden" name="bandera" value="<?php echo $bandera;  ?>">
		
		<h3>N° Control: <b><?php echo $datos[0]['documentacione']['alumno_id'] ?></b></h3>
		<h3>Alumno: <b><?php echo $datos[0]['Al']['nombre']." ".$datos[0]['Al']['ap_pat']." ".$datos[0]['Al']['ap_mat']; ?></b></h3><br>
		
		<div>
		<input <?php echo $var1; ?> type="checkbox" name="data['documentacione']['tit_pro_maestria']"> <label>Titulo ... maestria</label>
		<br>
		<input <?php echo $var2; ?> type="checkbox" name="data['documentacione']['ced_pro_maestria']"><label>Cedula ... maestria</label>
		<br>
		<input <?php echo $var3; ?> type="checkbox" name="data['documentacione']['cer_estu_maestria']"><label>cer_estu_maestria</label>
		<br>
		<input <?php echo $var4; ?> type="checkbox" name="data['documentacione']['ced_pro_licenciatura']"><label>ced_pro_licenciatura</label>
		<br>
		<input <?php echo $var5; ?> type="checkbox" name="data['documentacione']['identificacion_oficial']"><label>identificacion_oficial</label>
		<br>
		<input <?php echo $var6; ?> type="checkbox" name="data['documentacione']['credencial_snte']"><label>credencial_snte</label>
		<br>
		<input <?php echo $var7; ?> type="checkbox" name="data['documentacione']['curr_vitae']"><label>curr_vitae</label>
		<br>
		<input <?php echo $var8; ?> type="checkbox" name="data['documentacione']['carta_motivo']"><label>carta_motivo</label>
		<br>
		<input <?php echo $var9; ?> type="checkbox" name="data['documentacione']['acta_nac']"><label>acta_nac</label>
		<br>
		<input <?php echo $var10; ?> type="checkbox" name="data['documentacione']['fotografia_id']"><label>fotografia_id cambiar a fotogracia(tabla)</label>
		<br>
		
		<?php echo $this->Form->end(__('Guardar')); ?>
		
<?php
	
	}else{
		echo "No se encontraron resutados";
	}
	
?>
		


</div>	