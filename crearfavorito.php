<?php
session_start();

//crear variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcontenido = $_POST['contenido'];
$addvaloracion = $_POST['valoracion'];

//conexion
$conexion = new PDO('sqlite:favoritos.db');

//consulta
$consulta= "INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcontenido','$addvaloracion')";

//ejecuto
$resultado= $conexion->exec($consulta);

//cierro
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