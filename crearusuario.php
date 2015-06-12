<?php

//obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
//conexion
$conexion = new PDO('sqlite:favoritos.db');

//consulta
/*LOS PRIVILEGIOS SON LOS SIGUIENTES:
1.Administrador
2.Controlador
3.Usuario registrado
4.Usuario invitado
*/
$consulta= "INSERT INTO usuarios VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad',3)";
echo $consulta;
//ejecutar
$resultado = $conexion->exec($consulta);

//cerrar
$conexion= Null;


?>