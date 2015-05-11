<?php

foreach($cargo as $cargos):
	$status;
 if ($cargos['Cargo']['status'] == 1){
            $status = 'Pendiente';}
        else{
            $status = 'Pagado';
        
                
        
        };

$matricula = $cargos['Alumno']['matricula'];
$concepto = $cargos['Concepto']['nombre'];
$descripcion = $cargos['Cargo']['descripcion'];
$fechaPago = $cargos['Cargo']['fecha_pago'];
$formaPago =  $cargos['FormaPago']['nombre'];  
$created = $cargos['Alumno']['created'];

endforeach;

$html= '
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
$html .='

<h1>UNIVERSIDAD JOSÉ MARTÍN DE LATINOAMERICA
<img src="img/logo.jpg" alt="HTML tutorial" style="width:60px;height:60px;margin-left:20px;"></h1>';
$html .='
<h1>Cargos</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Matricula</th>
			<th>Concepto</th>
			<th>Descripcion</th>
			<th>Estatus</th>
			<th>Fecha de Pago</th>
			<th>Forma de Pago</th>
			<th>Fecha de Creación</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>'.$matricula.'</td>
			<td>'.$concepto.'</td>
			<td>'.$descripcion.'</td>
			<td>'.$status.'</td>
			<td>'.$fechaPago.'</td>
			<td>'.$formaPago.'</td>
			<td>'.$created.'</td>
		</tr>
	</tbody>
</table>
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
$tcpdf->Image('img/logo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);


// add a page (required with recent versions of tcpdf)
$tcpdf->AddPage();

// Now you position and print your page content
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont, '', 10);
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Cargo_'.$fechaPago.'.pdf';
$tcpdf->Output($filename, 'D');

?>
