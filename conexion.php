<?php
$mysqli=new mysqli("localhost","root","","datos1"); //servidor, usuario de base de datos, contraseņa del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>