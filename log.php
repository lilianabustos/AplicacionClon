<?php

session_start();

$utc= date('U');
$anio= date('Y');
$mes= date('n');
$dia= date('d');
$hora= date('H');
$minuto= date('i');
$segundo= date('s');

$usuariolog= $_SESSION['usuario'];
$contrasenalog= $_SESSION['contrasena'];

//para evitar warnings
@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

//conexion
$conexion = new PDO('sqlite:favoritos.db');

//consulta
$consulta= "INSERT INTO logs VALUES('$utc','$anio','$mes','$dia','hora','$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog');";

//ejecuto
$resultado= $conexion->exec($consulta);

//cierro
$conexion = Null;

?>