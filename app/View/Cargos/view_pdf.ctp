<?php
////////////////////////////////////// Get course data //////////////////////////////////////
 $status;
 if ($cargo['Cargo']['status'] == 1){
            $status = 'Pendiente';}
        else{
            $status = 'Pagado';
        
                
        
        };

$nombre = $cargo['Alumno']['nombre'];
$created =$cargo['Cargo']['created'];
$concepto = $cargo['Concepto']['nombre'];
$fechaPago = $cargo['Cargo']['fecha_pago'];
$descripcion = $cargo['Cargo']['descripcion'];
$modified = $cargo['Cargo']['modified'];

$formaPago =  $cargo['FormaPago']['nombre'];  
$abono = $cargo['Cargo']['abono'];
$cargo = $cargo['Cargo']['cargo'];

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
<h1>Detalle de cargos</h1>
<table class="table">
    <tbody>
          <tr class="active">
            <th><h3>Nombre</h3></th>
            <th>'.$nombre.'</th>
           </tr>
           <tr class="active">
            <th><h3>Created</h3></th>
            <th>'.$created.'</th>
           </tr>
           <tr class="active">
            <th><h3>Concepto</h3></th>
            <th>'.$concepto.'</th>
           </tr>
           <tr class="active">
            <th><h3>Fecha Pago</h3></th>
            <th>'.$fechaPago.'</th>
           </tr>
           <tr class="active">
            <th><h3>Descripción</h3></th>
            <th>'.$descripcion.'</th>
           </tr>
           <tr class="active">
            <th><h3>Modified</h3></th>
            <th>'.$modified.'</th>
           </tr>
           <tr class="active">
            <th><h3>Status</h3></th>
            <th>'.$status.'</th>
           </tr>
            <tr class="active">
            <th><h3>Forma Pago</h3></th>
            <th>'.$formaPago.'</th>
           </tr>
            <tr class="active">
            <th><h3>Abono</h3></th>
            <th>'.$abono.'</th>
           </tr>
            <tr class="active">
            <th><h3>Cargo</h3></th>
            <th>'.$cargo.'</th>
           </tr>
    </tbody>
</table>
';


////////////////////////////////////// end Get course data //////////////////////////////////////

////////////////////////////////////// CakePHP interaction ////////////////////////////////////// 
App::import('Vendor', 'tcpdf', array('file' => 'tcpdf'.DS.'tcpdf.php'));
App::uses('CakeTime', 'Utility');
$date = CakeTime::convert(time(), new DateTimeZone('America/Mexico_City'));

$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$tcpdf->SetAuthor("marco");
$textfont = 'helvetica';
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',20));
$tcpdf->xheadercolor = array(150,0,0);
$tcpdf->Image('img/logo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $tcpdf->setLanguageArray($l);
}

// add a page (required with recent versions of tcpdf)

$tcpdf->AddPage();

// Now you position and print your page content
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont, '', 10);
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Cargo_'.$nombre.'_'.$date.'.pdf';
$tcpdf->Output($filename, 'D');
?>
