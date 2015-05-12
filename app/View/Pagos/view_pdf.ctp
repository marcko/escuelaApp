<?php
/*
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concepto_pago` varchar(60) NOT NULL,
  `monto` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `tipo_pago` varchar(50) DEFAULT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  `fecha_operacion` datetime NOT NULL,
  `tipo` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;
*/
$concepto = $pago['Pago']['concepto_pago'];
$monto = $pago['Pago']['monto'];
 $status;
 if ($pago['Pago']['status'] == 1){
            $status = 'Pendiente';
        }
        else{
            $status = 'Pagado';
        
                
        
        };
$tipoPago = $pago['Pago']['tipo_pago'];
$fechaPago = $pago['Pago']['fecha_pago'];
$fechaCreacion = $pago['Pago']['fecha_operacion'];
$tipoOp;
if ($pago['Pago']['tipo']==1){

	$tipoOp = 'Interno';
}

	
	else{
		$tipoOp = 'Externo';

};
$html.='
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

}
h2{
	color:black;

}
.firmas{

	 background-color:#F4F4F4;
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
$html .='

<h1>UNIVERSIDAD JOSÉ MARTÍN DE LATINOAMERICA
<img src="img/logo.jpg" alt="HTML tutorial" style="width:60px;height:60px;margin-left:20px;"></h1>
<h1>Recibo de Pago</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Concepto</th>
			<th>Monto</th>
			<th>Estatus</th>
			<th>Tipo de Pago</th>			
			<th>Fecha de Pago</th>
			<th>Fecha de Creación</th>
			<th>Tipo de Operacion</th>
		</tr>
	</thead>';


$html .='


	<tbody>
		<tr>
			<td>'.$concepto.'</td>
			<td>'.$monto.'</td>
			<td>'.$status.'</td>
			<td>'.$tipoPago.'</td>
			<td>'.$fechaPago.'</td>
			<td>'.$fechaCreacion.'</td>
			<td>'.$tipoOp.'</td>
		</tr>
	</tbody>
</table>
';
	$html.='
	<div class="firmas">
     <h2>Alumno</h2>
     <h2>______________________________________</h2>
      <h2>Administracion</h2>
      <h2>______________________________________</h2>

		</div>
	';
////////////////////////////////////// end Get course data //////////////////////////////////////

////////////////////////////////////// CakePHP interaction ////////////////////////////////////// 
App::import('Vendor', 'tcpdf', array('file' => 'tcpdf'.DS.'tcpdf.php'));
App::uses('CakeTime', 'Utility');
$date = CakeTime::convert(time(), new DateTimeZone('America/Mexico_City'));

$tcpdf = new TCPDF();
$tcpdf->SetAuthor("marco");
$textfont = 'helvetica';
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',20));
$tcpdf->xheadercolor = array(150,0,0);
//$tcpdf->Image('img/logo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);


// add a page (required with recent versions of tcpdf)
$tcpdf->AddPage();

// Now you position and print your page content
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont, '', 10);
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Pago'.$fechaPago.'.pdf';
ob_end_clean();
echo $tcpdf->Output($filename, 'I');
?>