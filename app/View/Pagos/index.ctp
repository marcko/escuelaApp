<style>
	#termBox {
		width: 150px;
		height: 0px;
	}

	#searchDiv {
		min-height: 80px;
	}
</style>

<div id = "searchDiv">
	<form id = "formBuscar" method = "post" action = "/escuelaApp/pagos/search">
		Buscar 
		<input type = "text" name = "termino" id = "termBox" required="true"/>
	 	en
		<select id = "combobox" name = "combobox">
			<option value = "1"> Concepto de Pago </option>
			<option value = "2"> Estatus </option>
         <option value = "3"> Tipo de pago </option>
         <option value = "4"> externo/interno </option>
		</select>

		<input type = "submit" value = "Buscar" />
	</form>
    <br/>
    <form id = "formAgregar" method = "post" action = "/escuelaApp/pagos/add">
        <input type = "submit" value = "Agregar pago" />
	</form>
    <br/>
</div>

<div>
	<h2><?php echo __('Pagos'); ?></h2>

	<table cellpadding="0" cellspacing="0">
		
		
		<tbody>
		<?php 
			foreach ($cargos as $key => $value) {  ?>
                <thead>
                    <th colspan = "<?= count($value[0]) ?>" style = "height: 30px;"> <center> <?= $key ?> </center> </th>
                </thead>
            
				<thead>
                    <th> Concepto de Pago </th>
                    <th> Monto </th>
                    <th> Estatus </th>
                    <th> Tipo de pago </th>
                    <th> Fecha de pago </th>
                    <th> Feca de creación </th>
						  <th> Externo/Interno </th>                   
                    <th> Acciones </th>
                </thead>

		<?php
				foreach ($cargos[$key] as $value) { ?>

				<tr>
					<td> <?= $value['concepto'] ?> </td>
					<td> $<?= $value['monto'] ?> </td>
					<td> <?= $value['estatus'] ?> </td>
					<td> <?= $value['tipoPago'] ?> </td>
					<td> <?= $value['fechaPago'] ?> </td>
					<td> <?= $value['fechaCreacion'] ?> </td>	
					<td> 
					<?php if($value['tipo']==1){
					echo "Interno";					
					}
					else{
					echo "Externo";
					}
					?>
					</td>	                   
                    <td class="actions">
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $value['id'])); ?>
                    </td>
				</tr>

		<?php			
				}
			}
		 ?>
		</tbody>
	</table>
</div>~