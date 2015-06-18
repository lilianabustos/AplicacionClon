<?php

session_start();
//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

$usuarioantiguo = $_SESSION['usuario'];

$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];





$consulta= "UPDATE usuarios SET usuario='".$usuario."', contrasena= '".$contrasena."', nombre= '".$nombre."', apellido='".$apellido."', edad= '".$edad."' WHERE usuario='".$usuarioantiguo."'";

//ejecutar consulta
$resultado= $conexion->query($consulta);

//cierro
$conexion= Null;

echo'
<html>
     <head>
        <meta http-equiv= "REFRESH" content="0;url=gestionusuarios.php">
     </head> 

</html>

';

?>