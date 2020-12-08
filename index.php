<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<style>
    h1{
    text-align: center;
    font-family: "fantasy";
    text-shadow: 10px 5px 5px #01579B;
}
   form{
    align-content: center;
    width: 150%;
    margin:  auto;
    margin-top:  25px;
    margin-bottom: 25px;
    padding: 5px;
    background: #FF8A80;
}
    
    </style>
	<?php 
		require_once "scripts.php"; 
		session_start();
		if (isset($_SESSION['usuario'])) {
			header("location:vistas/inicio.php");
		}
	?>
</head>
<body>
	<div class="container" align="center">
		<h1>Login de usuario</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="procesos/login.php" method="post">
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" id="usuario" class="form-control">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
					<br>
					<button class="btn btn-primary">Entrar</button>
					<a href="registro.php">Registrar</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>