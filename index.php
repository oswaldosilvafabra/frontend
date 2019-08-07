
<!DOCTYPE html>
<html>
<head>
	<title>Crear una cuenta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilosformulario.css">


</head>
<body>
	<h1 >Datos de registro</h1>
	<form action="insertar.php" method="post" class="formulario_de_registro">
		<h2 class="titulo_formulario">CREAR CUENTA</h2>
		<div class="los-inputs">
			<input type="int" name="id" required placeholder="Identificación" class="input-47">
			<input type="text" name="nombre" required placeholder="Nombres" class="input-47">
			<input type="text" name="apellidos" required placeholder="Apellidos" class="input-47">
			<input type="email" name="correo" required placeholder="Correo" class="input-100">
			<input type="text" name="usuario" required placeholder="Usuario" class="input-47">
			<input type="password" name="contrasena" required placeholder="Contraseña" class="input-47">
			<input type="text" name="telefono" required placeholder="Telefono" class="input-100">
			<input type="submit" value="Registrar" class="boton-registrar">
	<p class="link">¿ya estas registrado?<a href="#">Entra aquí</a></p>		
		</div>
	</form>

</body>
</html>