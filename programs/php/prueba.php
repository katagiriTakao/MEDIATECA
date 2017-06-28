<?php


$equipo = array('portero'=>'Cech', 'defensa'=>'Terry', 'medio'=>'Lampard', 'delantero'=>'Torres');

$respucorect = array('1'=>'A', '2'=>'C', '3'=>'B', '4'=>'D');


 
foreach($respucorect as $pregunta=>$letra)
	{
	echo " <br/>La respuesta a la pregunta  " . $pregunta . " es " . $letra;
	}


/*?php
$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";

foreach($array as $v) {
  var_dump($v);
}
?>*/














?>