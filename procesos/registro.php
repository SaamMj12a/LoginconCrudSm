<?php 
	require_once "../clases/Usuarios.php";
	$Usuarios = new Usuarios();

	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$respuesta = $Usuarios->agregarUsuario($nombre,
                                           $apellido, 
                                           $email, 
                                           $usuario, 
                                           $password);

	if ($respuesta) {
?>
	<script>
		alert("Registro exitoso!");
		window.location.href = '../registro.php';
	</script>	

<?php
		  		
	} else {
?>
		<script>
			alert("Fallo!");
			window.location.href ='../registro.php';
		</script>	
<?php 
		
	}

 ?>