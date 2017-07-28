<?php

session_start();

include('menu.php');




/*hay que checar esto porque no es más que ponerle seda a la mona.
error_reporting(0);
ini_set('display_errors', 0);
/basicamente le estoy diciendo, me valen gorro tus errores**/

$usuario_alum=$SESSION['id'];

		echo"<meta http-equiv='Content-Type' content='text/html' charset='utf-8' />";

		$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
				echo "Connected successfully</br></br>";

		$sacar="SELECT * FROM profe_comen WHERE alumno_destino=".$usuario_alum."JOIN   ";
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



	
	//$datos = "SELECT * FROM modulo WHERE no_cta=".$usuario_alum" ";
	$datosBim ="SELECT (GRUPO,CALBIM1,CALBIM2,CALBIM3) FROM califica WHERE NOCTA=".$usuario_alum;
	$datosNom = "SELECT (ApPat,ApMat,Nombre) FROM Directorio WHERE Cuenta=".$usuario_alum;

/*

	$modulo2 = "SELECT * FROM modulo JOIN sesiones ON modulo.id_sesiones=sesiones.id_sesiones JOIN materi_sesio ON sesiones.id_mat_sesi=materi_sesio.id_mat_sesi JOIN catalogo ON materi_sesio.clasificacion=catalogo.clasificacion";




	$modulo3 = "SELECT * FROM modulo JOIN examenes ON modulo.id_diagnostico=examenes.id_diagnostico JOIN chequeo ON examenes.id_examRegistrado=chequeo.id_examRegistrado JOIN registroResp ON chequeo.registro_res=registroResp.registro_res JOIN respu ON chequeo.id_respues=respu.id_respues";


*/
	
//	$evaluacion2="SELECT * FROM examenes JOIN chequeo ON examenes.id_tipo=chequeo.id_tipo JOIN registroResp ON chequeo.registro_res=registroResp.registro_res JOIN respu ON chequeo.id_respues=respu.id_respues";
	$gyu=mysqli_query($conn,$datosNom);
	$res=mysqli_query($conn,$datosBim);
	//$cerdo=mysqli_query($conn,$modulo2);
	//$pollo=mysqli_query($conn,$modulo3);

	$bienve=mysqli_fetch_assoc($gyu);
	$fila=mysqli_fetch_assoc($res);
	//$fila2=mysqli_fetch_assoc($cerdo);
	//$fila3=mysqli_fetch_assoc($pollo);



			echo "</br><h1>modulo/Directorio</h1></br>";

			echo "BIENVENID@ DE NUEVO:".$bienve['Nombre']."";
		
			echo "</br><h1>modulo/califica</h1></br>";


			echo" ".$fila['NOCTA']." ".$fila['GRUPO']." ".$fila['CALBIM1']." ".$fila['CALBIM2']." ".$fila['CALBIM3'];	

/*

			echo "</br></br><h1>modulo/sesiones</h1></br></br>";

			echo " numero de sesion ".$fila2['id_sesiones']." </br>num cuenta ".$fila2['no_cta']."</br>hora de entrada ".$fila2['hora_entrada']." </br>hora de salida ".$fila2['hora_salida']." </br>material utilizado ".$fila2['id_materiales']."</br>nombre del material ".$fila2['nombre_mat']." </br>asesor ".$fila2['id_asesor']." </br>nombre del asesor ".$fila2['nombre'];




			echo "</br></br><h1>modulo/examenes</h1></br></br>";


			echo     " id diagnostico  ".$fila3['id_diagnostico']." </br>tipo de examen  ".$fila3['id_tipo']." resultados   ".$fila3['result']."  </br>tipo de respuestas  ".$fila3['registro_res']." </br>respuestas del alumno   ".$fila3['registros']."  </br>idioma de las respuestas  ".$fila3['id_respues']."  </br>respuestas correctas  ".$fila3['respues']." ";


*/


		echo"	<div class'container'>
					<div class='row'>";
						echo "  
											<div class='col s12 m4'>
											  <div class='card'>
												<div class='card-image'>
												  <img src='../../resources/images/junta.jpg'>
												</div>
												<div class='card-content'>
												  <p>Sesiones de trabajo en la mediateca</p>
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
												<div class='card-action' align='center'>
												  <a href='cuestionarioIn.php'>ingles</a></br>
												  <a href='cuestionarioALA1.php'>aleman a1</a>
												  <a href='cuestionarioALA2.php'>aleman a2</a>
												  <a href='cuestionarioALB1.php'>aleman b1</a></br>
												  <a href='pruebabase.php'>frances a1</a>
												  <a href='pruebabase.php'>frances a2</a></br>
												  <a href='cuestionarioIT.php'>italiano a1</a>
												  <a href='cuestionarioITA2.php'>italiano a2</a>
												  <a href='cuestionarioITB1.php'>italiano b1</a></br>
												  <a href='pruebabase.php'>resultados</a>

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
												  <p>OBJETIVOS Y OBSERVACIONES</p>
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