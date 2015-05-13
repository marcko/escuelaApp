	
	<h2><?php echo __('Cargos'); ?></h2>
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
	<?php  $sumaCargo=0;
			$sumaPago=0; ?>
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

				<td> <?=  $value['Pago']['fecha_pago']?> </td>
				<td> <?=  $value['Pago']['concepto_pago']?> </td>
				<td> <?=  $value['Pago']['tipo_pago']?> </td>
				<td></td>
				<td> <?php  echo $pagod = $value['Pago']['monto'];
						$pagodnum = (int)$pagod;
						$sumaPago = $sumaPago = $pagodnum;
							
						

				?> </td>

			
				
				

		<?php			
				}
			
		 ?>

	</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php echo $sumaCargo-$sumaPago;?></td>


</tr>

<tr>
	
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th>Total</th>

</tr>

		</tbody>
	</table>
</div>