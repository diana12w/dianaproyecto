<?php 
	
	require('conexion.php');
	$nombre=$_POST['nombre'];
	$apellido_p=$_POST['apellido_p'];
	$apellido_m=$_POST['apellido_m'];
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
	$num_tel=$_POST['num_tel'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	
	$sql1="SELECT * FROM usuarios WHERE correo='$correo'";
	$result=$mysqli->query($sql1);
	$fila=mysqli_num_rows($result);
	if($fila==0){
	
	$query="INSERT INTO usuarios (nombre, apellido_p, apellido_m, edad, sexo, num_tel, correo, password) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$edad', '$sexo', '$num_tel', '$correo', '$password')";
	
	$resultado=$mysqli->query($query);
	header("location:index.php");
	}
	else{?>
				<script type="text/JavaScript">
				alert('Error al Guardar, el correo ya existe');
				
				</script>	
			<?php	header("location:registroERROR.php");} ?>