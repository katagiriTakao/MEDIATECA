<?php
	
include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";
			


	$recibe = $_GET[''];
	print_r $recibe;

	



?>