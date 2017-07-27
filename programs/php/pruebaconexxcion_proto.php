<?php

	include ('menu.php');

				$conn = new mysqli('localhost', 'root','','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: ". $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";


	$pruebaimage="SELECT * FROM picture";
	$modulo1 = "SELECT * FROM modulo JOIN califica ON modulo.no_cta=califica.no_cta";



	$modulo2 = "SELECT * FROM modulo JOIN sesiones ON modulo.id_sesiones=sesiones.id_sesiones JOIN materi_sesio ON sesiones.id_mat_sesi=materi_sesio.id_mat_sesi JOIN catalogo ON materi_sesio.clasificacion=catalogo.clasificacion";




	$modulo3 = "SELECT * FROM modulo JOIN examenes ON modulo.id_diagnostico=examenes.id_diagnostico JOIN chequeo ON examenes.id_examRegistrado=chequeo.id_examRegistrado JOIN registroResp ON chequeo.registro_res=registroResp.registro_res JOIN respu ON chequeo.id_respues=respu.id_respues";



	
//	$evaluacion2="SELECT * FROM examenes JOIN chequeo ON examenes.id_tipo=chequeo.id_tipo JOIN registroResp ON chequeo.registro_res=registroResp.registro_res JOIN respu ON chequeo.id_respues=respu.id_respues";

	$pruebaimages=mysqli_query($conn,$pruebaimage);
	$res=mysqli_query($conn,$modulo1);
	$cerdo=mysqli_query($conn,$modulo2);
	$pollo=mysqli_query($conn,$modulo3);

	$image=mysqli_fetch_assoc($pruebaimages);
	$fila=mysqli_fetch_assoc($res);
	$fila2=mysqli_fetch_assoc($cerdo);
	$fila3=mysqli_fetch_assoc($pollo);




			echo $image['ID']."".$image["IMAGE"];
			ECHO "<img=src='".$image["IMAGE"]."'></img>";


			echo '<img src="data:image/png;base64,'.base64_encode($image["IMAGE"]).'"/>';

			echo "</br><h1>modulo/califica</h1></br>";
			echo" ".$fila['no_cta']." ".$fila['idioma']." ".$fila['nombre']." ".$fila['calificaciones']." ";	



			echo "</br></br><h1>modulo/sesiones</h1></br></br>";

			echo " numero de sesion ".$fila2['id_sesiones']." </br>num cuenta ".$fila2['no_cta']."</br>hora de entrada ".$fila2['hora_entrada']." </br>hora de salida ".$fila2['hora_salida']." </br>material utilizado ".$fila2['id_materiales']."</br>nombre del material ".$fila2['nombre_mat']." </br>asesor ".$fila2['id_asesor']." </br>nombre del asesor ".$fila2['nombre'];




			echo "</br></br><h1>modulo/examenes</h1></br></br>";


			echo     " id diagnostico  ".$fila3['id_diagnostico']." </br>tipo de examen  ".$fila3['id_tipo']." resultados   ".$fila3['result']."  </br>tipo de respuestas  ".$fila3['registro_res']." </br>respuestas del alumno   ".$fila3['registros']."  </br>idioma de las respuestas  ".$fila3['id_respues']."  </br>respuestas correctas  ".$fila3['respues']." ";




	



?>
