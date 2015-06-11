<?php

session_start();


//recupero variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo= $_GET['titulo'];
$direccion= $_GET['direccion'];
$categoria= $_GET['categoria'];
$contenido= $_GET['contenido'];
$valoracion= $_GET['valoracion'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

$consulta=" SELECT * FROM favoritos WHERE usuario=".$usuario."'AND contrasena='".$contrasena."'AND categoria='".$categoria."'AND contenido='".$contenido."'AND valoracion'".$valoracion."";
$resultado = $conexion->query($consulta);
echo "
<table border =1 width= 100%>
<tr>
    <td>titulo</td>
    <td>direccion</td>
    <td>categoria</td>
    <td>comentario</td>
    <td>valoracion</td>
</tr>
</table>


";


?>