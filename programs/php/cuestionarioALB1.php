<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasal where id_preg>=48";

				echo $pregun;

				echo "</br>";
				echo "<form method='get' action='cuestionarioALA2.php'>";
				$result = mysqli_query($conn,$pregun);
				for($a=48;$a<59;$a++){
				//if (mysqli_num_rows($result) > 0) 
				    // output data of each row
				    $row = mysqli_fetch_assoc($result);
				        $pregunta = explode ("_",$row["preguntas"]);
				       
				        echo "<div class='container center-align'>";


				        echo "<div class='row'>";

						        echo "<div class='col m4' id='preg'></br>".$pregunta[0]."</div>";
						           $pregunNumb = $row["id_preg"];
						        //   echo " id pregunta ".$pregunNumb;

						      //    echo "  id tema ".$row['id_tema']." tema ".$row['tema'];

							     echo 						"<div class='input-field col m4'>
														    <select name=".$pregunNumb.">
			 											      <option value='' disabled selected></option>
														      <option value='A'>".$row["in_a"]."</option>
														      <option value='B'>".$row["in_b"]."</option>
														      <option value='C'>".$row["in_c"]."</option>
														      <option value='D'>".$row["in_d"]."</option>
														    </select>
														   </div>
														   <div class='col m4'><div class='col '></br>".$pregunta[1]."</div></div>
							</div>
							</div>";
			            
			           

			         }
				    
				
			     echo "
<p>Katarzyna ist in Slubice zur Schule gegangen. Slubice liegt in Polen, an der Grenze zu Deutschland. Man kann von Slubice zu Fuβ nach Frankfurt an der Oder gehen. Früher konnte man nicht über die Grenze gehen. Erst seit die Berliner Mauer gafallen ist, ist vieles anders. Katarzyna erinnert sich noch an ihren ersten Besuch im Westen. Ihre Eltern haben sich sehr gefreut, aber sie hat das nicht verstanden. Und sie hat die sprache nicht verstanden. Sie hatte kein Interesse an der Sprache. In der Schule hat sie Deutsch gelernt. Aber sie  fand Deutsch langweilig. Als sie 13 Jahre alt war, war sie oft an den Wochenenden in Frankfurt. Ihre Eltern hatten dort einen Kollegen. Manchmal war sie auch in Frankfurt im Kino. Mit 16 Jahren hat sie in den Ferien in einer Deustschen Firma gearbeitet. Da hat sie Deutsch gelernt. Und im letzten Schuljahr hatte sie eine gute Note in Deutsch. Heute spricht sie sehr gut  Deutsch.

							
</p>

							richtig		falsch		
";
		for($a=59;$a<64;$a++){
				//if (mysqli_num_rows($result) > 0) 
				    // output data of each row
				    $row = mysqli_fetch_assoc($result);
				        $pregunta =$row["preguntas"];
				       
				        echo "<div class='container center-align'>";


				        echo "<div class='row'>";

						        echo "<div class='col m4' id='preg'></br>".$pregunta."</div>";
						           $pregunNumb = $row["id_preg"];
						        //   echo " id pregunta ".$pregunNumb;

						      //    echo "  id tema ".$row['id_tema']." tema ".$row['tema'];

							     echo 						"<div class='input-field col m4'>
														    <select name=".$pregunNumb.">
			 											      <option value='' disabled selected></option>
														      <option value='A'>".$row["in_a"]."</option>
														      <option value='B'>".$row["in_b"]."</option>
														    </select>
														   </div>
														</div>
							</div>
							</div>";
			            
			           

			         }

echo "_________________________________________________________________________________________________________________________________________________________________________________________________";





				echo "

						<input type='submit' />
						</form>";
			
				echo $recibir=$_GET['resp'];
				mysqli_close($conn);						
				echo "

				<script>
					$(document).ready(function() {
    					$('select').material_select();
					});
					
				</script>

            "



?>