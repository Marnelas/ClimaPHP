<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$nombre = $_POST["name"];
$postal = $_POST["direction"];
$email = $_POST["email"];
$prefijo = $_POST["prefijo"];
$telefono = $_POST["telefono"];
echo "la información introducida es: <br> Nombre: " . $nombre . "<br> Código postal: " . $postal . "<br> Email: " . $email . "<br> Teléfono: " . $prefijo . $telefono;
//obtenemos clima

// api.openweathermap.org/data/2.5/weather?zip=94040,us
$key = $_ENV["APIKEY"];
        
        


$jsondata = file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip=' . $postal . ',es&APPID=' . $key);
$vars = json_decode($jsondata);
$cond = $vars->main;
$temp_c = $cond->temp - 273.15;
$temp_f = 1.8 * ($cond->temp - 273.15) + 32;
echo "<br>Temp C: ".$temp_c."\n";
echo "Temp F: ".$temp_f."\n";



?>
