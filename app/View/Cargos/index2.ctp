	
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
	<?php foreach ($cargos as $cargo): 
	
	
	?>
	<tr>
		
		<th><?php echo $cargo['Cargo']['fecha_pago']; ?>&nbsp;</th>
		<th><?php echo $cargo['Cargo']['descripcion']; ?>&nbsp;</th>
		<th><?php echo $cargo['FormaPago']['nombre']; ?>&nbsp;
		</th>
		<th><?php echo $cargod = $cargo['Cargo']['cargo'];
				$cargodnum = (int)$cargod;

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
				<td> <?=  $value['Pago']['monto']?> </td>

			
				
				

		<?php			
				}
			
		 ?>

	</tr>



		</tbody>
	</table>
</div>