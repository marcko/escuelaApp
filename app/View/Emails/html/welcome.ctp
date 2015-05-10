<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
  

th {
    background-color:#F4F4F4;
    margin:5px;
    text-align: left;
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

</style>
<?php 
echo "


<h1>UNIVERSIDAD JOSÉ MARTÍN DE LATINOAMERICA</h1>
<h1>Detalle de cargos</h1>
<table class='table table-hover'>
    <tbody>
          <tr>
            <th><h3>Nombre</h3></th>
            <th>".$value[0]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Created</h3></th>
            <th>".$value[1]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Concepto</h3></th>
            <th>".$value[2]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Fecha Pago</h3></th>
            <th>".$value[3]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Descripción</h3></th>
            <th>".$value[4]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Modified</h3></th>
            <th>".$value[5]."</th>
           </tr>
           <tr class='active'>
            <th><h3>Status</h3></th>
            <th>".$value[6]."</th>
           </tr>
            <tr class='active'>
            <th><h3>Forma Pago</h3></th>
            <th>".$value[7]."</th>
           </tr>
            <tr class='active'>
            <th><h3>Abono</h3></th>
            <th>".$value[8]."</th>
           </tr>
            <tr class='active'>
            <th><h3>Cargo</h3></th>
            <th>".$value[9]."</th>
           </tr>
    </tbody>
</table>
";
?>
