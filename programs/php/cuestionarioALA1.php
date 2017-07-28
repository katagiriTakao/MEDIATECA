<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasal";

				echo $pregun;

				echo "</br>";
				echo "<form method='get' action='cuestionarioALA1.php'>";
				$result = mysqli_query($conn,$pregun);
				for($a=0;$a<13;$a++){
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
<p>Christine kommt aus Österreich. Sie studiert in Berlin. Sie möchte später Ärztin werden.</br> Sie arbeitet viel. Am Morgen geht sie in die Schule, dann besucht sie einen Englischkurs für Studenten.</br> Nachmittags arbeitet sie als Kellnerin in einem Café. </br>Am Abend macht sie die Hausaufgabe. Am Wochenende liest sie viel oder trifft Freunde.</p>

							richtig		falsch		
";
		for($a=14;$a<19;$a++){
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

for($a=19;$a<41;$a++){
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
<p>Katarzyna geht es nicht gut. Sie war gestern bei Freunden eingeladen. Andreas hat ein groβes Gartenfest gemacht. Er geht nächsten Montag für ein Jahr nach Frankreich. Katarzyna hat sich für das Fest eine neue Bluse und Jeans gekauft. Sie trägt gerne Hosen. Röcke stehen ihr nicht. Das Fest war toll. Katarzyna hat viel getanzt. Es war nicht sehr warm, aber ihr war nicht kalt. </br>Sie hatte keine Jacke. Das war vor drei Tagen. </br>Heute tut ihr der Hals weh. Sie hat Schnupfen und Kopfschmerzen. Sie möchte gerne zu Hause bleiben, aber am Nachmittag hat sie einen wichtigen Kurs in der Universität. </p>

";



	for($a=41;$a<46;$a++){
				//if (mysqli_num_rows($result) > 0) 
				    // output data of each row
				 $row = mysqli_fetch_assoc($result);
				        $pregunta=$row["preguntas"];
				       
				       
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


for($a=46;$a<48;$a++){
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