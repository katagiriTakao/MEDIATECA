﻿
<!DOCTYPE html> 

<?php
 
 session_start();

?>


	<html lang="es">
		<head>	
			<title>Mediateca</title>
			<meta charset="UTF-8"/>
			<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
			<!--Import Google Icon Font-->
			 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			 <!--Import materialize.css-->
			 <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
			 <!--Let browser know website is optimized for mobile-->
			 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			 <!---Estilo menu------------>
			 <link  type="text/css" rel="stylesheet" href="../styles/estilado.css">
			 <!---Estilo general--->
			 <link  type="text/css" rel="stylesheet" href="../styles/estilo.css">
			 <!---Iconos--------------------------------------------------->
			 <link type="text/css" rel="stylesheet" href="../resources/fonts/sube.css">
			 <!---------jquery--del boton arriba------------------------------------------------->
			 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
			 <script>
								
									$(document).ready(function(){
									 
										$('.ir-arriba').click(function(){
											$('body, html').animate({
												scrollTop: '0px'
											}, 500);
										});
									 
										$(window).scroll(function(){
											if( $(this).scrollTop() > 0 ){
												$('.ir-arriba').slideDown(300);
											} else {
												$('.ir-arriba').slideUp(300);
											}
										});
									 
									});				
			 </script>
		</head>
		
		<!------Menu estatico----------------------------------------------------------------------------->
		<body>
				<!---Boton ir arriba------------>
					<span class="ir-arriba icon-chevron-thin-up"></span>
					<!------------------------------------------------------>
												<nav class="nav-extended">
													<div class="nav-wrapper  light-blue darken-1" style="height:120px;">
														<a href="https://www.unam.mx/" target="_blank" class="brand-logo hide-on-med-and-down"><img src="https://www.unam.mx/sites/all/themes/unam/logo.png" height="120px"/></a>
														<a href="index.html" class="brand-logo right hide-on-med-and-down"><img src="../resources/images/bande.png" height="110px"/></a>
														<a href="index.html" class="brand-logo center"><img src="../resources/images/logo.png" height="120px"/></a>
													</div>
												</nav>	
												<nav>
													<div class="nav-wrapper light-blue darken-2">
														<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
														<?php echo" <a href='' class='left'>¡Hola! ".$_SESSION['nombre']."</a>";?>
														<ul id="nav-mobile" style="padding-left:60px;" class="left hide-on-med-and-down">
																<li><a href="index.html">INICIO</a></li>
																<li><a href="#test1">¿QUÉ ES LA MEDIATECA?</a></li>
																<li><a href="#test2">MISIÓN</a></li>
																<li><a href="#test3">VISIÓN</a></li>
																<li><a href="#test5">APRENDER A APRENDER</a></li>
																<li><a href="#test6">ASESORES</a></li>
																<li><a href="#test7" target="_blank">REPOSITORIO DE MATERIALES</a></li>
																<li><a href="../programs/php/videos.php">VIDEOS</a></li>
																<li><a href="http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/09/REGLAMENTO-DE-LA-MEDIATECA-2015.pdf" target="_blank">REGLAMENTO</a></li>
																<li><a href="index.html">SALIR</a></li>
															
														</ul>
													<ul class="side-nav" id="mobile-demo">
															<li><a href="index.html">INICIO</a></li>
															<li><a href="#test1">¿QUÉ ES LA MEDIATECA?</a></li>
															<li><a href="#test2">MISIÓN</a></li>
															<li><a href="#test3">VISIÓN</a></li>
															<li><a href="#test5">APRENDER A APRENDER</a></li>
															<li><a href="#test6">ASESORES</a></li>
															<li><a href="#test7" target="_blank">REPOSITORIO DE MATERIALES</a></li>
															<li><a href="../programs/php/videos.php">VIDEOS</a></li>
															<li><a href="http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/09/REGLAMENTO-DE-LA-MEDIATECA-2015.pdf" target="_blank">REGLAMENTO</a></li>
															<li><a href="index.html">SALIR</a></li>
														
														</ul>
													</div>	
												</nav>	
												
											
							
						<!-----------------Barra Social------------------------------------------------------------------------>
										<div class="social">
											<ul>
												<li><a href="https://www.facebook.com/mediatecaprepaseis" target="_blank" class="icon-facebook2"></a></li>
												<li><a href="https://twitter.com/@MediatecaP6" target="_blank" class="icon-twitter"></a></li>
												<li><a href="https://www.youtube.com/channel/UCtQflQgDQAbp9l4ELYw829w" target="_blank" class="icon-youtube"></a></li>
												<li><a href="#" class="icon-google-plus3"></a></li>
											</ul>	
										</div>

						<!--------------Modals-------------------------------------------------------------------------->												 
										
										<div id="test1" class="modal">
											<div class="modal-content ">
												<h4>¿Qué es la mediateca?</h4>
												<p>Mediateca</p>
												<p>La Mediateca es un centro de aprendizaje autodirigido de lenguas extranjeras, el cual ofrece inglés, francés, alemán e italiano con un horario de 8:40 a 20:20 hrs.</p>
											</div>					
										</div>
										<div id="test2" class="modal">
											<div class="modal-content ">
												<h4>MISIÓN</h4>
												<p>La Mediateca de la ENP Plantel 6 “Antonio Caso” tiene como misión ofrecer la modalidad de aprendizaje autodirigido en lenguas mediante la formación del aprendiente, la oferta de materiales y recursos de aprendizaje, así como la asesoría académica para apoyar la enseñanza y el aprendizaje de las lenguas y culturas del idioma inglés, francés, italiano y alemán de la comunidad del plantel.</p>
											</div>					
										</div>					
										<div id="test3" class="modal">
											<div class="modal-content ">
												<h4>VISIÓN</h4>
												<p>Ofrecer mediante la modalidad de aprendizaje autodirigido, la adquisición de las cuatro habilidades de la lengua del inglés, francés, alemán e italiano; la preparación de las certificaciones, la profesionalización de la Opción Técnica en la Enseñanza de Inglés, y el mejoramiento continuo en el aprovechamiento y rendimiento de los aprendientes del Plantel 6.</p>
											</div>
										</div>
										<div id="test5" class="modal modal-fixed-footer">
											<div class="modal-content ">
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
										<div id="test6" class="modal">
											<div class="modal-content ">
												<h4>Asesores</h4>
												<strong><p>Funciones del asesor</p></strong>
												<p>Los asesores los orientan acerca de los materiales didácticos que podrían ser útiles para cubrir sus necesidades y objetivos específicos así como, las formas en que pueden organizar su estudio; tratan también aspectos lingüísticos y formas de autoevaluación. Las asesorías fomentan la reflexión y la toma de conciencia sobre los estilos de aprendizaje de cada estudiante.
												   Los estudiantes acuden a las asesorías por su propia voluntad dentro de los horarios ofrecidos. En ellas discuten con asesores aspectos relacionados con el proceso de aprendizaje que están desarrollando en la mediateca, tales como: las necesidades y dificultades que enfrentan en el idioma extranjero, los objetivos que pretenden alcanzar, su motivación, sus estilos y estrategias de aprendizaje y sus capacidades personales para aprender.
												   Una vez que los estudiantes establecen su plan de trabajo en la mediateca, las asesorías representan una herramienta de seguimiento y orientación permanente, por medio de la cual se fortalece su formación como aprendientes autónomos.</p>
											</div>
										</div>	
										<div id="test7" class="modal">
											<div class="modal-content">
												<center>
													<div><a href="../programs/php/matingles.php" title="INGLES">INGLES</a></div>
													<div><a href="../programs/php/matfrances.php" title="FRANCES">FRANCES</a></div>
													<div><a href="#" title="ALEMAN">ALEMAN</a></div>
													<div><a href="#" title="ITALIANO">ITALIANO</a></div>
													<div><a href="http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2016/08/plan-de-trabajo.pdf" target="_blank" title="PLAN">PLAN DE TRABAJO</a></div>
												</center>
											</div>
										</div>				
										
						<!----------Slider de imagenes------------------------------------------------------------------>				
										<div class="slider">
											<ul class="slides">
											  <li>
												<img src="http://www.alcazarenformacion.es/wp-content/uploads/2017/02/ART03PORTADA.jpg"> 
												<div class="caption center-align">
												  <h3 class="black-text">MEDIATECA</h3>
													<strong><h5 class="white-text">Bienvenido a TU mediateca</h5></strong>
												</div>
											   </li>
											  <li>
											  <img src="https://wallpaperscraft.com/image/wine_picnic_grapes_plantation_baguette_basket_glasses_45167_3840x2160.jpg"> 
												<div class="caption center-align">
												  <h3>TALLERES</h3>
												  <h5 class="light grey-text text-lighten-3">Talleres remediales de idiomas <a class="indigo waves-light btn" href="https://docs.google.com/forms/d/e/1FAIpQLSfcq5V8pz8-HQ0fvtdRWh7uCKrC0H-7oxla21ni-wiQyPtlrg/closedform" target="blank">REGISTRATE</a>   <a class="indigo waves-light btn" href="http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/04/Programa1.pdf" target="blank">HORARIOS</a></h5>
												</div>
											  </li>
											  <li><a href="http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/02/CRONOGRAMA.pdf" target="blank">
												<img src="https://www.infoidiomas.com/wp-content/uploads/aspectos-mas-dificiles-aleman.jpg"> 
												<div class="caption center-align">
												  <h3>SEMINARIOS</h3>
												  <h5 class="light grey-text text-lighten-3" >Registro a seminarios permanentes</h5>
												</div>
											  </a></li>
											  <li><a href="http://www.estecesp.enp.unam.mx/PI-CIA/INFORMACION%20IMPORTANTE%20EX%C3%81MENES%20PI-CIA_%20SEDE%206_2017.pdf" target="blank">
												<img src="http://www.pastaforall.info/wordpress/wp-content/uploads/2014/04/pasta1-650x340.jpg"> 
												<div class="caption center-align">
												  <h3>PICIA</h3>
												  <h5 class="light grey-text text-lighten-3" >Fechas de exámenes de CAMBRIDGE</h5>
												</div>
											  </a></li>
											 
											</ul>
										 </div>
										
										 
										 
							<!------------------------------------------- cartas de alumnos-------------------------------------------------->
                                                        
                                <ul>
									<div class='row'>
                                       <div class="col m5 s4 push-s3 push-m5">
											<li onclick="cambioAlu()" class="btn indigo darken-2 waves-effect waves-light">ALUMNADO</li>
											<li onclick="cambioPro()" class="btn indigo darken-2 waves-effect waves-light">DOCENTES</li>
                                        </div>
                                    </div>
								</ul>                                                       
                                <div class="container">        
                                    <div class="row">                                                       
                                        <div class="col s12 hide " id="secAlumn">
                                            <div class="row">
                                                <h6 class="titulo">ALUMNOS</h6>
                                                    <p id='primer'></p>
                                                    <p id='segund'></p>
                                            </div>        
                                            <div class="row">
												<p id='tercer'></p>
												<p id='cuarto'></p>
											</div>        
											<div class="row">
												<p id='quinto'></p>
												<p id='sexto'></p>
											</div>
											<div class="row">
												<p id='sept'></p>
												<p id='oct'></p>
											</div> 
											<div class="row">
												<p id='nov'></p>
												<p id='dec'></p>
											</div>  

										</div>  
										<div class="col s12 hide" id="secProf">      
											<div class="row">
												<h6 class="titulo">PROFESORES</h6>
													<p id='primerPr'></p>
													<p id='segundoPr'></p>
													<p id='terceroPr'></p>
											</div>  
										</div>      
                                        <div class="row">
                                            <h6 class="titulo">SERVICIOS</h6>
												<p id='mater'></p>
												<p id='plan'></p>
                                        </div>
                                    </div>
                                </div>
                                          
                                             
									
								<!-----------------Sitios de interés-------------------------------------------------------------------------------------------------->	
								<div class="container">	
									<div class="row">
										<div class="col s12">	
								
										<ul  class="collapsible" id="ul" data-collapsible="accordion">
												<li>
													<h1>Sitios de interés</h1>
												</li>	
												<li>
													<div class="collapsible-header"><img src="http://www.ferbogar.com/uploads/ferbogar/a347a-reinounido.jpg" height="20px" width="30px"/>       INGLES</div>
													<div class="collapsible-body"><a href="http://www.perfect-english-grammar.com/index.html" target="_blank" title="Perfect English Grammar">Perfect English Grammar</a></div>
													<div class="collapsible-body"><a href="https://docs.google.com/spreadsheets/d/1bDw3LXfDeS7FqCzJHxfvjujjzjcCfVRDeQDPHbxE7cE/edit?ts=57756795#gid=0" target="_blank" title="Readers' stock for Students">Readers stock for Students</a></div>
												</li>
												<li>
													<div class="collapsible-header"><img src="http://fondopantalla.com.es/file/552/2560x1600/crop/fondo-de-pantalla-bandera-de-francia.jpg" height="20px"  width="30px"/>  FRANCES</div>
													<div class="collapsible-body"><a href="http://annabeljuarez.wixsite.com/francessisimo" target="_blank" title="FRACESSISIMO!!!">FRACESSISIMO!!!</a></div>
													<div class="collapsible-body"><a href="http://annabeljuarez9.wixsite.com/mediateque" target="_blank" title="Ruta de aprendizaje de Francés de la Mediateca de la ENP 6">Ruta de aprendizaje de Francés de la Mediateca de la ENP 6</a></div>
												</li>
												<li>
													<div class="collapsible-header"><img src="http://i2.wp.com/bancodeimagenesgratis.net/wp-content/uploads/2015/07/fondo-pantalla-bandera-de-alemania.jpg" height="20px"  width="30px"/>  ALEMAN</div>
													<div class="collapsible-body"><a href="https://www.goethe.de/ins/mx/es/index.html" target="_blank" title="Goethe institut">Goethe institut</a></div>
												</li>
											
												<li>
													<div class="collapsible-header"><i class="material-icons">view_list</i>Otros</div>
													<div class="collapsible-body"><a href="https://sites.google.com/site/catalogoprepa6/" target="_blank" title="Catálogo de materiales">Catálogo de materiales</a></div>
													<div class="collapsible-body"><a href="http://www.mediateca.prepa6.unam.mx/laboratorios/index.html" target="_blank" title="Laboratorios de idiomas">Laboratorios de idiomas</a></div>
												</li>	
										</ul>
									</div>
								</div>
							</div>
							  
		
											
						<!--Footer-----------------------------------------------------------------------------------------------------------------------------------------------------------------> 
									 <footer class="white page-footer">
											  <div class="blue-grey darken-4 footer-copyright">
												<div class="container white-text">
												© 2017 Copyright Text
												<a class="white-text right" href="http://www.prepa6.unam.mx">Preparatoria 6 Antonio Caso</a>
												</div>
											  </div>
									 </footer>
						<!----------------Scripts-------------------------------------------------------------------------------------------------------------------------------------->
									<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
									<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
									<script>
												$(document).ready(function(){
													$('.slider').slider();
												});
												
												 $(document).ready(function(){
										
													$('.modal').modal();
												  });
												  
												  $( document ).ready(function(){
												  
												  $(".button-collapse").sideNav();
												  });
											
											
											
											  function carta(imagen,titulo,enlace){

                                                                                    this.image = imagen;
                                                                                    this.titu = titulo;
																					this.accion=enlace;
                                                                    }

                                                                										  var apren = new carta('https://www.intelligent.com/wp-content/uploads/2013/06/chapter_pic02-1.jpg','APRENDIZAJE AUTODIRIGIDO','../programs/php/plan.php');
                                                                                                          var taller = new carta('http://www.mediateca.prepa6.unam.mx/laboratorios/imgs/LI1.jpg','TALLERES','http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/04/Programa1.pdf');  
                                                                                                          var audio = new carta('http://planetalibro.net/img/audiolibros.jpg','AUDIOLIBROS','http://www.mediateca.prepa6.unam.mx/?page_id=239');

                                                                                                          var asesor = new carta('http://pizarronesaries.com.mx/wp-content/uploads/2014/10/pizarron-verde.jpg','ASESORES','http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/05/HORARIO-ASESORES-16-17_020517.pdf');
                                                                                                          var lab = new carta('http://colegioalboradacoyhaique.cl/2015/wp-content/uploads/2015/05/m_514.jpg','LABORATORIO','http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/03/Laboratorio_Multimedia_17_Marzo.pdf');

                                                                                                          var revis = new carta('https://pbs.twimg.com/profile_images/1595572932/PREPA_666_400x400.png','REVISTA','https://view.joomag.com/mi-mediateca/0938958001470151257?short');
                                                                                                          var encu = new carta('http://gcrh.com.mx/wp-content/uploads/encuesta_grande.jpg','ENCUESTA','https://docs.google.com/forms/d/e/1FAIpQLSdr-F3b-USKrQ_oAfbPker62Fige3ljfI1G0Yo5jypCtJw8vg/viewform?c=0&w=1');

                                                                                                          var certif = new carta ('http://www.vexillologymatters.org/images/united_kingdom.png','CERTIFICACIONES','http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2017/04/PI-CIA_-SEDE.pdf');
                                                                                                          var beca = new carta ('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Flag_of_Europe.svg/1280px-Flag_of_Europe.svg.png','BECAS','../programs/php/becaalu.php');
                                                                                                          var becaProf = new carta ('http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/08/becas1-150x150.png','BECAS PARA PROFESORES','../programs/php/becaprofe.php');
                                                                                                          var semProf =new carta('http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2012/08/Seminario-mediateca2-150x150.jpg','REGISTRO AL SEMINARIO','https://docs.google.com/forms/d/e/1FAIpQLSd2F66HnOWcmnAeGPL_FDjB_CE-AkaV5A4UV-FGZ6Qck38QLA/viewform?c=0&w=1');
                                                                                                          var mater =new carta('http://www.lifeder.com/wp-content/uploads/2016/07/blogs-para-aprender-ingl%C3%A9s.jpg','MATERIALES','http://www.mediateca.prepa6.unam.mx/?page_id=1092');
                                                                                                          var plan =new carta('https://contadormx.com/wp-content/uploads/2015/10/formas-y-formatos-del-sat.png','PLAN DE TRABAJO','http://www.mediateca.prepa6.unam.mx/wp-content/uploads/2016/08/plan-de-trabajo.pdf');


                                                                                                          var captura =new carta('../resources/images/captura.png','CAPTURA EXAMEN','../programs/php/captura-examen.php');



                                                                $('#primer').html('<div class="col s12 m6 "><div class="card horizontal"><div class="card-image"><img src="'+taller.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+taller.titu+'</p></div><div class="card-action"><a href="'+taller.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');        
                                                                $('#segund').html('<div class="col s12 m6 "><div class="card horizontal"><div class="card-image"><img src="'+audio.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+audio.titu+'</p></div><div class="card-action"><a href="'+audio.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');                
                                                                $('#tercer').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+asesor.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+asesor.titu+'</p></div><div class="card-action"><a href="'+asesor.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');        
                                                                $('#cuarto').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+lab.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+lab.titu+'</p></div><div class="card-action"><a href="'+lab.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');
                                                                $('#quinto').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+revis.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+revis.titu+'</p></div><div class="card-action"><a href="'+revis.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');        
                                                                $('#sexto').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+encu.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+encu.titu+'</p></div><div class="card-action"><a href="'+encu.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');        
                                                                $('#sept').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+certif.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+certif.titu+'</p></div><div class="card-action"><a href="'+certif.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');                        
                                                                $('#oct').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+beca.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+beca.titu+'</p></div><div class="card-action"><a href="'+beca.accion+'"  class="indigo-text">ENTRA</a></div></div></div></div>');
                                                                $('#nov').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+apren.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+apren.titu+'</p></div><div class="card-action"><a href="'+apren.accion+'"  class="indigo-text">ENTRA</a></div></div></div></div>');
                                                               



                                                                $('#primerPr').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+becaProf.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+becaProf.titu+'</p></div><div class="card-action"><a href="'+becaProf.accion+'" class="indigo-text">ENTRA</a></div></div></div></div>');
                                                                $('#segundoPr').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+semProf.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+semProf.titu+'</p></div><div class="card-action"><a href="'+semProf.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');

                                                                $('#terceroPr').html('<div class="col s12 m6"><div class="card horizontal "><div class="card-image"><img src="'+captura.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+captura.titu+'</p></div><div class="card-action"><a class="my-link" href="'+captura.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');





                                                                

                                                                $('#mater').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+mater.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+mater.titu+'</p></div><div class="card-action"><a href="'+mater.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');
                                                                $('#plan').html('<div class="col s12 m6"><div class="card horizontal"><div class="card-image"><img src="'+plan.image+'" height="150px" max-width="250px"></div><div class="card-stacked"><div class="card-content"><p>'+plan.titu+'</p></div><div class="card-action"><a href="'+plan.accion+'" target="blank" class="indigo-text">ENTRA</a></div></div></div></div>');                        

																
																
															
														function cambioPro(){

                                                                 $("#secAlumn").addClass("hide");
                                                                 $("#secProf").removeClass("hide");
                              

                                                         }    
                                                            function cambioAlu(){

                                                                 $("#secProf").addClass("hide");
                                                                 $("#secAlumn").removeClass("hide");

                                                         }   

                                              
                                                       
                                                         	if(isset($_SESSION)){

                        									
                                                         		$(".my-link").bind('click',false);

                                                         	}else{

                                                         		$(".my-link").bind('click',true);

                                                         	}
                        									
                                                 
                                                                                                                
									</script>	


		</body>	
	</html>	
