<head>
	<title >  Registro de nuevo cliente </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #000000;
}
body {
	background-color:  #00FFFF;
}
</style>
</head>

<script type="text/JavaScript">
				alert('Error al Guardar, el correo ya existe');
				
				</script>	
<body>
<form action = "guardar.php" method = "POST">
	<br>
	<br/> 
		
		<table width="533" height="392" bordercolor=" #00FFFF" border="0" align="center">
		  <tbody>
		    <tr>
		      <td width="558" height="354" align="center" bgcolor=" #00FFFF"><span style="color: #FDFDFD"><h1><bgcolor= "#000000">Datos personales</h1><span style="text-align: center"></span></br>
		
&nbsp;		&nbsp;&nbsp;&nbsp;

		&nbsp; &nbsp;<br>
                </span>
                <table width="392" height="245" border="0" align="center" >
                  <tr>
                    <td width="241" height="23">Nombre: &nbsp; </td>
                    <td width="141">
                      <input type="text" name= "nombre">
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Apellido paterno: &nbsp;</td>
                    <td>
                      <input type="text" name= "apellido_p">
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Apellido materno: </td>
                    <td>
                      <input type="text" name= "apellido_m">
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
                    <td>
                      <input type="text" name= "sexo">
                    </td>
                  </tr>
                  <tr>
                    <td height="23"> Numero de telefono:</td>
                    <td>
                      <input type="text" name="num_tel" >
                    </td>
                  </tr>
                  <tr>
                    <td height="23">Correo electronico:</td>
                    <td><input type="text" name="correo" ></td>
                  </tr>
                  <tr>
                    <td height="23">Contraseña:</td>
                    <td><input type="password" name="password" ></td>
                  </tr>
                </table></td>
	        </tr>
		    <tr>
		      <td height="32" align="center" bgcolor="#00FFFF"><input type = "submit" value="Registrar" name="btnRegistrar" style="font-size:14px;height:30px"></td>
	        </tr>
	      </tbody>
	  </table>
		<br><br/>
		

</form>
	
</body>
</html>