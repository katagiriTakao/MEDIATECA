<?php

include('menu.php');
//_------------------------------------------------------
$conn = new mysqli('localhost', 'root', '','prueba_preguntas');

				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully";


$tildes = $conn->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente



//hay que checar esto porque no es más que ponerle seda a la mona.
error_reporting(0);
ini_set('display_errors', 0);
//basicamente le estoy diciendo, me valen gorro tus errores



$comen=$_POST['mensaje'];
$prof=$_POST['cuenta'];
$alumno=$_POST['alumno'];

$query='SELECT * FROM profe_comen WHERE nombre_usuario="'.$alumno.'"';

	$res=mysqli_query($conn,$query);
	$resultado=mysqli_fetch_assoc($res);
	$usuario=$resultado["alumno_destino"];
	SESSION_start();
	$SESSION['alumno']=$usuario;


$guarda= mysqli_query($conn, "INSERT INTO profe_comen (prof,alumno_destino,comentario) VALUES ('".$prof."','".$alumno."','".$comen."');");


//_----------------------------------------------------
echo "
	<div class='row' align='center'>		
		<form class='col s12' method='POST' action='buzon.php'>
				<div class='modal-content'>
					<h4 align='center'>Buzón</h4>
					<div class='row'>
					<!--Maestro-->
						<div class='input-field col s6'>
							<i class='material-icons prefix'>account_circle</i>
							<input id='cuenta' name='cuenta' type='text' class='validate tooltipped' data-position='bottom' data-delay='50' data-tooltip='Escribe tu No. de trabajador'/>
							<label for='cuenta' data-error='*Completa correctamente este campo' data-success='¡Bien!'>Profesor</label>
						</div>
					</div>
					<!--Alumno-->
					<div class='row'>
						<div class='input-field col s6'>
								<i class='material-icons prefix'>vpn_key</i>
								<input id='alumno' name='alumno' type='text' class='validate tooltipped' data-position='bottom' data-delay='50' data-tooltip='Escribe su No. de cuenta'/>
								<label for='alumno' data-error='*Completa correctamente este campo' data-success='¡Bien!'>Alumno</label>
						</div>
					</div>
					<div class='row'>
						<div class='input-field col s6'>
							<i class='material-icons prefix'>mode_edit</i>
		          			<textarea id='mensaje' name='mensaje' class='materialize-textarea'></textarea>
		          			<label for='mensaje'>Mensaje</label>
		          		</div>	
	        		</div>

					<div class='modal-footer'>
						<input id='guarda' type='submit' class='waves-effect waves-blue btn-flat' align='center' value='Guardar'/>
					</div>
				</div>	
			</form>
	</div>";




?>