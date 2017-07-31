<?php
	

/*En este php, se accede a los datos de la base de datos, se comprueba el usuario, asi como la contraseña y redirecciona segun el caso a los diferentes mensajes 
	de error*/	
	if (isset($_POST["cuentalu"]) && isset($_POST['contralu'])){
		//Conexión a la base de datos
				
		
		$conexion = mysqli_connect('localhost', 'root', '', 'prueba_preguntas');
		if (mysqli_connect_errno($conexion)) {
			echo 'Fallo al conectar a MySQL: ' . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{

			$contralu=$_POST['contra'];
			$cuentalu=$_POST['cuentalu'];
			$resultado=mysqli_query($conexion, "SELECT * FROM califica WHERE no_cta='".$cuentalu."'");
			$consulta=mysqli_fetch_assoc($resultado);
			
			$nalu=$consulta['Nombre'];

				//Comprobar si el usuario existe
			if ($nalu=="")
			{
					echo "<script>";
					echo "alert('Usuario no registrado!');";  
					echo "window.location = '../../templates/index.html';";
					echo "</script>";
//EL usuario es válido:
			}
			else {
					SESSION_start();
					$_SESSION["nombre"]=$consulta['Nombre'];
					$_SESSION["id"]=$consulta['no_cta'];
				
					echo "<script>";
					echo "alert('Bienvenido de Nuevo!');";  
					echo "window.location = 'plan.php';";
					echo "</script>";						
					}
					
		}
		mysqli_close($conexion);
	}
	else {
		echo "Formulario de inicio de sesion inválido.";
	}


?>