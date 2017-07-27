<?php

session_start();

include('menu.php');

$usuario_alum=$SESSION['id'];

		echo"<meta http-equiv='Content-Type' content='text/html' charset='utf-8' />";

		$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
				echo "Connected successfully</br></br>";

		$sacar="SELECT * FROM profe_comen WHERE alumno_destino=".$usuario_alum." ";
		$result = $conn->query($sacar);

		echo "COMENTARIOS DE TUS PROFESORES</br></br>";
		if ($result->num_rows > 0) {
    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "profesor: " . $row["prof"]. " - comentario " . $row["comentario"]."</br>";
		    }
		} else {
		    echo "0 results";
		}


		echo"	<div class'container'>
					<div class='row'>";
						echo "  
											<div class='col s12 m4'>
											  <div class='card'>
												<div class='card-image'>
												  <img src='../../resources/images/junta.jpg'>
												</div>
												<div class='card-content'>
												  <p>Sesiones de trabajo</p>
												</div>
												<div class='card-action'>
												  <a href='#'>ENTRAR</a>
												</div>
											  </div>
											</div>";
										  
									echo "  
											<div class='col s12 m4'>
											  <div class='card'>
												<div class='card-image'>
												  <img src='../../resources/images/examen.jpg'>
												</div>
												<div class='card-content'>
												  <p>Examen diagnostico</p>
												</div>
												<div class='card-action'>
												  <a href='pruebabase.php'>ENTRAR</a>
												</div>
											  </div>
											</div>";
										  
									echo "  
											<div class='col s12 m4'>
											  <div class='card'>
												<div class='card-image'>
												  <img src='../../resources/images/escribe.jpg'>	  
												</div>
												<div class='card-content'>
												  <p>Plan</p>
												</div>
												<div class='card-action'>
												  <a href='#'>ENTRAR</a>
												</div>
											  </div>
											</div>";
echo							"</div>";
echo						"</div>";			
					  
	  
						
//----------------------------------Footer-----------------------------------------------------------------------------------------------------------------------------------------------------------------> 
						echo		"<footer class='white page-footer'>
											  <div class='blue-grey darken-4 footer-copyright'>
												<div class='container white-text'>
												© 2017 Copyright Text
												<a class='white-text right' href='http://www.prepa6.unam.mx'>Preparatoria 6 Antonio Caso</a>
												</div>
											  </div>
									 </footer>";

?>