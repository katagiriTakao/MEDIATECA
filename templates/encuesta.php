<?php

include('menu.php');

echo  "		<div class='container'>	
				<div class='row'>
					<div class='col s12'>
							<form method='POST' action='#' class='formu'>
								<div class='row'>
									<div class='input-field col s6'>
										<input  id='ctn' type='text' class='validate'>
										<label for='ctn'>Número de cuenta</label>
									</div>
									<div class='input-field col s6'>
										<select>
											<option value='' selected>     </option>
											<option value='1'>INGLES</option>
											<option value='2'>FRANCES</option>
											<option value='3'>ALEMAN</option>
											<option value='4'>ITALIANO</option>
										</select>
										<label>Elige un idioma...</label>
									</div>
								</div>	
								<div class='row'>
									<div class='radio' >
										<input type='radio' name='elige' id='SI' value='Si'>
										<label for='SI'>Si</label>
										<input type='radio' name='elige' id='NO' value='No'>
										<label for='NO'>No</label>
									</div>
									<label>¿Elaboraste plan de trabajo en la mediateca?</label>							
									<div class='input-field col s12'>
										<textarea name='textarea' id='area' cols='30' rows='10' class='materialize-textarea'></textarea>
										<label for='textarea'>Comentario</label>
									</div>
								</div>
								<div class='row'>
									<div class='radio'>
										<input type='radio' name='elige2' id='SI2' value='Si'>
										<label for='SI2'>Si</label>
										<input type='radio' name='elige2' id='NO2' value='No'>
										<label for='NO2'>No</label>
									</div>
									<label>¿Le has dado seguimiento a tu plan de trabajo?</label>	
									<div class='input-field col s12'>
										<textarea name='textarea2' id='area2' cols='30' rows='10' class='materialize-textarea'></textarea>
										<label for='textarea2'>Comentario</label>
									</div>
								</div>
							</form>
						</div>	
					</div>
				</div>";	
	
	echo"
			<script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>";
	echo	"<script type='text/javascript' src='../materialize/js/materialize.min.js'></script>";
		
	echo"	
		
			<script>
			$(document).ready(function(){
				$('select').material_select();
			});
			</script>";
	
				  
?>				  
        

