<?php



				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";




				$query='SELECT * from chequeo JOIN examenes  ON chequeo.id_tipo=examenes.id_tipo JOIN respu ON chequeo.id_respues=respu.id_respues JOIN registroresp ON  chequeo.registro_res=registroresp.registro_res';
				





				$res=mysqli_query($conn,$query);
				$fila=mysqli_fetch_assoc($res);


				echo"Alumno: ".$fila['registros']." <br/> Correcto ".$fila['respues']." <br/>";	




				$alures=(explode(',',$fila['registros']));

				echo "<br/>";

				$correctas=(explode(',',$fila['respues']));


				foreach ($correctas as $res) {

						foreach($alures as $res2){


											if($res2===$res){


												$correcta=$res2;//String o array con localidades del 1-100 Que lo guarde con valor 1

											}else{

												$incorrecta=$res2;

											}

						}
					
				}

















?>