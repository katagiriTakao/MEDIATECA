<?php


include('menu.php');
$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

$tildes = $conn->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente


$comen=$_POST['mensaje'];
$prof=$_POST['cuenta'];
$alumno=$_POST['alumno'];


$guarda= mysqli_query($conn, "INSERT INTO profe_comen (prof,alumno_destino,comentario) VALUES ('".$prof."','".$alumno."','".$comen."');");




?>