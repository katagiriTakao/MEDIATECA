<?php

echo		"<form method='POST' action='captura-examen.php'>
					<input type='text' name='tamaño' placeholder='¿Cuántas preguntas tendra el examen?'>
					<input type='submit' value='Generar'>
			</form>";		



echo	"<!DOCTYPE html>";
echo	"<html>";
echo		"<head>";
echo 					"<title>Cuestionario</title>";
echo 					"<meta charset='UTF-8'/>";
echo					"<link rel='stylesheet' type='text/css' href='#'/>";
echo		"</head>";
echo		"<body>";	
			$t=$_POST['tamaño'];
echo			"<form action='captura-examen.php' method='get'>";
				for($a=0;$a<$t;$a++){
echo	"						<br/>
								Pregunta:<input type='text' name='pre1'><br/>

								A<input type='text' name='res1'><br/>
  								B<input type='text' name='res2'><br/>
	 	 						C<input type='text' name='res3'><br/>
	 	 						D<input type='text' name='res4'><br/>

	 	 						<input type='submit' value='Registrar'>";
	 	 				}
echo	 	 	"</form>";	
			$resul=$_GET['res1'];
			echo  $resul;								
echo		"</body>";
echo	"</html>";

?>