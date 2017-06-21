<?php

include('menu.php');

echo 	"<h2>Captura de Examenes Diagnostico</h2>";

echo	"<!DOCTYPE html>";
echo	"<html>";
echo		"<head>";
echo 					"<title>Cuestionario</title>";
echo 					"<meta charset='UTF-8'/>";
echo					"<link rel='stylesheet' type='text/css' href='#'/>";
echo		"</head>";
echo		"<body>";	
echo			"<form action='registra-examen.php' method='POST'>";
echo							"Pregunta:<input type='text' name='pre1' size='80'><br/>
								A<input type='text' name='res1'  size='20'><br/>
  								B<input type='text' name='res2'  size='20'><br/>
	 	 						C<input type='text' name='res3'  size='20'><br/>
	 	 						D<input type='text' name='res4'  size='20'><br/>
	 	 						";//Inciso correcto:<input type='text' name='corecta' size='20' size='40' placeholder='LETRA'><br/>//."

echo	 	 					"<input type='submit' value='Registrar'>";
echo	 	 					"<input type='reset' value='Nueva Pregunta'>";
	
echo	 	 	"</form>";								
echo		"</body>";
echo	"</html>";

?>