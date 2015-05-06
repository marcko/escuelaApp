<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="mostrardatos.php"> 
<input type="submit" name="mostrar" value="mostrar">
</form>
</body>
</html>
<?php
include("conexion.php");
$con=conectar();
if(isset($_request['mostrar'])){
	$query="select alumno_id,concepto,monto from deposito";
	$resultado=mysql_query($query,$con);
	$total=mysql_num_rows($resultado);
echo "<table><tr><td>alumno_id</td><td>concepto</td><td>monto</tr>";
	while($dato=mysqli_fetch_array($resultado)){
		//echo "<tr>";
echo "<td>" $dato[alumno_id]
echo "<td>" $dato[concepto];
echo "<td>" $dato[monto];
echo "</tr>";
	}
	echo "</table>";
	echo "total de pagos : $total";
