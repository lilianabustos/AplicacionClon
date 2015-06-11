<?php

session_start();

//conexion
$conexion = new PDO('sqlite:favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo= $_GET['titulo'];
$direccion= $_GET['direccion'];
$categoria= $_GET['categoria'];
$contenido= $_GET['contenido'];
$valoracion= $_GET['valoracion'];

$consulta = "DELETE FROM favoritos WHERE usuario='".$usuario."'
 AND contrasena ='".$contrasena."'  
 AND titulo='".$titulo."' 
 AND direccion='".$direccion."' 
 AND categoria='".$categoria."'  
 AND contenido='".$contenido."' 
 AND valoracion='".$valoracion."';";
echo $consulta;
//ejecuto
$resultado= $conexion->exec($consulta);

$conexion = Null;

//y vuelvo
 echo '
 <html>
    <head>
         <meta http-equiv= "REFRESH" content="0;url=principal.php">
      </head>
 </html>
 ';
?>