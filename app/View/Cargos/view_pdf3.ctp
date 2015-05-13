<?php

$html = '
<style>
th {
    background-color:#F4F4F4;
    margin:5px;
}
.table{

    margin-top:200px;
    margin-bottom:50px;
}
h1{
    color:#F09A2E;
    float:left;

}
.imagen{
    width:100%;
}
img{
    width:100px;
    height:100px;
    margin300px;

}


</style>';
$html .='<h1>UNIVERSIDAD JOSÉ MARTÍN DE LATINOAMERICA
<img src="img/logo.jpg" alt="HTML tutorial" style="width:60px;height:60px;margin-left:20px;"></h1>';

$html .= '<table class="table table-hover">
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
		<tr>
			<td></td>
		</tr>
	</tbody>
</table>';

$sumaCargo=0;
$sumaPago=0; 
foreach ($cargos as $cargo):
$fechaCargo =  $cargo['Cargo']['fecha_pago'];
$descripcionCargo = $cargo['Cargo']['descripcion'];
$nombreCargo = $cargo['FormaPago']['nombre'];
$cargod = $cargo['Cargo']['cargo'];
				$cargodnum = (int)$cargod;
				$sumaCargo = $sumaCargo+$cargodnum;
$html .='



<table class="table table-hover">
	
		<tr>
			<td>'.$fechaCargo.'</td>
			<td>'.$descripcionCargo.'</td>
			<td>'.$nombreCargo.'</td>
			<td>'.$cargod.'</td>
			<td></td>
		</tr>
	</tbody>
</table>


';


endforeach;

foreach ($pagos as $value):
$fechaPago = $value['Pago']['fecha_pago'];
$conceptoPago = $value['Pago']['concepto_pago'];
$nombrePago = $value['Pago']['tipo_pago'];
$pagod = $value['Pago']['monto'];
						$pagodnum = (int)$pagod;
						$sumaPago = $sumaPago = $pagodnum;
$html .='
<table class="table table-hover">
	
		<tr>
			<td>'.$fechaPago.'</td>
			<td>'.$conceptoPago.'</td>
			<td>'.$nombrePago.'</td>
			<td></td>
			<td>'.$pagod.'</td>
		</tr>
	</tbody>
</table>


';
endforeach;
$sumaTotal = $sumaCargo-$sumaPago;
$html .='

	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>'.$sumaTotal .'</td>
			</tr>
		</tbody>
	</table>

		

';




/////////////////////////////////////////////////////////////////////////////////////////////////////////
App::import('Vendor', 'tcpdf', array('file' => 'tcpdf'.DS.'tcpdf.php'));
App::uses('CakeTime', 'Utility');
$date = CakeTime::convert(time(), new DateTimeZone('America/Mexico_City'));

$tcpdf = new TCPDF();
$tcpdf->SetAuthor("marco");
$textfont = 'helvetica';
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',20));
$tcpdf->xheadercolor = array(150,0,0);
$tcpdf->Image('img/logo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);


// add a page (required with recent versions of tcpdf)
$tcpdf->AddPage();

// Now you position and print your page content
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont, '', 10);
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Cargo_'.$fechaPago.'.pdf';
ob_end_clean();
echo $tcpdf->Output($filename, 'I');

?>