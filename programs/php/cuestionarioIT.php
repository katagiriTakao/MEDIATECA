<?php
				

				include ('menu.php');

				$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";

				echo "</br>";

				

				$pregun="select * from preguntasit";

				echo $pregun;
				echo "Examen de colocación
						Quanto conosci dell’italiano? Rispondi alle domande e vediamo il levello d’italiano che ne hai.</br>
						I) I sostantivi. Scrivi il singolare oppure il plurale delle seguenti parole.";
				echo "</br>";
				echo "<form method='get' action='cuestionarioIT.php'>";
				$result = mysqli_query($conn,$pregun);
				
				for ($a=0;$a<10;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 
					
				echo "
					II) Metti gli articoli giusti, sotto ci sono le opzioni.</br>";



						for ($a=10;$a<20;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 


				echo"
					1. A)  l’      B)  la      C)  il</br>
					2. A)  l’      B)  la      C)  il</br>
					3. A)  la      B)  le      C)  l’</br>
					4. A)  il      B)  lo      C)  gli</br>
					5. A)  la      B)  gli     C)  il</br>
					6. A)  l’      B)  la      C)  il</br>
					7. A)  l’      B)  la      C)  le</br>
					8. A)  l’      B)  la      C)  il</br>
					9. A)  il      B)  gli     C)  lo</br>
					10. A)  l’     B)  la      C)  le</br>";



				echo"


					III) Completa con gli articoli indeterminativi";


							for ($a=20;$a<25;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 





	

			echo "IV) Completa le seguenti frasi con il presente del verbo essere. ";


					for ($a=26;$a<31;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 




			echo "V) Completa le seguenti frasi con il presente del verbo AVERE.";


					for ($a=31;$a<36;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 
echo "VI) Scrivi con lettera i seguenti numeri.	";


					for ($a=36;$a<41;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 
echo "VII) Metti la loro nazionalitá (attenzione al genero e al numero). 	";


					for ($a=41;$a<46;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 
echo "VIII) Presente indicativo. Scegli l’alternativa corretta.";


					for ($a=46;$a<56;$a++)
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
						            
						            echo "<p id='debugResp'></p>";
			 

						         
							    
							} 

echo "a) Mangiamo  	b) Mangiare	 c) Mangioz</br>

	a) Giochiamo		b) Gioco		c) Giocano</br>
a) Nuotate	b) Nuotano	c) Nuota</br>
a) Prende	 	b) Prendo 	c) Prendiamo</br>
a) Cadete		b) Cadiamo 		c) Cade</br>
a) Conosce	b) Conoscere		c) Conosco</br>
a) Sente		b) Sento	c) Senti</br>
a) Apre		b) Apri 	c) Aprire</br>
a) Finiamo	b) Finiscono	c) Finisco</br>
a) Pulisce 	b) Pulire	c) Pulite</br>


";



				
				echo"		<input type='submit' />
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