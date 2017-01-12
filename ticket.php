<html>
<title >Buscar Ticket</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<p align="center">Consulta tu ticket</p>
<table width="200" border="0" align="center">
  <tr>
    <td>No ticket</td>
    <td>Nombre</td>
    <td>Fecha</td>
  </tr>
  <tr>
  <form  action="busqueda.php" method="GET">
    <td><input type="number" name= "nticket"  required ></td>
  
    <td><input type="text" name= "Nombre" value="Nombre"  ></td>
    <td><input type="date" name= "Fecha" ></td>
  </tr>
</table>
<p align="center">

 
  <input type = "submit" value="buscar" name="btnconsu" style="font-size:20px;height:50px">
</p>
</form>
</html>