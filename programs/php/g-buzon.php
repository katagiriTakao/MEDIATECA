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

$query='SELECT * FROM profe_comen WHERE nombre_usuario="'.$alumno.'"';

	$res=mysqli_query($conn,$query);
	$resultado=mysqli_fetch_assoc($res);
	$usuario=$resultado["alumno_destino"];
	SESSION_start();
	$SESSION['alumno']=$usuario;


$guarda= mysqli_query($conn, "INSERT INTO profe_comen (prof,alumno_destino,comentario) VALUES ('".$prof."','".$alumno."','".$comen."');");




?>