<?php
				

				include ('menu.php');


				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasit where id_preg>=76 ";

				echo $pregun;



			echo"<form>";



	






				echo "Examen de colocación B1</br>";
			$result = mysqli_query($conn,$pregun);
				for ($a=76;$a<83;$a++)
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






							echo "XII) Inserisci la forma del verbo adatto.";


					for ($a=83;$a<98;$a++)
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