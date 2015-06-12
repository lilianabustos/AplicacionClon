<?php

//obtener variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//creamos la conexion
$conexion = new PDO('sqlite:favoritos.db');

//consulta
$consulta= "SELECT * FROM usuarios;";

//lanzar la consulta
$resultado= $conexion->exec($consulta);

//repasar los resultados y s8i el resultado es positivo entonces asignar


//si el resultado es negativo, entonces nada

//cerramos la bd


?>