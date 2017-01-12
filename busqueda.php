<?php
$conexion = mysql_connect("localhost","root","", "datos1")or die("No se pudo realizar la conexion");
mysql_select_db("datos1",$conexion)or die ("ERROR al conectar BD");

$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : NULL;
$consulta="SELECT * FROM tickets ";
$resultado=mysql_query($consulta,$conexion)or die (mysql_error());

while($fila =mysql_fetch_assoc($resultado)){

echo $fila['Nombre'];
echo "-";
echo $fila['nticket'];
echo "-";
echo $fila['Fecha'];
echo "-";
echo $fila['Producto'];
echo "-";
echo $fila['Cantidad'];
echo "<br>";
}
?>
<html>
<title >Tickets encontrados</title>
<link href="estilos.css" rel="stylesheet" type="text/css">


</html>