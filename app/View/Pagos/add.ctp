<div>
<?php echo $this->Form->create('Pago'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('concepto_pago');
        
        echo $this->Form->input('monto');
        
        echo $this->Form->input('tipo_pago');
        
        echo $this->Form->input('fecha_pago', array('empty' => true));
        
		         
        
//		echo $this->Form->input('status');
?>

    	Estatus
    	<br>
			<select name="data[Pago][status]"> <option value="0"> Pagado</option>
				<option value="1">Pendiente </option>			
			  </select>	
<br>	

  <?php    
        echo $this->Form->input('fecha_operacion');
	
	?>
	
			<select name="data[Pago][tipo]"> <option value="1"> Interno</option>
				<option value="2">Externo </option>			
			  </select>	
	
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
