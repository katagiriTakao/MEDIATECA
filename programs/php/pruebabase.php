<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";



				$pregun="select preguntas,id,inA,inB,inC,inD from preguntas order by rand()";

				echo $pregun;

				echo "</br>";
				echo "<form method='get' action='pruebabase.php'>";
				$result = mysqli_query($conn,$pregun);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        $pregunta = explode ("_",$row["preguntas"]);
				       
				        echo "<div class='container center-align'>";


				        echo "<div class='row'>";

						        echo "<div class='col m4' id='preg'></br>".$pregunta[0]."</div>";
						           $pregunNumb = $row["id"];
						           echo $pregunNumb;
							     echo 						"<div class='input-field col m4'>
														    <select name=".$pregunNumb.">
			 											      <option value='' disabled selected></option>
														      <option value='A'>".$row["inA"]."</option>
														      <option value='B'>".$row["inB"]."</option>
														      <option value='C'>".$row["inC"]."</option>
														      <option value='D'>".$row["inD"]."</option>
														    </select>
														   </div>
														   <div class='col m4'><div class='col m3'></br>".$pregunta[1]."</div></div>
							</div>
							</div>";
			            
			            echo "<p id='debugResp'></p>";
 

			         
				    }
				} else {
				    echo "0 results";
				}
				echo "

						<input type='submit' />
						</form>";
				mysqli_close($conn);
				echo $recibir=$_GET['resp'];						
				echo "
				<script>
					$(document).ready(function() {
    					$('select').material_select();
					});
					
				</script>

            "



?>