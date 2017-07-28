<?php

	include ('htmlmenu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";





				$array_enviadas=array();



				
				$array_respu=array();

			
				$querIn="SELECT respues from respuin";
				$connex=mysqli_query($conn,$querIn);
			 
		while( $printeo=mysqli_fetch_array($connex))
			{

				array_push($array_respu,$printeo['respues']);

			}


			print_r($array_respu);




//________________________________________________________________________



				$recp=$_POST['idioma'];
				echo $recp;
				for ($a=1;$a<=99;$a++){

					echo $a;
					echo $_POST[$a];
					array_push($array_enviadas,$_POST[$a]);



				}
				print_r($array_enviadas);




//___________________________________________________________________________________________

				$resultado = array_diff_assoc($array_enviadas, $array_respu);

				echo "Errores:"; print_r($resultado);

				echo "<br/>";

				$result_array = array_intersect_assoc($array_enviadas, $array_respu);
				
				echo "Correctas:"; print_r($result_array);


				echo "<br/>";

		
				$guarda=array();
				$ava=0;

				for ($ava=0;$ava<=98;$ava++){



					if ($array_enviadas[$ava]==$array_respu[$ava])

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
				$calif=0;
				echo "<table>";

				foreach ($regreso as $ki ) {
					

					$calif+=$ki;

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
					
						
				echo "</table>";


					echo "tu calificación es de".$calif."/99";


?>