	
	<h2><?php echo __('Cargos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Fecha</th>
			<th>Descripcion</th>
			<th>Tipo</th>
			<th>Entrada</th>
			<th>Salida</th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cargos as $cargo): 
	
	
	?>
		<td><?php echo $cargo['Cargo']['fecha_pago']; ?>&nbsp;</td>
		<td><?php echo $cargo['Cargo']['descripcion']; ?>&nbsp;</td>
		<?php echo $cargo['FormaPago']['nombre']; ?>&nbsp;
		</td>
		<td><?php echo $abono = $cargo['Cargo']['abono'];
				$abononum = (int)$abono;
		 ?>&nbsp;</td>
		<td><?php echo $cargod = $cargo['Cargo']['cargo'];
				$cargodnum = (int)$cargod;

		 ?>&nbsp;</td>
	
	</tr>
<?php endforeach; ?>

<div>
	<h2><?php echo __('Pagos'); ?></h2>

	<table cellpadding="0" cellspacing="0">
		
		
		<tbody>
            
				<thead>
				<th> id</th>
                    <th> Concepto de Pago </th>
                    <th> Monto </th>
                    <th> Estatus </th>
                    <th> Tipo de pago </th>
                    <th> Fecha de pago </th>
                    <th> Fecha de creación </th>
						  <th> Externo/Interno </th>                   
                    <th> Acciones </th>
                </thead>

		<?php
				foreach ($pagos as $value) { ?>



				<tr>
				<td> <?=  $value['Pago']['id']?> </td>
				<td> <?=  $value['Pago']['concepto_pago']?> </td>
				<td> <?=  $value['Pago']['monto']?> </td>
				<td> <?=  $value['Pago']['status']?> </td>
				<td> <?=  $value['Pago']['tipo_pago']?> </td>
				<td> <?=  $value['Pago']['fecha_pago']?> </td>
				<td> <?=  $value['Pago']['fecha_operacion']?> </td>
			

		<?php			
				}
			
		 ?>
		</tbody>
	</table>
</div>