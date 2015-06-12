<?php

session_start();
//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo= $_POST['titulo'];
$direccion= $_POST['direccion'];
$categoria= $_POST['categoria'];
$contenido= $_POST['contenido'];
$valoracion= $_POST['valoracion'];

$tituloantiguo = $_SESSION['titulo'];


$consulta= "UPDATE favoritos SET titulo='".$titulo."', direccion= '".$direccion."', categoria= '".$categoria."', contenido='".$contenido."', valoracion= '".$valoracion."' WHERE titulo='".$tituloantiguo."'";

//ejecutar consulta
$resultado= $conexion->query($consulta);

//cierro
$conexion= Null;

echo'
<html>
     <head>
        <meta http-equiv= "REFRESH" content="0;url=principal.php">
     </head> 

</html>

';

?>