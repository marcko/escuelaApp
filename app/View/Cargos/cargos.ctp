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
	<form id = "formBuscar" method = "post" action = "/proyecto/cargos/showCargos">
		Buscar por mes

		<select id = "mes" name = "mes">
            <option value = "0"> Escoger mes </option>
        <?php
            for($i = 1; $i <= 12; $i++) { ?>
			<option value = "<?= $i ?>"> <?= $i ?> </option>
        <?php
            } ?>
		</select>
        
        semana
        
        <select id = "semana" name = "semana">
        	<option value = "0"> Seleccionar semana </option>
			<option value = "1"> 1 </option>
			<option value = "2"> 2 </option>
            <option value = "3"> 3 </option>
            <option value = "4"> 4 </option>
            <option value = "5"> 5 </option>
		</select>
        
        o d&iacute;a
        
        <select id = "dia" name = "dia">
        	<option value = "0"> Seleccionar día </option>
        <?php
            for($i = 1; $i <= 31; $i++) { ?>
			<option value = "<?= $i ?>"> <?= $i ?> </option>
        <?php
            } ?>
		</select>

		<input type = "submit" value = "Buscar" />
	</form>
</div>

<script type = "text/javascript">
	var semana = <?php echo (isset($semanastr)) ? $semanastr : 0 ?>;
	var dia = <?php echo (isset($diastr)) ? $diastr : 0 ?>;
	var mes = <?php echo (isset($mesint)) ? $mesint : date('n') ?>;

	document.getElementById("mes").value = mes;
	document.getElementById("semana").value = semana;
	document.getElementById("dia").value = dia;
</script>

<div>
	<h2><?php echo __('Cargos'); ?></h2>
	<br/>
	<h3>
		Mes de <?= $messtr ?>
		<?php 
			if (isset($semanastr)) 
				echo '- semana ' . $semanastr;
			else if (isset($diastr))
				echo '- dia ' . $diastr;
		?>
	</h3>
	<table cellpadding="0" cellspacing="0">
        <thead>
	         <!--<th> Concepto de Pago </th>--> 
				<th></th>            
            <th> Monto </th>
            <th> Feca de creación </th>
        </thead>
		
		<tbody>
		<?php
            $cargos = array();
            $total = 0;
            if(isset($cargosMonth)){
                $cargos = $cargosMonth;
            } else if(isset($cargosWeek)){
				$total = $totalSemana;
                $cargos = array($cargosWeek);
            } else if(isset($cargosDay)){
                $total = $totalDia;
                $cargos = $cargosDay;
            } else {
                
            }
        
			foreach ($cargos as $key => $value) {
				foreach ($cargos[$key] as $value) {
                    if (!isset($value['weeknumb'])) {
                        if (isset($cargosMonth)) { $total += $value['abono']; }
                ?>
                
				<tr>
			<!--	<td> <?= $value['concepto_id'] ?> </td> -->
					<td></td>					
					<td> $<?= $value['abono'] ?> </td>
					<td> <?= $value['fecha_pago'] ?> </td>	
				</tr>

		<?php		}	
				}
			}
		 ?>
         
            <tr></tr>
            <tr>
                <td><b>Total </b></td>
                <td style = "color: red"><b>$<?= $total ?></b></td>
            </tr>
		</tbody>
	</table>
</div>~