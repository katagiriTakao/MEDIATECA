<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasin  join temas on preguntasin.id_tema=temas.id_tema order by rand()";

				echo $pregun;

				echo "</br>";
				echo "<form method='get' action='comparacion.php'>";
				$result = mysqli_query($conn,$pregun);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
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
														      <option value='A'>".$row["in_A"]."</option>
														      <option value='B'>".$row["in_B"]."</option>
														      <option value='C'>".$row["in_C"]."</option>
														      <option value='D'>".$row["in_D"]."</option>
														      <input type='hidden' name='in'></input>
														    </select>
														   </div>
														   <div class='col m4'><div class='col '></br>".$pregunta[1]."</div></div>
							</div>
							</div>";
			            
			           

			         
				    }
				} else {
				    echo "0 results";
				}
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