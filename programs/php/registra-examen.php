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
$query='SELECT id FROM preguntas ORDER BY id DESC LIMIT 1';
$ultimo=mysqli_query($conn,$query);
$id=mysqli_fetch_assoc($ultimo);
echo $id['id'];
$final = (int)$id['id'];


echo $final;
echo $final++;


$guardar= mysqli_query($conn, "INSERT INTO preguntas(id,preguntas,inA,inB,inC,inD) VALUES( ".$final++." ,'".$pre."','".$res1."','".$res2."','".$res3."','".$res4."');");


echo	"<!DOCTYPE html>
				<html lang='es'>
					<head>
							<meta charset='UTF-8'/>
							<title>Examen</title>
					<head>
			            <body>
							<div>
								Pregunta1: ".$pre." <br/>
								a) ".$res1." <br/>
								b) ".$res2." <br/>
								c) ".$res3." <br/>
								d) ".$res4." <br/>
							</div>
						</body>
					</head>			
				</html>";		

?>