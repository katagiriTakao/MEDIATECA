<?php
	if (isset($_POST["cuentanueva"]) && isset($_POST["contranueva"])){
		//Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "jugadores");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
		// donde dice $variableUsuario tienes que poner la variable en la cual tienes el nombre del user para validarlo, supongo que ha de ser una POST, pero tu lo modificas		 
		$usuario = $_POST["cuentanueva"];
			$nombre = mysqli_real_escape_string ($conexion, $_POST["nombre"]);
			$fechnac = mysqli_real_escape_string ($conexion, $_POST["fechnac"]);
			$correo = mysqli_real_escape_string ($conexion, $_POST["correo"]);
			$cuenta = mysqli_real_escape_string ($conexion, $_POST["cuentanueva"]);
			$contra = mysqli_real_escape_string ($conexion, $_POST["contranueva"]);	
			$existe = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre_usuario ='".$usuario."'");
			$existe3 = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo ='".$correo."'");
				 
				 if( mysqli_num_rows($existe) == 0){
						if( mysqli_num_rows($existe3) == 0){
							$oregano = md5(uniqid(rand(), true));
							$mix = hash('sha512', $oregano.$contra);
							unset($contra);
							$resultado = mysqli_query($conexion, "INSERT INTO usuarios(nombre,fechnac,correo,nombre_usuario,password,oregano,permiso) VALUES('".$nombre."','".$fechnac."','".$correo."','".$cuenta."','".$mix."','".$oregano."','0');");				
							}
						else{							
							echo "<script>";
							echo "alert('Este correo ya forma parte de nuestros suscriptores :D');";  
							echo "window.location = 'main.html';";
							echo "</script>";}	
					}
				else{
					echo "<script>";
					echo "alert('Uuuuuuuuuuuuuuups...este nombre de usuario ya ha sido registrado');";  
					echo "window.location = 'main.html';";
					echo "</script>"; 
				}
	}
		mysqli_close($conexion);
		echo "<script>";
		echo "alert('¡Bienvenido, usuario ".$cuenta." registrado con exito!');";  
		echo "window.location = 'main.html';";
		echo "</script>";
	}
	else{
		echo "No esta correctamente completado el formulario de registro.";
	}
?>