<?php

	include ('menu.php');

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



				print_r($correctas);

				print_r($alures);


				echo "<br/>"; 
				$arre1=array('A','J','D','S','S');
				$arre2=array('B','H','D','G','S');

				$resultado = array_diff_assoc($arre2, $arre1);

				echo "Errores:"; print_r($resultado);

				echo "<br/>";

				$result_array = array_intersect_assoc($arre1, $arre2);
				
				echo "Correctas:"; print_r($result_array);


				echo "<br/>";

		
				$guarda=array();
				$ava=0;

				for ($ava=0;$ava<=4;$ava++){



					if ($arre1[$ava]==$arre2[$ava])

					{
						$guarda[$ava]=1;
					}
					else
					{

						$guarda[$ava]=0;

					};



				};

				
				print_r($guarda);
				echo "</br>";
			

				$cadenaza=implode(',',$guarda);



				echo $cadenaza;


				$regreso=explode(',',$cadenaza);

				echo "</br>";
				print_r($regreso);
				$vari=1;

				echo "<table>";

				foreach ($regreso as $ki ) {
					
					$varstri=(string)$ki;
					
					switch ($varstri)  {


							case  '0' :
									echo 
										"<tr>
											<td> ".$vari."</td>
											<td> equivoco</td>
										</tr>";


										;
										break;
										

							case '1':

										

											echo 
											"<tr>
												<td> ".$vari."</td>
												<td> correcto</td>
											</tr>";


										;
										break;	


					};
						$vari++;

						
						};

						
				echo "</table>"


?>