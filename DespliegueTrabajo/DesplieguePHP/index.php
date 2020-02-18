<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practica Despliegue</title>
</head>
<body>
<center>
<?php

$configs = include('config.php');

$conexion=mysqli_connect($configs['host'],$configs['username'],$configs['pass'],$configs['bbdd'],$configs['puerto']);
//print mysqli_get_server_info($conexion);

	if(isset($_POST['envioRegistro'])){
		$nombre = $_POST['nombre']; 
        $pass = $_POST['pass']."-php"; 
        $sql= "INSERT INTO usuarios VALUES ('".$nombre."','".$pass."');";
			if(mysqli_query($conexion,$sql)===TRUE){
				echo "<h3 style='color:#69E776'>Registro completado con exito</h3>";
			}else{
				echo "<h3 style='color:#F55858'>Error al registrar: ".$conexion->error."</h3>";
			}
	}

	else{
		?>

		<h3>Registrarse</h3><br>
		<form name="input" action="" method="post"> 
		   	Nombre: <br><input type="text" name="nombre"/> <br> <br>
		   	Password: <br><input type="text" name="pass" /><br><br>
		    <input type="submit" name="envioRegistro" value="Registrarse"/> 
		    <input type="reset" value="Borrar">
		</form>
		<br>
<?php
  }
 ?>
</center>
	
</body>
</html>
