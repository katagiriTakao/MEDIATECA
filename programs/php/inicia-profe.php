<?php
	

/*En este php, se accede a los datos de la base de datos, se comprueba el usuario, asi como la contraseña y redirecciona segun el caso a los diferentes mensajes 
	de error*/	
	if (isset($_POST["cuentaprof"]) && isset($_POST['contraprof'])){
		//Conexión a la base de datos
				
		
		$conexion = mysqli_connect('localhost', 'root', '', 'prueba_preguntas');
		if (mysqli_connect_errno($conexion)) {
			echo 'Fallo al conectar a MySQL: ' . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			
			$contraprof=$_POST['contraprof'];
			$cuentaprof=$_POST['cuentaprof'];
			$resultado=mysqli_query($conexion, "SELECT * FROM asesor WHERE clave='".$cuentaprof."'");
			$consulta=mysqli_fetch_assoc($resultado);
		
			$asesor=$consulta["numet"];	
			$nasesor=$consulta['nombre'];
				//Comprobar si el usuario existe
			if ($nasesor=="")
			{
					echo "<script>";
					echo "alert('Usuario no registrado!');";  
					echo "window.location = '../../templates/index.html';";
					echo "</script>";
//EL usuario es válido:
			}
			else {
					SESSION_start();
					$_SESSION["nombre"]=$nasesor;
					//$_SESSION["id"]=$consulta["no_cta"];
				
					echo "<script>";
					echo "alert('Bienvenido de Nuevo!');";  
					echo "window.location = 'buzon.php';";
					echo "</script>";						
					}
					
		}
		mysqli_close($conexion);
	}
	else {
		echo "Formulario de inicio de sesion inválido.";
	}


?>