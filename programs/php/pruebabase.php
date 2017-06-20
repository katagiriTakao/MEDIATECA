<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";



				$pregun="select preguntas,inA,inB,inC,inD from preguntas";

				echo $pregun;

				echo "</br>";
				echo "<form>";
				$result = mysqli_query($conn,$pregun);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        $pregunta = explode ("_",$row["preguntas"]);
				        echo "<div class='row'>";
				        echo "<div class='col m1'></br>".$pregunta[0]."</div>
				        	<div class='input-field col m1'>
											    <select>
											      <option value='' disabled selected></option>
											      <option value='1'>".$row["inA"]."</option>
											      <option value='2'>".$row["inB"]."</option>
											      <option value='3'>".$row["inC"]."</option>
											      <option value='4'>".$row["inD"]."</option>
											    </select>
											   </div><div class='col m1'><div class='col m3'></br>".$pregunta[4]."</div></div>";
			            echo "</div>";


			         
				    }
				} else {
				    echo "0 results";
				}
				echo "</form>";
				mysqli_close($conn);
											
				echo "
				<script>
					$(document).ready(function() {
    					$('select').material_select();
					});
				</script>
            "



?>