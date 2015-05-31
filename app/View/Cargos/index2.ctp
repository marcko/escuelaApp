
<form method="post" action="/escuelaApp/cargos/filtro">

	<input type="text" name="data[Cargo][fecha_pago]">
	<input type="submit">	

	
</form>

	<div>
	<h2><?php echo __('Entrada'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Fecha</th>
			<th>Descripcion</th>
			<th>Tipo</th>
			<th>Entrada</th>
			<th>Salida</th>
		
	</tr>
	</thead>
	<tbody>
	<?php  
			$sumaCargo=0;
			$sumaPago=0; 
			?>
	<?php foreach ($cargos as $cargo): 
	
	
	?>
	<tr>
		
		<th><?php echo $cargo['Cargo']['fecha_pago']; ?>&nbsp;</th>
		<th><?php echo $cargo['Cargo']['descripcion']; ?>&nbsp;</th>
		<th><?php echo $cargo['FormaPago']['nombre']; ?>&nbsp;
		</th>
		<th><?php echo $cargod = $cargo['Cargo']['cargo'];
				$cargodnum = (int)$cargod;
				$sumaCargo = $sumaCargo+$cargodnum;

		 ?>&nbsp;</th>
		 <th></th>



	</tr>


	<?php endforeach; ?>

			<?php
				foreach ($pagos as $value) { ?>
<tr>
				<th><?php echo $value['Pago']['fecha_pago']?> </th>
				<th> <?php echo  $value['Pago']['concepto_pago']?> </th>
				<th> <?php echo  $value['Pago']['tipo_pago']?> </th>
				<th></th>
				<th> <?php  echo $pagod = $value['Pago']['monto'];
						$pagodnum = (int)$pagod;
						$sumaPago = $sumaPago = $pagodnum;
							
						

				?> </th>

			
				
				
	</tr>

		<?php			
				}
			
		 ?>


<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><h4>Total</h4></td>


</tr>

<tr>
	
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th><?php echo $sumaCargo-$sumaPago;?></th>

</tr>

</tbody>
		</table>
		<li><?php echo $this->Html->link(__('Imprimir'), array('controller' => 'cargos', 'action' => 'viewPdf3')); ?></li>
	
</div>
