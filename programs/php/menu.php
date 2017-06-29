<?php

echo  "<!DOCTYPE html> 
		<html lang='es'>
			<head>	
				<title></title>
				<meta charset='UTF-8'/>
				<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
				<!--Import Google Icon Font-->
				 <link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
				 <!--Import materialize.css-->
				 <link type='text/css' rel='stylesheet' href='../../materialize/css/materialize.min.css'  media='screen,projection'/>
				 <!--Let browser know website is optimized for mobile-->
				 <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
				 <!---Estilo menu------------>
				 <link  type='text/css' rel='stylesheet' href='../../styles/estilado.css'>
				 <!---Iconos--------------------------------------------------->
				 <link type='text/css' rel='stylesheet' href='../../resources/fonts/sube.css'>
				 <!---Estilo general--->
				 <link  type='text/css' rel='stylesheet' href='../../styles/estilo.css'>
			</head>";
			
			//------Menu estatico----------------------------------------------------------------------------->
echo			"<body>
												<nav class='nav-extended'>
													<div class='nav-wrapper light-blue darken-1' style='height:120px;'>
														
															<a href='https://www.unam.mx/' target='_blank' class='brand-logo hide-on-med-and-down'><img src='https://www.unam.mx/sites/all/themes/unam/logo.png' height='120px' /></a>
															<a href='../../templates/index.html' class='brand-logo right hide-on-med-and-down'><img src='../../resources/images/bande.png' height='110px'/></a>
															<a href='../../templates/index.html' class='brand-logo center'><img src='../../resources/images/logo.png' height='120px'/></a>
													
													</div>
												</nav>	
												<nav>
													<div class='nav-wrapper light-blue darken-2'>
														<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
														<ul id='nav-mobile' style='padding-left:140px;' class='left hide-on-med-and-down'>
																<li><a href='../../templates/index.html' id='home' onclick='return checa()'>INICIO</a></li>
																<li><a href='#test1'>¿QUÉ ES LA MEDIATECA?</a></li>
																<li><a href='#test2'>MISIÓN</a></li>
																<li><a href='#test3'>VISIÓN</a></li>
																<li><a href='#test5'>APRENDER A APRENDER</a></li>
																<li><a href='#test6'>ASESORES</a></li>
																<li><a href='#test7' target='_blank'>REPOSITORIO DE MATERIALES</a></li>
																<li><a href='../php/videos.php'>VIDEOS</a></li>
																<li><a href='http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/09/REGLAMENTO-DE-LA-MEDIATECA-2015.pdf' target='_blank'>REGLAMENTO</a></li>
																
														</ul>
														<ul class='side-nav' id='mobile-demo'>
															<li><a href='../../index.html'>INICIO</a></li>
															<li><a href='#test1'>¿QUÉ ES LA MEDIATECA?</a></li>
															<li><a href='#test2'>MISIÓN</a></li>
															<li><a href='#test3'>VISIÓN</a></li>
															<li><a href='#test5'>APRENDER A APRENDER</a></li>
															<li><a href='#test6'>ASESORES</a></li>
															<li><a href='#test7'> target='_blank'>REPOSITORIO DE MATERIALES</a></li>
															<li><a href='../php/videos.php'>VIDEOS</a></li>
															<li><a href='http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/09/REGLAMENTO-DE-LA-MEDIATECA-2015.pdf' target='_blank'>REGLAMENTO</a></li>
															
														</ul>
													
													</div>	
												</nav>";	
												
													
													
												
						//-------------Modals-------------------------------------------------------------------------->												 
										
									echo"<div id='test1' class='modal'>
											<div class='modal-content'>
												<h4>¿Qué es la mediateca?</h4>
												<p>Mediateca</p>
												<p>La Mediateca es un centro de aprendizaje autodirigido de lenguas extranjeras, el cual ofrece inglés, francés, alemán e italiano con un horario de 8:40 a 20:20 hrs.</p>
											</div>					
										</div>
										<div id='test2' class='modal'>
											<div class='modal-content'>
												<h4>MISIÓN</h4>
												<p>La Mediateca de la ENP Plantel 6 'Antonio Caso' tiene como misión ofrecer la modalidad de aprendizaje autodirigido en lenguas mediante la formación del aprendiente, la oferta de materiales y recursos de aprendizaje, así como la asesoría académica para apoyar la enseñanza y el aprendizaje de las lenguas y culturas del idioma inglés, francés, italiano y alemán de la comunidad del plantel.</p>
											</div>					
										</div>					
										<div id='test3' class='modal'>
											<div class='modal-content'>
												<h4>VISIÓN</h4>
												<p>Ofrecer mediante la modalidad de aprendizaje autodirigido, la adquisición de las cuatro habilidades de la lengua del inglés, francés, alemán e italiano; la preparación de las certificaciones, la profesionalización de la Opción Técnica en la Enseñanza de Inglés, y el mejoramiento continuo en el aprovechamiento y rendimiento de los aprendientes del Plantel 6.</p>
											</div>
										</div>
										<div id='test5' class='modal modal-fixed-footer'>
											<div class='modal-content'>
												<h4>Aprender aprender</h4>
												<p>Una parte de la formación del aprendiente que le facilita el desarrollo de su capacidad para asumir la responsabilidad de dirigir su propio aprendizaje es “Aprender a aprender”.
													“Aprender a aprender” le ayuda a descubrir, reflexionar y adquirir conciencia sobre los procesos internos y personales de adquisición y manejo del conocimiento, a través de un conjunto de actividades prácticas. La mediateca ofrece materiales impresos y los temas son:</p>
												<p>
												    Cómo se aprende<br/>
												    Cómo se aprende una lengua extranjera<br/>
												    Estilos y estrategias de aprendizaje<br/>
												    Desarrollo de habilidades
												</p>
											
												<p>La formación de “Aprender a aprender” se lleva a cabo de manera paralela al aprendizaje de la lengua extranjera, y se espera que repercuta en éste.</p>
												
												<h4>Estilos de aprendizaje</h4>
												
												<p>En la Mediateca los estudiantes aprenden a su propio ritmo y de acuerdo con sus necesidades, objetivos y posibilidades personales. Esto significa que, se les ayuda para que desarrollen la capacidad de asumir la dirección de su aprendizaje lingüístico.
												La mediateca brinda a los estudiantes una estructura de información y apoyo permanente en: asesorías, materiales y talleres de Aprender a aprender, y una amplia variedad de recursos didácticos.</p>
											
												<h4>Estrategias de aprendizaje</h4>
												
												<p>En la mediateca no existen programas de estudio ni formas de evaluación predeterminadas, ya que cada estudiante decide qué y cómo va a aprender y cómo y cuándo se autoevalúa; es decir, él mismo define su programa de aprendizaje lingüístico.
												Este espacio educativo representa así, una alternativa real de aprendizaje de idiomas porque se adapta a múltiples estilos, necesidades, intereses y capacidades individuales.</p>
											</div>
										</div>	
										<div id='test6' class='modal'>
											<div class='modal-content'>
												<h4>Asesores</h4>
												<strong><p>Funciones del asesor</p></strong>
												<p>Los asesores los orientan acerca de los materiales didácticos que podrían ser útiles para cubrir sus necesidades y objetivos específicos así como, las formas en que pueden organizar su estudio; tratan también aspectos lingüísticos y formas de autoevaluación. Las asesorías fomentan la reflexión y la toma de conciencia sobre los estilos de aprendizaje de cada estudiante.
												   Los estudiantes acuden a las asesorías por su propia voluntad dentro de los horarios ofrecidos. En ellas discuten con asesores aspectos relacionados con el proceso de aprendizaje que están desarrollando en la mediateca, tales como: las necesidades y dificultades que enfrentan en el idioma extranjero, los objetivos que pretenden alcanzar, su motivación, sus estilos y estrategias de aprendizaje y sus capacidades personales para aprender.
												   Una vez que los estudiantes establecen su plan de trabajo en la mediateca, las asesorías representan una herramienta de seguimiento y orientación permanente, por medio de la cual se fortalece su formación como aprendientes autónomos.</p>
											</div>
										</div>	
										<div id='test7' class='modal'>
											<div class='modal-content'>
												<center>
													<div><a href='matingles.php' title='INGLES'>INGLES</a></div>
													<div><a href='matfrances.php' title='FRANCES'>FRANCES</a></div>
													<div><a href='#' title='ALEMAN'>ALEMAN</a></div>
													<div><a href='#' title='ITALIANO'>ITALIANO</a></div>
													<div><a href='http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2016/08/plan-de-trabajo.pdf' target='_blank' title='PLAN'>PLAN DE TRABAJO</a></div>
												</center>
											</div>
										</div>";	
							//-----------------Barra Social------------------------------------------------------------------------>
							echo		"<div class='social'>
											<ul>
												<li><a href='https://www.facebook.com/mediatecaprepaseis' target='_blank' class='icon-facebook2'></a></li>
												<li><a href='https://twitter.com/@MediatecaP6' target='_blank' class='icon-twitter'></a></li>
												<li><a href='https://www.youtube.com/channel/UCtQflQgDQAbp9l4ELYw829w' target='_blank' class='icon-youtube'></a></li>
												<li><a href='#' class='icon-google-plus3'></a></li>
											</ul>	
										</div>";
													
										
							//----------------Scripts-------------------------------------------------------------------------------------------------------------------------------------->
							echo	"<script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
									<script type='text/javascript' src='../../materialize/js/materialize.min.js'></script>
									<script>
												 $(document).ready(function(){
													$('.modal').modal()
												  });	
												   $( document ).ready(function(){
												  
												  $('.button-collapse').sideNav();
												  });";
											
																								
												/*if(isset($_SESSION['nombre'] ) )

												{
													//$('#home').attr('href','index.php');
													echo "Sesion iniciada";
												}
												else {
													//$('#home').attr('href','index.html');
													echo "No iniciado";
												  };
												  */

echo								"</script>";				
echo		"</body>";
echo	"</html>";
?>
		