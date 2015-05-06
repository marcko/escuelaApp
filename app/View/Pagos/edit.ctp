<div>
<?php echo $this->Form->create('Pago'); ?>
	<fieldset>
		<legend><?php echo __('Editar Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('concepto_pago');
        
        echo $this->Form->input('monto');
        
        echo $this->Form->input('tipo_pago');
        
        echo $this->Form->input('fecha_pago');
        
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
    
	</fieldset>
   
	<?php
//	if($status==1){
//		$status= "checked";
//	}else
//		$status="";

?>
	
<!--	<input type="checkbox" name="data[Pago][status]" checked="<?php echo $status?>">
	<label>Activo</label>
-->
	
	
			<select name="data[Pago][tipo]"> <option value="1"> Interno</option>
				<option value="2">Externo </option>			
			  </select>	
	
	</fieldset>
<?php   
   
   
    
echo $this->Form->end(__('Submit')); 
?>
</div>
