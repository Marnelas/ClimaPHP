<?php


$nombre = $_POST["name"];
$ciudad = $_POST["direction"];
$email = $_POST["email"];
$prefijo = $_POST["prefijo"];
$telefono = $_POST["telefono"];
echo "la información introducida es: <br> Nombre: " . $nombre . "<br> Ciudad: " . $ciudad . "<br> Email: " . $email . "<br> Teléfono: " . $prefijo . $telefono;
//obtenemos clima
/** @var type $json_file */
$jsondata = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . $ciudad . ', PR&APPID={APIKEY}');
$vars = json_decode($json_file);
/* 2 -> ASIGNANDO LOS VALORES */
$cond = $vars->main;
$temp_c = $cond->temp - 273.15;
$temp_f = 1.8 * ($cond->temp - 273.15) + 32;
/* 3 -> IMPRIMIR RESULTADOS */
echo "Temp C: ".$temp_c."\n";
echo "Temp F: ".$temp_f."\n";





?>
