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

				/*$correctas=new SplFixedArray(100);

				$alures=new SplFixedArray(100);*/


				print_r($correctas);

				print_r($alures);



				/*$arre1=array('1'=>'A','2'=>'H','3'=>'D','4'=>'S');
				$arre2=array('1'=>'A','2'=>'H','3'=>'D','4'=>'S');

				/*$resultado = array_diff_assoc($arre2, $arre1);

				echo "Errores:"; print_r($resultado);

				echo "<br/>";

				$result_array = array_intersect_assoc($arre1, $arre2);
				
				echo "Correctas:"; print_r($result_array);


				
				foreach ($arre2 as $pregunta2=>$letra2) {

						foreach($arre1 as $pregunta1=>$letra1){


											IF($letra1==$letra2){


												$letra1=1;//String o array con localidades del 1-100 Que lo guarde con valor 1
												
												

											}else{

												$letra1=0;
												
											}

							
						}

					var_dump($letra1);	
						
				}*/
				
				

				


				


?>