<?php

	include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";



	$modulo1 = "SELECT * FROM modulo JOIN califica ON modulo.no_cta=califica.no_cta";
	$modulo2 = "SELECT * FROM modulo JOIN sesiones ON modulo.id_sesiones=sesiones.id_sesiones";
	$modulo3 = "SELECT * FROM modulo JOIN examenes ON modulo.id_diagnostico=examenes.id_diagnostico";
	$evaluacion1="SELECT * FROM examenes JOIN chequeo ON examenes.id_tipo=chequeo.id_tipo";


	$cerdo=mysqli_query($conn,$modulo2);
	$res=mysqli_query($conn,$modulo1);
	$pollo=mysqli_query($conn,$modulo3);

	$gyu=mysqli_query($conn,$evaluacion1);

	$fila=mysqli_fetch_assoc($res);
	$fila2=mysqli_fetch_assoc($cerdo);
	$fila3=mysqli_fetch_assoc($pollo);

	$fila4=mysqli_fetch_assoc($gyu);


		
			echo "modulo/califica</br>";
			echo" ".$fila['no_cta']." ".$fila['idioma']." ".$fila['nombre']." ".$fila['calificaciones']." ";	



			echo "</br>modulo/sesiones </br>";

			echo " ".$fila2['id_sesiones']." ".$fila2['no_cta']." ".$fila2['hora_entrada']." ".$fila2['hora_salida']." ".$fila2['id_materiales']." ".$fila2['id_asesor']."";




			echo "</br>modulo/examenes</br>";

			echo  "".$fila3['id_diagnostico']." ".$fila3['id_tipo']." ".$fila4['result']." ".$fila4['resgistro_resp']." ".$fila4['respues']." ";








	



?>