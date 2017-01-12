<head>
	<title >  Registro de nuevo cliente </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="estilos.css" rel="stylesheet" type="text/css">


</style>
</head>


<body>
<form action = "guardar.php" method = "POST">
	
		
		<table width="533" height="392" bordercolor=" #00FFFF" border="0" align="center">
		  <tbody>
		    <tr>
		      <td width="558" height="354" align="center"><h1>Datos personales</h1>
		      
                <table width="392" height="245" border="0" align="center" >
                  <tr>
                    <td width="241" height="23">Nombre: &nbsp; </td>
                    <td width="141">
                      <input type="text" name= "nombre" required >
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Apellido paterno: &nbsp;</td>
                    <td>
                      <input type="text" name= "apellido_p" required>
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Apellido materno: </td>
                    <td>
                      <input type="text" name= "apellido_m" required>
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Edad: </td>
                    <td>
                      <input type="number" name= "edad" min="18" max="50">
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Sexo: &nbsp;</td>
                   <p> <td><input type="radio" name= "sexo">
                      Hombre
                     <p> <input type="radio" name= "sexo">
                      Mujer
                    </td>
                  </tr>
                  <tr>
                    <td height="23"> Numero de telefono:</td>
                    <td>
                      <input type="tel" name="num_tel"  required>
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Correo electronico:</td>
                    <td><input type="email" name="correo" required ></td>
                  </tr>
                  <tr>
                    <td height="23">Contraseña:</td>
                    <td><input type="password" name="password" required ></td>
                  </tr>
                </table></td>
	        </tr>
		    <tr>
		      <td height="32" align="center" ><input type = "submit" value="Registrar" name="btnRegistrar" style="font-size:14px;height:30px"></td>
	        </tr>
	      </tbody>
	  </table>
		<br><br/>
		

</form>
	
</body>
</html>