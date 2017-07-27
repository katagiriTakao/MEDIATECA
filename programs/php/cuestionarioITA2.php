<?php
				

				include ('menu.php');


				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasit where id_preg>=56 ";

				echo $pregun;
				echo "Examen de colocación A2</br>
				 IX) Completa le frasi con i verbi al tempo presente.</br>";



				echo "<form method='get' action='cuestionarioITA2.php'>";
				$result = mysqli_query($conn,$pregun);
				
				for ($a=56;$a<66;$a++)
				{

							//if (mysqli_num_rows($result) < $seccion1) {
							    // output data of each row
							    $row = mysqli_fetch_assoc($result);
							        $pregunta = explode ("_",$row["preguntas"]);
							       
							        echo "<div class='container center-align'>";


							        echo "<div class='row'>";

									        echo "<div class='col m4' id='preg'></br>".$pregunta[0]."</div>";
									           $pregunNumb = $row["id_preg"];
									           echo " id pregunta ".$pregunNumb;

									         // echo "  id tema ".$row['id_tema']." tema ".$row['tema'];

										     echo 						"<div class='input-field col m4'>
																	   <input type='text' name='".$pregunNumb."'></input>
																	   </div>
																	   <div class='col m4'><div class='col '></br>".$pregunta[1]."</div></div>
										</div>
										</div>";
						            
						          
			 

						         
							    
							} 

 echo "X) Metti i verbi al passato prossimo";



				echo "<form method='get' action='cuestionarioITA2.php'>";
				
				
				for ($a=66;$a<76;$a++)
				{

							//if (mysqli_num_rows($result) < $seccion1) {
							    // output data of each row
							    $row = mysqli_fetch_assoc($result);
							        $pregunta = explode ("_",$row["preguntas"]);
							       
							        echo "<div class='container center-align'>";


							        echo "<div class='row'>";

									        echo "<div class='col m4' id='preg'></br>".$pregunta[0]."</div>";
									           $pregunNumb = $row["id_preg"];
									           echo " id pregunta ".$pregunNumb;

									         // echo "  id tema ".$row['id_tema']." tema ".$row['tema'];

										     echo 						"<div class='input-field col m4'>
																	   <input type='text' name='".$pregunNumb."'></input>
																	   </div>
																	   <div class='col m4'><div class='col '></br>".$pregunta[1]."</div></div>
										</div>
										</div>";
						            
						          
			 

						         
							    
							} 





				
				echo"		<input type='submit' />
						</form>";
			
				echo $recibir=$_GET['resp'];
				mysqli_close($conn);						
				
?>