<script type="text/javascript">
	
	function valida() {
		var control = document.getElementById("control").value;
		
		if (!control) {
			alert("Ingresa el número de control!!");
			return false;
		}
	return true;
	}
	
</script>

<div class="documentaciones index">
	<h2><?php echo __('Documentacion'); ?></h2>
	
	<div>
	<?php
		echo $this->Form->create('Documentacione',array('onsubmit'=>'return valida()'));
		
		if(!empty($datos)){
			//echo "<pre>";
			//print_r($datos);
			//echo "</pre>";die;
			
		  foreach ($datos as $dato):	?>
		
			<?php
			if($dato['documentaciones']['tit_pro_maestria']){
				$valor1="checked";
			}else{
				$valor1=" ";
			}
			
			if($dato['documentaciones']['ced_pro_maestria']){
				$valor2="checked";
			}else{
				$valor2=" ";
			}
			
			if($dato['documentaciones']['cer_estu_maestria']){
				$valor3="checked";
			}else{
				$valor3=" ";
			}
			
			if($dato['documentaciones']['ced_pro_licenciatura']){
				$valor4="checked";
			}else{
				$valor4=" ";
			}
			
			if($dato['documentaciones']['identificacion_oficial']){
				$valor5="checked";
			}else{
				$valor5=" ";
			}
			
			if($dato['documentaciones']['credencial_snte']){
				$valor6="checked";
			}else{
				$valor6=" ";
			}
			
			if($dato['documentaciones']['acta_nac']){
				$valor7="checked";
			}else{
				$valor7=" ";
			}
			
			if($dato['documentaciones']['curr_vitae']){
				$valor8="checked";
			}else{
				$valor8=" ";
			}
			
			if($dato['documentaciones']['carta_motivo']){
				$valor9="checked";
			}else{
				$valor9=" ";
			}
			
			
			?>
			Alumno: <b><?php echo $dato['alumno']['nombre']." ".$dato['alumno']['ap_pat']." ".$dato['alumno']['ap_mat']; ?></b><br>
			Numero de control: <b><?php echo $clave ?></b> <br><br>
			<input type="hidden" name="control" value="<?php echo $dato['alumno']['id']; ?>">
			<input type="hidden" name="clave" value="<?php echo $clave; ?>">
			<input type="hidden" id="bandera" value="1" name="data[Documentacione][bandera]">
			<input type="hidden" id="documentacion_id" value="<?php echo $dato['documentaciones']['id']; ?>" name="data[documentaciones][id]">
			
			<input <?php echo $valor1 ?> type="checkbox" name="data[documentaciones][tit_pro_maestria]" ><label>tit_pro_maestria</label>
			<br>
			<input <?php echo $valor2 ?> type="checkbox" name="data[documentaciones][ced_pro_maestria]"><label>ced_pro_maestria</label>
			<br>
			<input <?php echo $valor3 ?> type="checkbox" name="data[documentaciones][cer_estu_maestria]"><label>cer_estu_maestria</label>
			<br>
			<input <?php echo $valor4 ?> type="checkbox" name="data[documentaciones][ced_pro_licenciatura]"><label>ced_pro_licenciatura</label>
			<br>
			<input <?php echo $valor5 ?> type="checkbox" name="data[documentaciones][identificacion_oficial]"><label>identificacion_oficial</label>
			<br>
			<input <?php echo $valor6 ?> type="checkbox" name="data[documentaciones][credencial_snte]"><label>credencial_snte</label>
			<br>
			<input <?php echo $valor7 ?> type="checkbox" name="data[documentaciones][acta_nac]"><label>acta_nac</label>
			<br>
			<input <?php echo $valor8 ?> type="checkbox" name="data[documentaciones][curr_vitae]"><label>curr_vitae</label>
			<br>
			<input <?php echo $valor9 ?> type="checkbox" name="data[documentaciones][carta_motivo]"><label>carta_motivo</label>
			<br>
				
	
	
	</div>	
	<?php	endforeach;
		echo $this->Form->end(__('Guardar'));
	
		}
	?>

</div>





