<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Registro de usuarios</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="procesos/registro.php" method="post">
				<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control" required="">
					<label for="apellido">Apellidos</label>
					<input type="text" name="apellido" id="apellido" class="form-control" required="">
					<label for="email">Correo Electrónico</label>
					<input type="text" name="email" id="email" class="form-control" required="">
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" class="form-control" required="">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control" required="">
					<br>
					<button class="btn btn-danger">Registrar</button>
					<a href="index.php" >Logear</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>