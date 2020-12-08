

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'milogsam24');
			return $conexion;
		}
	}


 ?>