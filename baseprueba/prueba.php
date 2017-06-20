<?php
				

				include ('../programs/php/menu.php');

				$conn = new mysqli('localhost', 'root', '');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";



			




?>