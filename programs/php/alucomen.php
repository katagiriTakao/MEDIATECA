<?php
				session_start();

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";


	
				
			
				mysqli_free_result($resultado);
	 
			    mysqli_close($conexion);	




?>

