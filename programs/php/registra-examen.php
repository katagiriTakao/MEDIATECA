<?php
include('menu.php');
$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

$tildes = $conn->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente


$pre=$_POST['pre1'];
$res1=$_POST['res1'];
$res2=$_POST['res2'];
$res3=$_POST['res3'];
$res4=$_POST['res4'];
$correcta=$_POST['correcta'];
$tema=$_POST['tema'];
$query='SELECT * from preguntas';
$query2='SELECT * from examenes';
//----------------------------------------------------------------------------------------------- 
/*$id=mysqli_fetch_assoc($ultimo);
echo $id['id'];
$final = (int)$id['id'];

echo $final++;*/
//-----------------------------------------------------------------------------------------------


$guardar= mysqli_query($conn, "INSERT INTO preguntas (id_preguntas,preguntas,inA,inB,inC,inD,id_tema) VALUES( ".$final++." ,'".$pre."','".$res1."','".$res2."','".$res3."','".$res4."','".$tema."'');");


$respuesta=mysqli_query($conn,"INSERT INTO respu (respues) VALUES (".$correcta.");");



?>