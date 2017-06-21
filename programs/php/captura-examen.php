<?php

include('menu.php');

echo 	"<h2>Captura de Examenes Diagnóstico</h2>";
echo		"<body>";	
echo 		"<div class='container'>";
echo			"<form action='registra-examen.php' method='POST'>";
echo							"Pregunta:<input type='text' name='pre1' size='80'><br/>
								A<input type='text' name='res1'  size='20'><br/>
  								B<input type='text' name='res2'  size='20'><br/>
	 	 						C<input type='text' name='res3'  size='20'><br/>
	 	 						D<input type='text' name='res4'  size='20'><br/>
	 	 						<div class='input-field col s12'>
									    <select  name='correcta'>
									      <option value='' disabled selected>Inciso correcto</option>
									      <option value='a'>A</option>
									      <option value='b'>B</option>
									      <option value='c'>C</option>
									      <option value='d'>D</option>
									    </select>
								</div>";

echo	 	 					"<input type='submit' value='Registrar'>";
echo	 	 					"<input type='reset' value='Nueva Pregunta'>";
	
echo	 	 	"</form>";		
echo		"</div>";	
echo 		"<script>
			  $(document).ready(function() {
   				 $('select').material_select();
 				 });
			</script>";	

echo		"</body>";
echo	"</html>";

?>