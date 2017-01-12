<?php
			 if(($_POST['username']=="")&&($_POST['password']=="")){
				@header('location:index.html');
			 }
session_start();

error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
$dbhost="localhost";
$username="root";
$password="";
$dbname="datos1";
$conecta=mysql_connect($dbhost,$username,$password);
mysql_select_db($dbname,$conecta)or die('nose puede abrir');
if($_POST['username']){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($password==NULL){
		$msg="el passaword no fue enviado";
	}
	else{
		$query=mysql_query("SELECT id_usuario, nombre, apellido_p, apellido_m, edad, sexo, correo,password FROM usuarios where correo='$username'") or die (mysql_error());
		$data=mysql_fetch_array($query);
		if($data['password']!=$password){
			@header('location:index.html');
		}
		else{
			$query=mysql_query("SELECT id_usuario, nombre, apellido_p, apellido_m, edad, sexo, correo,password FROM usuarios where correo='$username'") or die (mysql_error());
			$row=mysql_fetch_array($query);
			$_session["s_username"]=$row['correo'];
			$_session["logeado"]="si";
			?>
			
			
<?php
	require('conexion.php');
	$query="SELECT id_usuario, nombre, apellido_p, apellido_m, edad, sexo, correo,password FROM usuarios where correo='$username'";
	
	$resultado=$mysqli->query($query);
	$result=$resultado->fetch_assoc();
	

?>

<html>
<head>
<meta charset="utf-8">
<title>Shellsoft</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="group">
  <h2><em>Shellsoft</em></h2>

<center>OPCIONES</inicio>
<center>
<br>
<a href="index.html">
<input class="form-btn" name="submit" type="submit" value="Salir">  
</a> 
</br>
<br>
<a href="ticket.php">
<input class="form-btn" name="submit" type="submit" value="REIMPRESION DEL TICKET"> </a>
</center>
<br>
<center>
<input class="form-btn" name="submit" type="submit" value="DEVOLUCION DEL ARTICULO">
<br>
</center>
<center> 
<br>
<input class="form-btn" name="submit" type="submit" value="ABASTO"> 
</center>

     <center><h6><em>copyrigth@</em></h6></center>
     
    </p>
  </form>
</div>
</body>

</html>
<?php
		}
	}
}
?>	