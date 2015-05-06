<div class="cargos form">
<?php echo $this->Form->create('Cargo'); ?>
	<fieldset>
		<legend><?php echo __('Numero de Control a buscar'); ?></legend>
	<?php
		echo $this->Form->input('control');
	
	if(!empty($cargos)) {
	#echo "<pre>";print_r($cargos);echo "</pre>";		
		echo "<b>Nombre del alumno</b>: ".$cargos[0]['Alumno']['alumno']."<br><br>";
		echo "<b>Concepto:</b> <select name='data[Cargo][cargo_id]'> ";		
		foreach( $cargos as $c){
			$deuda = $c['Cargo']['cargo'] - $c['Cargo']['abono'];  
				
			echo "<option value='".$c['Cargo']['id']."' > ". $c['Concepto']['concepto']." - $ ".$deuda. " </option>   ";
			
		}
		
	 echo "</select>";
	echo "<br><br>";	
	echo '<input type="text" name="data[Cargo][monto_pagar]" placeholder="Ingrese el monto a pagar">';
	echo '<input type="hidden" name="data[Cargo][forma_pago_id]", value= "<?php echo $forma_pago_id ?>">';
			
	}	
	
	?>
	</fieldset>

	<?php
	if($factura==1){
		$factura= "checked";
	}else{
		$factura="";
	}
	?>
		
	<input type="checkbox" name="data[Cargo][factura]" checked="<?php echo $factura?>">
	<label>Factura</label>

<?php echo $this->Form->end(__('Buscar')); ?>
</div>
