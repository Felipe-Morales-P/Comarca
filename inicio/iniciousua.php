<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>¡INICIO SESION DE USUARIO!</title>
	<link rel="stylesheet" href="../assets/CSS/estilosinicio.css">

</head>
<?php
$con = mysqli_connect("localhost", "root", "", "comarca") or die("ERROR DE CONEXIÓN")

?>

<body>

	<div class="cajafuera">
		<img class="portada" src="../images/IMAGES/PORTADA2.png">
		<div class="formulariocaja">
			<ul>
				<li><a href="../index.html" class="Boton">INICIO</a></li>
			</ul>
			<div class="login-box">

				<form method="post" action="validarusua.php">

					<h1>INICIO SESION DE CLIENTES</h1>

					<br><br>
					<label for="usuario">USUARIO</label>
					<br><input type="text" class="cajaentradatextoUsuario" placeholder="Ingrese Usuario" name="nombreCliente" required=""><br><br>
					<label for="password">CCONTRASEÑA</label>
					<br><input type="password" class="cajaentradatexto" placeholder="Ingrese Contraseña" name="contraseñaCliente" required="">
					<br><br><br>
					<input class="inicioboton" type="submit" name="insert" value="INGRESAR"></a>
					<br>
					<p><a class="textofinal" href="registrousua.php">¿Aun no tienes una cuenta?</a></p>
				</form>

			</div>
		</div>
	</div>
	
</body>

</html>